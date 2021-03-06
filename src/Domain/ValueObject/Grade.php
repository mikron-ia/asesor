<?php

namespace Mikron\Asesor\Domain\ValueObject;

/**
 * Class Grade
 * @package Mikron\Asesor\Domain\ValueObject
 */
class Grade
{
    private $label;

    /**
     * Grade constructor.
     * @param $label string Descriptive label
     */
    public function __construct($label)
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }
}
