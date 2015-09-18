<?php

use Mikron\Asesor\Domain\ValueObject\ReputationNetwork;
use Mikron\Asesor\Domain\ValueObject\ReputationNetworkList;

use Mikron\Asesor\Infrastructure\Factory\ReputationNetwork as ReputationNetworkFactory;

class ReputationNetworkListTest extends PHPUnit_Framework_TestCase
{    
    private function loadCompleteConfigList()
    {
        $reputations = [
            "@" => [
                "name" => "@-list",
                "description" => "Autonomists",
            ],
            "c" => [
                "name" => "CivicNet",
                "description" => "Corporations",
            ]
        ];

        $factory = new ReputationNetworkFactory();
        return $factory->createFromCompleteArray($reputations);
    }

    /**
     * @test
     * @dataProvider listComparatorDataProvider
     * @param $originalList ReputationNetworkList The original list
     * @param $listToCompareTo ReputationNetworkList A list to compare to
     * @param $intersection ReputationNetworkList Expected result of the comparation
     */
    public function areDuplicatesDetectedCorrectly(
        ReputationNetworkList $originalList,
        ReputationNetworkList $listToCompareTo,
        ReputationNetworkList $intersection
    ) {
        $this->assertEquals($originalList->detectDuplicates($listToCompareTo),
            $intersection->getReputationNetworkList());
    }

    /**
     * @test
     * @dataProvider simpleListDataProvider
     * @param $codeList string[]
     */
    public function isListCorrect($codeList)
    {
        $configList = $this->loadCompleteConfigList();
        $objectList = [];

        foreach ($codeList as $code) {
            if (isset($configList[$code])) {
                $objectList[$code] = $configList[$code];
            }
        }

        $reputationNetworkList = new ReputationNetworkList($codeList, $configList);

        $this->assertEquals($reputationNetworkList->getReputationNetworkList(), $objectList);
    }

    public function listComparatorDataProvider()
    {
        $configList = $this->loadCompleteConfigList();
        return [
            [
                new ReputationNetworkList(["@", "c"], $configList),
                new ReputationNetworkList(["@"], $configList),
                new ReputationNetworkList(["@"], $configList)
            ],
            [
                new ReputationNetworkList(["@", "c"], $configList),
                new ReputationNetworkList(["c"], $configList),
                new ReputationNetworkList(["c"], $configList)
            ],
        ];
    }

    public function simpleListDataProvider()
    {
        return [
            [["@"]],
            [["@", "c"]]
        ];
    }
}