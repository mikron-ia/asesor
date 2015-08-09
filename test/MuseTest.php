<?php

use Mikron\Asesor\Domain\Entity\Muse;

class MuseTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {

    }

    private function loadMuseMain($name)
    {
        if ($json = file_get_contents(dirname(__FILE__) . '/data/' . $name . '.json')) {
            return json_decode($json);
        } else {
            return null;
        }
    }

    /**
     * @test
     */
    public function isNameCorrect()
    {
        $config = $this->loadMuseMain('mainCorrect');
        $muse = new Muse($config);

        $this->assertEquals("Assessor test name", $muse->getName());
    }

    /**
     * @test
     */
    public function isDescriptionCorrect()
    {
        $config = $this->loadMuseMain('mainCorrect');
        $muse = new Muse($config);

        $this->assertEquals("General description regarding assessor habits, approach, nature, and moods. Designed for human readability only.",
            $muse->getDescription());
    }

    /**
     * @test
     */
    public function isNameDefault()
    {
        $config = $this->loadMuseMain('empty');
        $muse = new Muse($config);

        $this->assertEquals("[unknown assessor]", $muse->getName());
    }

    /**
     * @test
     */
    public function isDescriptionDefault()
    {
        $config = $this->loadMuseMain('empty');
        $muse = new Muse($config);

        $this->assertEquals("[description has not been provided]",
            $muse->getDescription());
    }
}