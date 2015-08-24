<?php

namespace Mikron\Asesor\Domain\Entity;

class Estimate
{
    private $grade;
    private $comment;

    public function __construct(Grade $grade, string $comment)
    {
        $this->grade = $grade;
        $this->comment = $comment;
    }

    /**
     * @return int
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }


}
