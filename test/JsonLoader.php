<?php

trait JsonLoader
{
    function loadJSON($name)
    {
        if ($json = file_get_contents(dirname(__FILE__) . '/data/' . $name . '.json')) {
            $data = json_decode($json);
        } else {
            $data = null;
        }

        return $data;
    }
}