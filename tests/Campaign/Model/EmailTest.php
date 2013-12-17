<?php

use Campaign\Model\Email;

class EmailTest extends \PHPUnit_Framework_TestCase
{
    public function setup()
    {
        $this->email1 = new Email('user@domain.com');
        $this->email2 = new Email('user@domain.com', 'John Doe');
    }

    public function test_email()
    {
        $this->assertEquals(
            $this->email1->getEmail(),
            'user@domain.com'
        );

        $this->assertEquals(
            $this->email2->getEmail(),
            'user@domain.com'
        );
    }

    public function test_different_instances_are_equal()
    {
        $this->assertTrue(
            $this->email1->equals($this->email2)
        );
    }
}
