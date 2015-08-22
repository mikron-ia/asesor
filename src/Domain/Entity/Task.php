<?php

namespace Mikron\Asesor\Domain\Entity;

class Task
{
    private $name;
    private $location;
    private $source;
    private $urgency;
    private $timeRequiredToPrepare;
    private $timeRequiredToExecute;

    public function __construct($dataPayload)
    {
        $this->name = $dataPayload->name;
        $this->location = $dataPayload->location;
        $this->source = $dataPayload->source;
        $this->urgency = $dataPayload->urgency;
        $this->timeRequiredToPrepare = $dataPayload->timeRequiredToPrepare;
        $this->timeRequiredToExecute = $dataPayload->timeRequiredToExecute;
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
     * @return string
     */
    public function getTimeRequiredToPrepare()
    {
        return $this->timeRequiredToPrepare;
    }

    /**
     * @return string
     */
    public function getTimeRequiredToExecute()
    {
        return $this->timeRequiredToExecute;
    }


}