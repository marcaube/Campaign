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

        $this->assertTrue($this->campaign->isDraft());
    }

    public function test_status_is_planned()
    {
        $this->campaign->plan(new DateTime());

        $this->assertEquals(
            $this->campaign->getStatus(),
            Campaign::STATUS_PLANNED
        );

        $this->assertTrue($this->campaign->isPlanned());
    }

    public function test_status_is_sending()
    {
        $this->campaign->setStatus(Campaign::STATUS_SENDING);

        $this->assertTrue($this->campaign->isSending());
    }

    public function test_status_is_sent()
    {
        $this->campaign->setStatus(Campaign::STATUS_SENT);

        $this->assertTrue($this->campaign->isSent());
    }
}