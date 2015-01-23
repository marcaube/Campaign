<?php

namespace Campaign\Tests\Model;

use Campaign\Model\Template;

class TemplateTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->template1 = new Template("template1", "<b>Bold template</b>");
        $this->template2 = new Template("template2", "<b>Bold template</b>");
        $this->template3 = new Template("template3", "<em>Campaign with emphasis</em>");
        $this->template4 = new Template("template4", "<em>Campaign with emphasis</em>");
    }

    public function test_different_instances_are_equal()
    {
        $this->assertTrue(
            $this->template1->equals($this->template2)
        );

        $this->assertTrue(
            $this->template3->equals($this->template4)
        );
    }

    public function test_different_templates_are_not_equal()
    {
        $this->assertFalse(
            $this->template1->equals($this->template3)
        );

        $this->assertFalse(
            $this->template2->equals($this->template4)
        );
    }
}
