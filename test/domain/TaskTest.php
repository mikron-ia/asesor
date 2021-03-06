<?php

use Mikron\Asesor\Domain\Entity\Task;

class TaskTest extends BaseObjectTest
{
    private function loadTask($name)
    {
        $data = $this->loadJSON($name);
        $task = new Task($data);

        return $task;
    }

    /**
     * @test
     */
    public function isNameCorrect()
    {
        $task = $this->loadTask('taskCorrect');
        $this->assertEquals("Test task", $task->getName());
    }

    /**
     * @test
     */
    public function isLocationCorrect()
    {
        $task = $this->loadTask('taskCorrect');
        $this->assertEquals("Martian countryside, precise location uncertain", $task->getLocation());
    }

    /**
     * @test
     */
    public function isSourceCorrect()
    {
        $task = $this->loadTask('taskCorrect');
        $this->assertEquals("Firewall Proxy Alfa", $task->getSource());
    }

    /**
     * @test
     */
    public function isUrgencyCorrect()
    {
        $task = $this->loadTask('taskCorrect');
        $this->assertEquals("urgent", $task->getUrgency());
    }

    /**
     * @test
     */
    public function isTimeRequiredToPrepareCorrect()
    {
        $task = $this->loadTask('taskCorrect');
        $this->assertEquals(new DateInterval("P1D"), $task->getTimeRequiredToPrepare());
    }

    /**
     * @test
     */
    public function isTimeRequiredToExecuteCorrect()
    {
        $task = $this->loadTask('taskCorrect');
        $this->assertEquals(new DateInterval("P1DT12H"), $task->getTimeRequiredToExecute());
    }

}
