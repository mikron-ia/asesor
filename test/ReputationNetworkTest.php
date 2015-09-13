<?php

class ReputationNetworkTest extends PHPUnit_Framework_TestCase
{
    private $reputationNetwork;

    protected function setUp()
    {
        $this->reputationNetwork = new \Mikron\Asesor\Domain\ValueObject\ReputationNetwork("Test network", "T-net",
            "Pork belly venison sausage, hamburger pastrami tongue flank.\nT-bone filet mignon meatloaf, tri-tip drumstick.");
    }

    /**
     * @test
     */
    public function isNameCorrect()
    {
        $this->assertEquals("Test network", $this->reputationNetwork->getName());
    }

    /**
     * @test
     */
    public function isCodeCorrect()
    {
        $this->assertEquals("T-net", $this->reputationNetwork->getCode());
    }
}
