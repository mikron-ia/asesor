<?php

trait JsonLoader
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