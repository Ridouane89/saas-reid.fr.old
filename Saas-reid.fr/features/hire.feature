Feature: Hire an application
  Scenario: As a recruiter I want to hire a job seeker that applied for our job offer so that i can archive my job offer
    Given I want to hire a job seeker that applied for our job offer
    When I hire him
    Then the job offer is archived

