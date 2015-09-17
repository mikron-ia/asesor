<?php

namespace Mikron\Asesor\Domain\Entity;

/**
 * Class Muse
 * Simplified representation of the muse, functionally - container for personality
 *
 * @package Mikron\Asesor\Domain\Entity
 */
class Muse
{
    private $name;
    private $description;

    public function __construct($configuration, Personality $personality)
    {
        $this->name = isset($configuration->name) ? $configuration->name : "[unknown assessor]";
        $this->description = isset($configuration->generalDescription) ? $configuration->generalDescription : "[description has not been provided]";

        $this->personality = $personality;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
