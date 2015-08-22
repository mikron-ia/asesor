<?php

require_once 'JsonLoader.php';

use Mikron\Asesor\Domain\Entity\Task;

class TaskTest extends PHPUnit_Framework_TestCase
{
    use JsonLoader;

    private function loadTask($name)
    {
        $data = $this->loadJSON($name);
        $task = new Task($data);

        return $task;
    }

    /**
     * @test
     */
    public function isNameCorrect() {
        $task = $this->loadTask('taskCorrect');
        $this->assertEquals("Test task", $task->getName());
    }

}