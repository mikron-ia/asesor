<?php

use Mikron\Asesor\Domain\Entity\Muse;
use Mikron\Asesor\Domain\Entity\Personality;

class MuseTest extends BaseObjectTest
{
    protected function setUp()
    {

    }

    private function loadMuse($name)
    {
        $config = $this->loadJSON($name);

        $personality = new Personality([], []);
        $muse = new Muse($config, $personality);

        return $muse;
    }

    /**
     * @test
     */
    public function isMuseNameCorrect()
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