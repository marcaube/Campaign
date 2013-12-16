<?php

namespace Campaign\Model;

class Campaign
{
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

    public function __construct($title, $body, Email $from, Email $reply = null)
    {
        $this->title = $title;
        $this->body = $body;
        $this->from = $from;
        $this->replyToEmail = $reply;
    }
}