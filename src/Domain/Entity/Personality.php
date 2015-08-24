<?php

namespace Mikron\Asesor\Domain\Entity;

class Personality
{
    private $description;
    private $factors;

    public function __construct($data)
    {
        $this->description = isset($data->description)?$data->description:"[no description provided]";
        $this->factors = isset($data->factors)?$data->factors:[];
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }


}

