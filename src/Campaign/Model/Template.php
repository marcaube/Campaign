<?php

namespace Campaign\Model;

class Template
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $code;

    /**
     * @param string $name
     * @param string $code
     */
    public function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
    }

    /**
     * @param Template $other
     *
     * @return bool
     */
    public function equals(Template $other)
    {
        return $this->code === $other->code;
    }
}
