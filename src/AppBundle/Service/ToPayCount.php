<?php
namespace AppBundle\Service;

use AppBundle\Entity\Task;
use AppBundle\Entity\User;
use Doctrine\ORM\EntityManager;

class ToPayCount
{
    const PRICE_PER_HOUR = 100;
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @param User $user
     *
     * @return int
     */
    public function getSumPay(User $user)
    {
        $sum = 0;
        $approvedTasks = $this->em->getRepository(Task::class)->findBy([
            'performer' => $user,
            'status' => Task::STATUS_APPROVED,
        ]);

        foreach ($approvedTasks as $task) {
            $sum += $this->getTaskPrice($task);
        }

        return $sum;
    }

    /**
     * @param Task $task
     *
     * @return int
     */
    protected function getTaskPrice(Task $task)
    {
        if ($task->getStatus() == Task::STATUS_APPROVED) {
            return $task->getEstimation() * self::PRICE_PER_HOUR;
        } else {
            return 0;
        }
    }
}
