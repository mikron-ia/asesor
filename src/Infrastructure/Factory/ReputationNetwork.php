<?php

namespace Mikron\Asesor\Infrastructure\Factory;

use Mikron\Asesor\Domain\ValueObject;

class ReputationNetwork
{
    public function createFromSingleArray($key, $data)
    {
        return new ValueObject\ReputationNetwork($key, $data);
    }

    public function createFromCompleteArray($array)
    {
        $reputationNetworkList = [];

        foreach ($array as $key => $record) {
            $reputationNetworkList[$key] = $this->createFromSingleArray($key, $record);
        }

        return $reputationNetworkList;
    }
}