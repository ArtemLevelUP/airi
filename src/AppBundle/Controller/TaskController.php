<?php

namespace AppBundle\Controller;

use AppBundle\Entity\File;
use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;
use Doctrine\Common\Collections\Criteria;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends Controller
{
    public function listAction(Request $request)
    {
        if (!$this->getUser()) {
            return new RedirectResponse($this->generateUrl('user_login'));
        }

        $em = $this->getDoctrine()->getManager();

        $criteria = Criteria::create();
        $criteria->where(Criteria::expr()->orX(
            Criteria::expr()->eq('creator', $this->getUser()),
            Criteria::expr()->eq('performer', $this->getUser())
        ));
        $criteria->orderBy(['created' => Criteria::DESC]);

        $tasks = $em->getRepository(Task::class)->matching($criteria);

        return $this->render('AppBundle:Tasks:list.html.twig', [
            'tasks' => $tasks,
        ]);
    }

    public function editAction(Request $request, Task $task = null)
    {
        $em = $this->getDoctrine()->getManager();
        if (!$task) {
            $task = new Task();
        }

        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $deadline = $request->request->get('task')['deadline'];
                $task->setDeadline(\DateTime::createFromFormat('d.m.Y H:i', $deadline));
                $task->setCreator($this->getUser());

                $em->persist($task);
                $em->flush();

                if (!empty($task->getAttachments())) {
                    $attachments = $task->getAttachments();
                    /** @var UploadedFile $file */
                    foreach ($attachments as $attachment) {
                        $origName = $attachment->getClientOriginalName();
                        $fileName = md5(uniqid()) . '.' . $attachment->guessClientExtension();
                        $attachment->move(
                            $this->getParameter('filesDir') . 'task' . $task->getId() . '/',
                            $fileName
                        );

                        $file = new File();
                        $file->setTitle($origName);
                        $file->setFilename('task' . $task->getId() . '/' . $fileName);
                        $file->setTask($task);
                        $file->setCreator($this->getUser());

                        $em->persist($file);
                        $em->flush();
                    }
                }

                return new RedirectResponse($this->generateUrl('homepage'));
            } else {
                dump ($form->getErrors()->count()); exit;
            }
        }

        return $this->render('AppBundle:Tasks:edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
