<?php

require_once 'JsonLoader.php';

class PersonalityTest extends PHPUnit_Framework_TestCase
{
    use JsonLoader;

    protected function setUp()
    {

    }

    private function loadPersonality($name)
    {
        $data = $this->loadJSON($name);
        $personality = new Personality($data);

        return $personality;
    }
}