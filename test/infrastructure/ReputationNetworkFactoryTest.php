<?php

use Mikron\Asesor\Domain\ValueObject\ReputationNetwork;
use Mikron\Asesor\Infrastructure\Factory\ReputationNetwork as ReputationNetworkFactory;

class ReputationNetworkFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider singleArrayDataProvider
     * @param $array
     */
    public function singleArrayLoaderWorks($array)
    {
        $factory = new ReputationNetworkFactory();
        $this->assertInstanceOf(ReputationNetwork::class, $factory->createFromSingleArray($array["code"], $array));
    }

    public function singleArrayDataProvider()
    {
        return [
            [
                [
                    "name" => "CivicNet",
                    "code" => "c",
                    "description" => "Hypercorps, Jovians, Lunars, Martians, Venusians",
                ],
            ],
            [
                [
                    "name" => "ExploreNet",
                    "code" => "x",
                    "description" => "Gatecrashers",
                ]
            ],
            [
                [
                    "name" => "MilNet",
                    "code" => "m",
                    "description" => "Mercenaries",
                ]
            ],
            [
                [
                    "name" => "TestNet",
                    "code" => "T",
                    "description" => "Test",
                ],
            ],
        ];
    }

    public function multiArrayDataProvider()
    {
        return [
            [
                [
                    "name" => "CivicNet",
                    "code" => "c",
                    "description" => "Hypercorps, Jovians, Lunars, Martians, Venusians",
                ],
                [
                    "name" => "ExploreNet",
                    "code" => "x",
                    "description" => "Gatecrashers",
                ],
                [
                    "name" => "MilNet",
                    "code" => "m",
                    "description" => "Mercenaries",
                ]
            ],
            [
                [
                    "name" => "TestNet",
                    "code" => "T",
                    "description" => "Test",
                ],
            ],
        ];
    }
}