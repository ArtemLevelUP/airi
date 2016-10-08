<?php
namespace AppBundle\Controller;

use AppBundle\Entity\File;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Exception\FileNotFoundException;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class FileController extends Controller
{
    public function getAction($filename)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var File $file */
        $file = $em->getRepository(File::class)->findOneBy(['filename' => $filename]);
        if (empty($file)) {
            throw new FileNotFoundException();
        }

        $task = $file->getTask() ? $file->getTask() : $file->getComment()->getTask();

        if (!in_array($this->getUser(), [
                $task->getCreator(), $task->getPerformer()
            ])) {
            throw new AccessDeniedException('Access denied to file');
        }

        $origFile = $this->getParameter('filesDir') . $filename;

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . $file->getTitle());
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($origFile));

        readfile($origFile);
    }
}
