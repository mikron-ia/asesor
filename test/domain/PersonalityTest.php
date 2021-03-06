<?php

use Mikron\Asesor\Domain\Entity\Personality;

class PersonalityTest extends BaseObjectTest
{
    private function loadPersonality($name)
    {
        $data = $this->loadJSON($name);

        $reputations = [
            "@" => [
                "name" => "@-list",
                "description" => "Autonomists",
            ],
            "c" => [
                "name" => "CivicNet",
                "description" => "Corporations",
            ]
        ];

        $personality = new Personality($data, $reputations);

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
