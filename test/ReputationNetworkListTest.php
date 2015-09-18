<?php

use Mikron\Asesor\Domain\ValueObject\ReputationNetwork;
use Mikron\Asesor\Domain\ValueObject\ReputationNetworkList;

use Mikron\Asesor\Infrastructure\Factory\ReputationNetwork as ReputationNetworkFactory;

class ReputationNetworkListTest extends PHPUnit_Framework_TestCase
{
    private $configList;

    protected function setUp()
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

        $this->configList = $factory->createFromCompleteArray($reputations);
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
        $objectList = [];
        foreach ($codeList as $code) {
            if (isset($this->configList[$code])) {
                $objectList[] = $this->configList[$code];
            }
        }

        $reputationNetworkList = new ReputationNetworkList($codeList, $this->configList);

        $this->assertEquals($reputationNetworkList->getReputationNetworkList(), $objectList);
    }

    public function listComparatorDataProvider()
    {
        return [
            [
                new ReputationNetworkList(["@", "c"], $this->configList),
                new ReputationNetworkList(["@"], $this->configList),
                new ReputationNetworkList(["@"], $this->configList)
            ],
            [
                new ReputationNetworkList(["@", "c"], $this->configList),
                new ReputationNetworkList(["c"], $this->configList),
                new ReputationNetworkList(["c"], $this->configList)
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