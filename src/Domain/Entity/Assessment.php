<?php

namespace Mikron\Asesor\Domain\Entity;

use Mikron\Asesor\Domain\ValueObject\GradeAssessment;

class Assessment
{
    private $grade;
    private $elaboration;

    public function __construct(GradeAssessment $grade, $comment)
    {
        $this->grade = $grade;
        $this->elaboration = $comment;
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
