<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use AppBundle\Entity\File;
use AppBundle\Entity\Task;
use AppBundle\Entity\User;
use AppBundle\Form\TaskType;
use Doctrine\Common\Collections\Criteria;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Translation\Translator;

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
        if (!$this->getUser()) {
            return new RedirectResponse($this->generateUrl('user_login'));
        }

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

    public function viewAction(Request $request, Task $task)
    {
        if (!$this->getUser()) {
            return new RedirectResponse($this->generateUrl('user_login'));
        }
        $em = $this->getDoctrine()->getManager();
        $attachments = $em->getRepository(File::class)->findBy(['task' => $task]);
        $comments = $em->getRepository(Comment::class)->findBy(['task' => $task]);
        $expiration = $task->getDeadline()->diff(new \DateTime());
        return $this->render('AppBundle:Tasks:view.html.twig', [
            'task' => $task,
            'attachments' => $attachments,
            'comments' => $comments,
            'statusChangePossibility' => Task::STATUS_CHANGE_POSSIBILITY,
            'expiration' => ['d' => $expiration->d, 'h' => $expiration->h],
        ]);
    }

    public function changeStatusAction($status, Task $task)
    {
        if (!$this->getUser()) {
            return new RedirectResponse($this->generateUrl('user_login'));
        }
        /** @var User $user */
        $user = $this->getUser();
        if ($user) {
            $role = $user->hasRole(User::ROLE_ADMIN) ? User::ROLE_ADMIN : User::ROLE_USER;
            if (array_key_exists($task->getStatus(), Task::STATUS_CHANGE_POSSIBILITY[$role]) &&
                in_array($status, Task::STATUS_CHANGE_POSSIBILITY[$role][$task->getStatus()])) {
                $task->setStatus($status);
                $this->getDoctrine()->getManager()->flush();
            } else {
                /** @var Translator $trans */
                $trans = $this->get('translator');
                $this->addFlash('error', $trans->trans('Tasks.Status.CouldNotChange', [
                    '%status%' => $trans->trans('Tasks.Status.'.$status),
                ]));
            }
        }

        return new RedirectResponse($this->generateUrl('task.view', ['id' => $task->getId()]));
    }
}
