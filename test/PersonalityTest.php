<?php

require_once 'JsonLoader.php';

use Mikron\Asesor\Domain\Entity\Personality;

class PersonalityTest extends PHPUnit_Framework_TestCase
{
    use JsonLoader;

    private function loadPersonality($name)
    {
        $data = $this->loadJSON($name);
        $personality = new Personality($data);

        return $personality;
    }

    /**
     * @test
     */
    public function isDescriptionCorrect()
    {
        $persona = $this->loadPersonality('personalityCorrect');
        $this->assertEquals("Test personality, without much complication", $persona->getDescription());
    }

    /**
     * @test
     */
    public function isDescriptionDefault()
    {
        $persona = $this->loadPersonality('empty');
        $this->assertEquals("[no description provided]", $persona->getDescription());
    }
}
