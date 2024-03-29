<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class RegisterContext implements Context
{
    /**
     * @Given /^I need to register to look for a new job$/
     */
    public function iNeedToRegisterToLookForANewJob()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I fill the registration form$/
     */
    public function iFillTheRegistrationForm()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^I can log in with my new account$/
     */
    public function iCanLogInWithMyNewAccount()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^I need to register to recruit a new employees$/
     */
    public function iNeedToRegisterToRecruitANewEmployees()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
