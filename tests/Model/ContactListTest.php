<?php

namespace Campaign\Tests\Model;

use Campaign\Model\ContactList;

class ContactListTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->contact = $this->getMockBuilder('Campaign\Model\Contact')
            ->disableOriginalConstructor()
            ->getMock();

        $this->list  = new ContactList();
        $this->list2 = new ContactList();
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

    public function test_you_can_nest_list()
    {
        $this->list->addChild($this->list2);

        $this->assertTrue($this->list->hasChild($this->list2));
        $this->assertEquals(
            $this->list,
            $this->list2->getParent()
        );
    }

    public function test_you_can_set_columns()
    {
        $columns = array('name', 'age group', 'city', 'favorite color');

        $this->list->setColumns($columns);

        $this->assertEquals(
            $columns,
            $this->list->getColumns()
        );
    }

    public function test_you_can_add_columns()
    {
        $columns        = array('A', 'B', 'C');
        $expectedResult = array('A', 'B', 'C', 'D');

        $this->list->setColumns($columns);
        $this->list->addColumn('D');

        $this->assertEquals(
            $expectedResult,
            $this->list->getColumns()
        );

        $this->list->addColumn('A');

        $this->assertEquals(
            $expectedResult,
            $this->list->getColumns()
        );
    }
}
