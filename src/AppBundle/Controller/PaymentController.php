<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Entity\User;
use AppBundle\Service\ToPayCount;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PaymentController extends Controller
{
    public function listAction()
    {
        if (!$this->getUser()->hasRole(User::ROLE_ADMIN)) {
            return new RedirectResponse('homepage');
        }

        /** @var ToPayCount $counter */
        $counter = $this->get('app.to_pay_counter');
        $data = [];
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository(User::class)->findAll();

        /** @var User $user */
        foreach ($users as $user) {
            if (!$user->hasRole(User::ROLE_ADMIN)) {
                $data[] = ['user' => $user, 'toPay' => $counter->getSumPay($user)];
            }
        }

        return $this->render('AppBundle:Payments:toPay.html.twig', [
            'data' => $data
        ]);
    }

    public function viewAction(User $user)
    {
        if (!$this->getUser()->hasRole(User::ROLE_ADMIN)) {
            return new RedirectResponse('homepage');
        }
        
        $em = $this->getDoctrine()->getManager();
        /** @var ToPayCount $counter */
        $counter = $this->get('app.to_pay_counter');
        $approvedTasks = $em->getRepository(Task::class)->findBy([
            'performer' => $user,
            'status' => Task::STATUS_APPROVED,
        ]);

        return $this->render('AppBundle:Payments:toPayTasks.html.twig', [
            'approvedTasks' => $approvedTasks,
            'sum' => $counter->getSumPay($user),
        ]);
    }
}
