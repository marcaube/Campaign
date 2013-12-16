<?php

use Campaign\Model\Campaign;

class CampaignTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->email = $this->getMockBuilder('Campaign\Model\Email')
            ->disableOriginalConstructor()
            ->getMock();

        $this->campaign = new Campaign('title', 'message', $this->email);
    }

    public function test_status_is_draft()
    {
        $this->assertEquals(
            $this->campaign->getStatus(),
            Campaign::STATUS_DRAFT
        );
    }

    public function test_status_is_planned()
    {
        $this->campaign->plan(new DateTime());

        $this->assertEquals(
            $this->campaign->getStatus(),
            Campaign::STATUS_PLANNED
        );
    }
}