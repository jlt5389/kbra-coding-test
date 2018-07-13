<?php

// Load dependencies
use PHPUnit\Framework\TestCase;

// Initialize ClockTests as a TestCase
class ClockTests extends TestCase
{
    private $clock;

    // Initialize a Clock object
    protected function setUp()
    {
        $this->clock = new Clock();
    }

    // Unset Clock object upon test completion
    protected function tearDown()
    {
        $this->clock = NULL;
    }

    // First test - should return "I am a clock"
    public function testIdentity()
    {
        $result = $this->clock->whatAmI();
        $this->assertEquals("I am a clock", $result);
    }

    // countBells test 1
    // INPUT $startTime = '2:00'; $endTime = '3:00'; OUTPUT 5
    public function testcountBells1()
    {
        $startTime = '2:00';
        $endTime = '3:00';
        $expected = 5;
        $actual = $this->clock->countBells($startTime, $endTime);
        $this->assertEquals($expected, $actual);
    }

    // countBells test 2
    // INPUT $startTime = '14:00'; $endTime = '15:00'; OUTPUT 5
    public function testcountBells2()
    {
        $startTime = '14:00';
        $endTime = '15:00';
        $expected = 5;
        $actual = $this->clock->countBells($startTime, $endTime);
        $this->assertEquals($expected, $actual);
    }

    // countBells test 3
    // INPUT $startTime = '14:23'; $endTime = '15:42'; OUTPUT 3
    public function testcountBells3()
    {
        $startTime = '14:23';
        $endTime = '15:42';
        $expected = 3;
        $actual = $this->clock->countBells($startTime, $endTime);
        $this->assertEquals($expected, $actual);
    }

    // How many hours does a clock show?
    public function testClockHours()
    {
        $ecpected = 12;
        $actual = $this->clock->$hours;
        $this->assertEquals($expected, $actual);
    }

    // countBells test 4
    // INPUT $startTime = '23:00'; $endTime = '1:00'; OUTPUT 24
    public function testcountBells4()
    {
        $startTime = '23:00';
        $endTime = '1:00';
        $expected = 24;
        $actual = $this->clock->countBells($startTime, $endTime);
        $this->assertEquals($expected, $actual);
    }

    // countBells test 5
    public function testcountBells5()
    {
        $startTime = '21:59';
        $endTime = '10:30';
        $expected = 88;
        $actual = $this->clock->countBells($startTime, $endTime);
        $this->assertEquals($expected, $actual);
    }

    // countBells test 6
    //  Test if both times are equal, treat it as if twenty-four hours will pass.
    public function testcountBells6()
    {
        $startTime = '10:00';
        $endTime = '10:00';
        $expected = 166;
        $actual = $this->clock->countBells($startTime, $endTime);
        $this->assertEquals($expected, $actual);
    }

}

?>
