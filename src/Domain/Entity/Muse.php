<?php

namespace Mikron\Asesor\Domain\Entity;

class Muse
{
    private $configuration;

    private $name;
    private $description;

    public function __construct($configuration)
    {
        $this->configuration = $configuration;

        $this->name = isset($configuration->name) ? $configuration->name : "[unknown assessor]";
        $this->description = isset($configuration->generalDescription) ? $configuration->generalDescription : "[description has not been provided]";
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
