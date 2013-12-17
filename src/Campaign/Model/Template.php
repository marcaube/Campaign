<?php

namespace Campaign\Model;

class Template
{
    /**
     * @var string
     */
    protected $code;

    /**
     * @param string $code
     */
    public function __construct($code)
    {
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
