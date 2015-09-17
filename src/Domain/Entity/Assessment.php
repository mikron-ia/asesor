<?php

namespace Mikron\Asesor\Domain\Entity;

use Mikron\Asesor\Domain\ValueObject\GradeAssessment;

/**
 * Class Assessment
 * Final judgement & recommendation
 *
 * @package Mikron\Asesor\Domain\Entity
 */
class Assessment
{
    private $grade;
    private $elaboration;

    public function __construct(GradeAssessment $grade, $elaboration)
    {
        $this->grade = $grade;
        $this->elaboration = $elaboration;
    }

    /**
     * @return GradeAssessment
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @return string
     */
    public function getElaboration()
    {
        return $this->elaboration;
    }
}
