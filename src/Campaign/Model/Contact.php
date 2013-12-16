<?php

namespace Campaign\Model;

class Contact
{
    /**
     * @var Email
     */
    protected $email;

    /**
     * @param Email $email
     */
    public function __construct(Email $email)
    {
        $this->email = $email;
    }
}