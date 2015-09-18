<?php

namespace Mikron\Asesor\Domain\ValueObject;

/**
 * Class ReputationNetworkList
 * Groups ReputationNetworks and allows for their manipulation
 *
 * @package Mikron\Asesor\Domain\ValueObject
 */
class ReputationNetworkList
{
    /**
     * @var ReputationNetwork[]
     */
    private $reputationNetworkList;

    /**
     * @param $codeList string[]
     * @param $reputationListFromConfig ReputationNetwork[]
     */
    public function __construct($codeList, $reputationListFromConfig)
    {
        $this->reputationNetworkList = [];

        foreach ($codeList as $reputationCode) {
            if (isset($reputationListFromConfig[$reputationCode])) {
                $this->reputationNetworkList[] = $reputationListFromConfig[$reputationCode];
            }
        }
    }

    /**
     * @return ReputationNetwork[]
     */
    public function getReputationNetworkList()
    {
        return $this->reputationNetworkList;
    }

    /**
     * @param $listToCompareTo ReputationNetwork[]
     * @return ReputationNetwork[]
     */
    public function detectDuplicates($listToCompareTo)
    {
        $listIntersection = array_intersect($this->reputationNetworkList, $listToCompareTo->getReputationNetworkList());

        return $listIntersection;
    }

    /**
     * @param $listToCompareTo ReputationNetwork[]
     * @return boolean
     */
    public function areUnique($listToCompareTo)
    {
        $duplicates = $this->detectDuplicates($listToCompareTo);

        return (empty($duplicates));
    }
}