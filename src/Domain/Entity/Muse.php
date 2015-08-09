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

        $this->name = $configuration->name;
        $this->description = $configuration->generalDescription;
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
