<?php

namespace Campaign\Model;

class Email
{
    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $email
     * @param string $name
     */
    public function __construct($email, $name = null)
    {
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param Email $other
     *
     * @return bool
     */
    public function equals(Email $other)
    {
        return $this->email === $other->email;
    }
}