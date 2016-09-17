<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="Payment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PaymentRepository")
 */
class Payment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="sum", type="decimal", precision=10, scale=2)
     */
    private $sum;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="payerId", referencedColumnName="id")
     */
    private $payer;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="recipientId", referencedColumnName="id")
     */
    private $recipient;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="payForm", type="string", length=255)
     */
    private $payForm;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sum
     *
     * @param string $sum
     *
     * @return Payment
     */
    public function setSum($sum)
    {
        $this->sum = $sum;

        return $this;
    }

    /**
     * Get sum
     *
     * @return string
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * Set payer
     *
     * @param User $payer
     *
     * @return Payment
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * Get payer
     *
     * @return User
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * Set recipient
     *
     * @param User $recipient
     *
     * @return Payment
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * Get recipient
     *
     * @return User
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Payment
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Payment
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $payForm
     *
     * @return Payment
     */
    public function setPayForm($payForm)
    {
        $this->payForm = $payForm;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayForm()
    {
        return $this->payForm;
    }
}
