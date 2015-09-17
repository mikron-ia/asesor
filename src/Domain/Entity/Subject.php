<?php

namespace Mikron\Asesor\Domain\Entity;

/**
 * Class Subject
 * @package Mikron\Asesor\Domain\Entity
 */
class Subject
{
    private $short;
    private $long;
    private $category;
    private $id;

    public function __construct($dataPayload)
    {
        $this->short = isset($dataPayload->short) ? $dataPayload->short : "[short description has not been provided]";
        $this->long = isset($dataPayload->long) ? $dataPayload->long : "[long description has not been provided]";
        $this->category = isset($dataPayload->category) ? $dataPayload->category : "[unknown category]";
        $this->id = isset($dataPayload->id) ? $dataPayload->id : null;
    }

    /**
     * @return string
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * @return string
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

}
