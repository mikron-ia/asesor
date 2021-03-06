<?php

namespace Mikron\Asesor\Domain\Entity;

use Mikron\Asesor\Domain\ValueObject\ReputationNetwork;
use Mikron\Asesor\Domain\ValueObject\ReputationNetworkList;

/**
 * Class Personality
 * Personality of the Muse - the main system directing the assessments
 *
 * @package Mikron\Asesor\Domain\Entity
 */
class Personality
{
    private $description;
    private $factors;

    /**
     * @var ReputationNetwork Reputations that are vital for the person and they literally cannot live without them
     */
    private $reputationsCritical;

    /**
     * @var ReputationNetwork Reputations that are important, but not vital
     */
    private $reputationsImportant;

    /**
     * @var ReputationNetwork Reputations that are considered, but only as secondary
     */
    private $reputationsUseful;

    /**
     * @var ReputationNetwork Reputations that would be good to have, but as long as they are in the green, there is no issue
     */
    private $reputationsMaintained;

    public function __construct($data, $reputationListFromConfig)
    {
        $this->description = isset($data->description) ? $data->description : "[no description provided]";
        $this->factors = isset($data->factors) ? $data->factors : [];

        /* Handle reputations */
        $reputations = [
            'critical' => [],
            'important' => [],
            'useful' => [],
            'maintained' => []
        ];

        if (isset($data->reputationLists)) {
            foreach ($data->reputationLists as $key => $reputationList) {
                $varName = "reputations" . ucfirst($key);
                foreach ($reputationList as $reputationCode) {
                    array_push($reputations[$key], $reputationCode);
                }
                $this->$varName = new ReputationNetworkList($reputations[$key], $reputationListFromConfig);
            }
        }
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return ReputationNetwork
     */
    public function getReputationsCritical()
    {
        return $this->reputationsCritical;
    }

    /**
     * @return ReputationNetwork
     */
    public function getReputationsImportant()
    {
        return $this->reputationsImportant;
    }

    /**
     * @return ReputationNetwork
     */
    public function getReputationsUseful()
    {
        return $this->reputationsUseful;
    }

    /**
     * @return ReputationNetwork
     */
    public function getReputationsMaintained()
    {
        return $this->reputationsMaintained;
    }
}

