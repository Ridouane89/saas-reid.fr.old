Feature: Close an application
  Scenario: As a recruiter I want to close an application that was accepted so that I can stop the recruitment process
    Given I want to close an application
    When I close the application
    Then the recruitment process is stopped

