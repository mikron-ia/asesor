<?php

namespace Mikron\Asesor\Domain\ValueObject;

/**
 * Class ReputationNetwork
 *
 * This value object describes a reputation network - a system where reputation is recorded, used, exchanged and modified
 * Data for ReputationNetwork are supposed to be loaded from config files and are not subject to change
 *
 * @package Mikron\Asesor\Domain\ValueObject
 */
class ReputationNetwork
{
    private $name;
    private $code;
    private $description;

    public function __construct($name, $code, $description)
    {
        $this->name = $name;
        $this->code = $code;
        $this->description = $description;
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
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

}