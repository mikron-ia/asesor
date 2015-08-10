<?php
/**
 * Created by PhpStorm.
 * User: mlabedowicz
 * Date: 2015-08-10
 * Time: 15:12
 */

namespace Mikron\Asesor\Infrastructure\Factory;

use Mikron\Asesor\Domain\Entity;
use Mikron\Asesor\Infrastructure\Exception;

class Personality
{
    public function loadFromFile($filename)
    {
        $fullFileName = 'data/' . $filename . '/personality.json';

        if (file_exists($fullFileName)) {
            $data = $this->getDataObjectFromJson($fullFileName);
        } else {
            throw new Exception\MissingComponentException("Missing personality file for the muse. Please provide the file before using the functionality.");
        }

        return new Entity\Personality($data);
    }

    private function getDataObjectFromJson($fileName)
    {
        if ($json = file_get_contents($fileName)) {
            return json_decode($json);
        }

        return null;
    }
}