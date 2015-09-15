<?php

use Mikron\Asesor\Domain\ValueObject\ReputationNetwork;

class ReputationNetworkTest extends PHPUnit_Framework_TestCase
{
    private function prepareReputationNetwork($dataPayload)
    {
        $keys = array_keys($dataPayload);
        $key = array_pop($keys);
        $record = $dataPayload[$key];

        return new ReputationNetwork($key, $record);
    }

    /**
     * @test
     * @dataProvider correctReputationNetworkProvider
     * @param $dataPayload
     */
    public function isNameCorrect($dataPayload)
    {
        $reputationNetwork = $this->prepareReputationNetwork($dataPayload);
        $this->assertEquals("t-net", $reputationNetwork->getName());
    }

    /**
     * @test
     * @dataProvider correctReputationNetworkProvider
     * @param $dataPayload
     */
    public function isCodeCorrect($dataPayload)
    {
        $reputationNetwork = $this->prepareReputationNetwork($dataPayload);
        $this->assertEquals("t", $reputationNetwork->getCode());
    }

    /**
     * @test
     * @dataProvider correctReputationNetworkProvider
     * @param $dataPayload
     */
    public function isDescriptionCorrect($dataPayload)
    {
        $reputationNetwork = $this->prepareReputationNetwork($dataPayload);
        $this->assertEquals("Tests network serves testing purposes only", $reputationNetwork->getDescription());
    }

    /**
     * @test
     * @dataProvider incompleteReputationNetworkProvider
     * @param $dataPayload
     */
    public function isDescriptionDefault($dataPayload)
    {
        $reputationNetwork = $this->prepareReputationNetwork($dataPayload);
        $this->assertEquals("[no description]", $reputationNetwork->getDescription());
    }

    public function correctReputationNetworkProvider()
    {
        return [
            [
                [
                    "t" => [
                        "name" => "t-net",
                        "description" => "Tests network serves testing purposes only",
                    ]
                ]
            ],
            [
                [
                    [
                        "name" => "t-net",
                        "code" => "t",
                        "description" => "Tests network serves testing purposes only",
                    ]
                ]
            ]
        ];
    }

    public function incompleteReputationNetworkProvider()
    {
        return [
            [
                [
                    "t" => [
                        "name" => "t-net",
                    ]
                ]
            ],
            [
                [
                    [
                        "name" => "t-net",
                        "code" => "t",
                    ]
                ]
            ]
        ];
    }
}
