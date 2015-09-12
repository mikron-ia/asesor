<?php

class GradeTest extends PHPUnit_Framework_TestCase
{
    private $grade;

    protected function setUp()
    {
        $this->grade = new \Mikron\Asesor\Domain\ValueObject\Grade("Test grade");
    }

    /**
     * @test
     */
    public function isLabelCorrect()
    {
        $this->assertEquals("Test grade", $this->grade->getLabel());
    }
}