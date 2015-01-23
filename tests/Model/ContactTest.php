<?php

namespace Campaign\Tests\Model;

use Campaign\Model\Contact;

class ContactTest extends \PHPUnit_Framework_TestCase
{
    public function test_you_can_set_columns()
    {
        $email = $this->getMockBuilder('Campaign\Model\Email')
            ->disableOriginalConstructor()
            ->getMock();

        $contact = new Contact($email);
        $contact->setColumn('name', 'value');

        $this->assertEquals(
            array('name' => 'value'),
            $contact->getColumns()
        );

        $this->assertEquals(
            'value',
            $contact->getColumn('name')
        );

        $this->assertNull($contact->getColumn('foo'));
    }
}
