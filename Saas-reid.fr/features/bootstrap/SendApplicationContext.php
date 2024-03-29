<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class SendApplicationContext implements Context
{
    /**
     * @Given /^I want to send my application to a job$/
     */
    public function iWantToSendMyApplicationToAJob()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I write and send my application$/
     */
    public function iWriteAndSendMyApplication()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^my application is on pending and recruiter can process it$/
     */
    public function myApplicationIsOnPendingAndRecruiterCanProcessIt()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
