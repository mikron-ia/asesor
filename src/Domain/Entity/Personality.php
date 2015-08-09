<?php

namespace Mikron\Asesor\Domain\Entity;

class Personality
{
    private $factors;

    public function __construct($factors)
    {
        $this->factors = $factors;
    }
}
