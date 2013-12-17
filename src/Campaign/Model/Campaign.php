<?php

namespace Campaign\Model;

class Campaign
{
    const STATUS_DRAFT   = 0;
    const STATUS_PLANNED = 10;
    const STATUS_SENDING = 20;
    const STATUS_SENT    = 30;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $body;

    /**
     * @var Email
     */
    protected $fromEmail;

    /**
     * @var Email
     */
    protected $replyToEmail;

    /**
     * @var int
     */
    protected $status;

    /**
     * @var \DateTime
     */
    protected $date;

    public function __construct($title, $body, Email $from, Email $reply = null)
    {
        $this->title = $title;
        $this->body = $body;
        $this->from = $from;
        $this->replyToEmail = $reply;
        $this->status = self::STATUS_DRAFT;
    }

    /**
     * @param \DateTime $date
     */
    public function plan(\DateTime $date)
    {
        $this->date = $date;
        $this->status = self::STATUS_PLANNED;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Is it a draft?
     *
     * @return bool
     */
    public function isDraft()
    {
        return $this->status == self::STATUS_DRAFT;
    }

    /**
     * Is the campaign planned for sending?
     *
     * @return bool
     */
    public function isPlanned()
    {
        return $this->status == self::STATUS_PLANNED;
    }

    /**
     * Is the campaign in the process of being sent?
     *
     * @return bool
     */
    public function isSending()
    {
        return $this->status == self::STATUS_SENDING;
    }

    /**
     * Has it been sent?
     *
     * @return bool
     */
    public function isSent()
    {
        return $this->status == self::STATUS_SENT;
    }
}