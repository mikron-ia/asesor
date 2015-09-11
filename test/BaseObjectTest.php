<?php

/**
 * Class BaseObjectTest
 *
 * Base class for all tests, it contains common methods for loading JSON files used in most of the tests
 */
abstract class BaseObjectTest extends PHPUnit_Framework_TestCase
{
    protected function loadJSON($name)
    {
        return $this->loadJsonIntoObject($name);
    }

    protected function loadJsonIntoObject($name)
    {
        if ($json = file_get_contents(dirname(__FILE__) . '/data/' . $name . '.json')) {
            $data = json_decode($json,false);
        } else {
            $data = null;
        }

        return $data;
    }

    protected function loadJsonIntoArray($name)
    {
        if ($json = file_get_contents(dirname(__FILE__) . '/data/' . $name . '.json')) {
            $data = json_decode($json,true);
        } else {
            $data = null;
        }

        return $data;
    }
}
