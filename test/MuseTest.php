<?php

use Mikron\Asesor\Domain\Entity\Muse;
use Mikron\Asesor\Domain\Entity\Personality;

class MuseTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {

    }

    private function loadMuse($name)
    {
        if ($json = file_get_contents(dirname(__FILE__) . '/data/' . $name . '.json')) {
            $config = json_decode($json);
        } else {
            $config = null;
        }

        $personality = new Personality();
        $muse = new Muse($config, $personality);

        return $muse;
    }

    /**
     * @test
     */
    public function isNameCorrect()
    {
        $muse = $this->loadMuse('mainCorrect');

        $this->assertEquals("Assessor test name", $muse->getName());
    }

    /**
     * @test
     */
    public function isDescriptionCorrect()
    {
        $muse = $this->loadMuse('mainCorrect');

        $this->assertEquals("General description regarding assessor habits, approach, nature, and moods. Designed for human readability only.",
            $muse->getDescription());
    }

    /**
     * @test
     */
    public function isNameDefault()
    {
        $muse = $this->loadMuse('empty');

        $this->assertEquals("[unknown assessor]", $muse->getName());
    }

    /**
     * @test
     */
    public function isDescriptionDefault()
    {
        $muse = $this->loadMuse('empty');

        $this->assertEquals("[description has not been provided]", $muse->getDescription());
    }
}