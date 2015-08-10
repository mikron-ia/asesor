<?php

namespace Mikron\Asesor\Infrastructure\Factory;

use Mikron\Asesor\Domain\Entity;
use Mikron\Asesor\Infrastructure\Exception;

class Muse
{
    public function loadAllFromFiles($list)
    {
        $muses = [];

        foreach ($list as $name => $filename) {
            $muses[$name] = $this->loadFromFile($filename);
        }

        return $muses;
    }

    public function loadFromFile($filename)
    {
        $fullFileName = 'data/' . $filename . '/main.json';

        if (file_exists($fullFileName)) {
            $configuration = $this->getDataObjectFromJson($fullFileName);
        } else {
            throw new Exception\MissingComponentException("Missing main configuration file for the muse. Please provide the file before using the functionality.");
        }

        $personalityFactory = new Personality();

        $personality = $personalityFactory->loadFromFile($filename);

        return new Entity\Muse($configuration, $personality);
    }

    private function getDataObjectFromJson($fileName)
    {
        if ($json = file_get_contents($fileName)) {
            return json_decode($json);
        }

        return null;
    }
}
