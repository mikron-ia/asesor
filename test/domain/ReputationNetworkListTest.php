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
                "description" => "Autonomists: anarchists, Barsoomians, Extropians, Titanian, scum",
            ],
            "c" => [
                "name" => "CivicNet",
                "description" => "Hypercorps, Jovians, Lunars, Martians, Venusians",
            ],
            "e" => [
                "name" => "EcoWave",
                "description" => "nano-ecologists, preservationists, reclaimers",
            ],
            "f" => [
                "name" => "Fame",
                "description" => "Media: socialities, celebrities, glitterati",
            ],
            "g" => [
                "name" => "Guanxi",
                "description" => "Criminals",
            ],
            "i" => [
                "name" => "The Eye",
                "description" => "Firewall",
            ],
            "r" => [
                "name" => "Research Network Associates",
                "description" => "Scientists: Argonauts, researchers, hypertechnologists",
            ],
            "x" => [
                "name" => "ExploreNet",
                "description" => "Gatecrashers",
            ],
            "m" => [
                "name" => "MilNet",
                "description" => "Mercenaries",
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
                new ReputationNetworkList(["c", "m"], $configList),
                new ReputationNetworkList(["c"], $configList)
            ],
            [
                new ReputationNetworkList(["@", "c"], $configList),
                new ReputationNetworkList(["m"], $configList),
                new ReputationNetworkList([], $configList)
            ],
            [
                new ReputationNetworkList(["@", "c", "m", "g"], $configList),
                new ReputationNetworkList(["c", "m", "@", "r"], $configList),
                new ReputationNetworkList(["c", "m", "@"], $configList)
            ],
            [
                new ReputationNetworkList(["@", "c", "g", "m"], $configList),
                new ReputationNetworkList(["c", "@", "m", "r"], $configList),
                new ReputationNetworkList(["m", "@", "c"], $configList)
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