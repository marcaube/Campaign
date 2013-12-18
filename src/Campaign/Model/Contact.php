<?php

namespace Campaign\Model;

class Contact
{
    /**
     * @var Email
     */
    protected $email;

    /**
     * @var array
     */
    protected $columns = array();

    /**
     * @param Email $email
     */
    public function __construct(Email $email)
    {
        $this->email = $email;
    }

    /**
     * @param string $name
     * @param string $value
     *
     * @return Contact
     */
    public function setColumn($name, $value)
    {
        $this->columns[$name] = $value;

        return $this;
    }

    /**
     * @return array
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * @param $name
     *
     * @return string|null
     */
    public function getColumn($name)
    {
        if (!array_key_exists($name, $this->columns)) {
            return null;
        }

        return $this->columns[$name];
    }
}
