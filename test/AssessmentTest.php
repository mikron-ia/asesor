<?php

use Mikron\Asesor\Domain\Entity\Assessment;
use Mikron\Asesor\Domain\ValueObject\GradeAssessment;

class AssessmentTest extends PHPUnit_Framework_TestCase
{
    private $grade;
    private $assessment;

    protected function setUp()
    {
        $this->grade = new GradeAssessment("Test grade");
        $this->assessment = new Assessment($this->grade, "Test comment");
    }

    /**
     * @test
     */
    public function isGradeCorrect()
    {
        $this->assertEquals($this->grade, $this->assessment->getGrade());
    }


}