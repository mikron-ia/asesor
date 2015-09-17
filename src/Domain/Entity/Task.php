<?php

namespace Mikron\Asesor\Domain\Entity;

/**
 * Class Task
 * @package Mikron\Asesor\Domain\Entity
 */
class Task
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     * @todo encompass issues like: where is the operation conducted, what areas are only visited, where team stays
     */
    private $location;

    /**
     * @var string
     * @todo A name is rarely enough, unless assessing entity knows them; expand to object with own parameters
     */
    private $source;

    /**
     * @var string
     */
    private $urgency;

    /* Time intervals are based on ISO 8601 duration specification, as required by DateInterval */
    private $timeRequiredToPrepare;
    private $timeRequiredToExecute;

    public function __construct($dataPayload)
    {
        $this->name = $dataPayload->name;
        $this->location = $dataPayload->location;
        $this->source = $dataPayload->source;
        $this->urgency = $dataPayload->urgency;
        $this->timeRequiredToPrepare = new \DateInterval($dataPayload->timeRequiredToPrepare);
        $this->timeRequiredToExecute = new \DateInterval($dataPayload->timeRequiredToExecute);
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
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @return string
     */
    public function getUrgency()
    {
        return $this->urgency;
    }

    /**
     * @return \DateInterval
     */
    public function getTimeRequiredToPrepare()
    {
        return $this->timeRequiredToPrepare;
    }

    /**
     * @return \DateInterval
     */
    public function getTimeRequiredToExecute()
    {
        return $this->timeRequiredToExecute;
    }


}
