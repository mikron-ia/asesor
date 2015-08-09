<?php

use Mikron\Asesor\Domain\Entity\Muse;

class MuseTest extends PHPUnit_Framework_TestCase
{
    private $muse;

    protected function setUp()
    {
        if ($json = file_get_contents(dirname(__FILE__) . '/data/main.json')) {
            $config = json_decode($json);
        } else {
            $config = null;
        }

        $this->muse = new Muse($config);
    }

    /**
     * @test
     */
    public function isNameCorrect()
    {
        $this->assertEquals("Assessor test name", $this->muse->getName());
    }

    /**
     * @test
     */
    public function isDescriptionCorrect()
    {
        $this->assertEquals("General description regarding assessor habits, approach, nature, and moods. Designed for human readability only.", $this->muse->getDescription());
    }
}