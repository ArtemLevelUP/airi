<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * File
 *
 * @ORM\Table(name="File")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FileRepository")
 */
class File
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
     * @ORM\Column(name="title", type="string", length=255, unique=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, unique=true)
     */
    private $filename;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="creatorId", referencedColumnName="id")
     */
    private $creator;

    /**
     * @var Task
     *
     * @ORM\ManyToOne(targetEntity="Task")
     * @ORM\JoinColumn(name="taskId", referencedColumnName="id", nullable=true)
     */
    private $task;

    /**
     * @var Comment
     *
     * @ORM\ManyToOne(targetEntity="Comment")
     * @ORM\JoinColumn(name="commentId", referencedColumnName="id", nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="uploaded", type="datetime")
     */
    private $uploaded;

    /**
     * File constructor.
     */
    public function __construct()
    {
        $this->uploaded = new \DateTime();
    }

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
     * Set title
     *
     * @param string $title
     *
     * @return File
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return File
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set creator
     *
     * @param User $creator
     *
     * @return File
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get creator
     *
     * @return User
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Set task
     *
     * @param Task $task
     *
     * @return File
     */
    public function setTask($task)
    {
        $this->task = $task;

        return $this;
    }

    /**
     * Get task
     *
     * @return Task|null
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * Set comment
     *
     * @param Comment $comment
     *
     * @return File
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return Comment|null
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set uploaded
     *
     * @param \DateTime $uploaded
     *
     * @return File
     */
    public function setUploaded($uploaded)
    {
        $this->uploaded = $uploaded;

        return $this;
    }

    /**
     * Get uploaded
     *
     * @return \DateTime
     */
    public function getUploaded()
    {
        return $this->uploaded;
    }
}

