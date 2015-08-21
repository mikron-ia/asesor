<?php

namespace Mikron\Asesor\Domain\Entity;


class Subject
{
    private $short;
    private $long;
    private $category;
    private $id;

    /**
     * Subject constructor.
     * @param $short string Short label
     * @param $long string Description
     * @param $category Grading type
     * @param $id ID used in resulting data
     */
    public function __construct($short, $long, $category, $id)
    {
        $this->short = $short;
        $this->long = $long;
        $this->category = $category;
        $this->id = $id;
    }

}
