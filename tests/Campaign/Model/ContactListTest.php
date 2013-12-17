<?php

use Campaign\Model\ContactList;

class ContactListTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->contact = $this->getMockBuilder('Campaign\Model\Contact')
            ->disableOriginalConstructor()
            ->getMock();

        $this->list = new ContactList();
    }

    public function test_you_can_add_contact()
    {
        $this->assertFalse($this->list->hasContact($this->contact));

        $this->list->addContact($this->contact);

        $this->assertTrue($this->list->hasContact($this->contact));
    }

    public function test_you_can_remove_contact()
    {
        $this->list->removeContact($this->contact);

        $this->assertFalse($this->list->hasContact($this->contact));
    }
}