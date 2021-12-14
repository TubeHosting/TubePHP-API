<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class ZabbixInterface
{

    private int $hostId;

    private int $netInItemId;

    private int $netOutItemId;


    /**
     * @return int
     */
    public function getHostId(): int
    {
         return $this->hostId;
     }

    /**
     * @return int
     */
    public function getNetInItemId(): int
    {
         return $this->netInItemId;
     }

    /**
     * @return int
     */
    public function getNetOutItemId(): int
    {
         return $this->netOutItemId;
     }

    /**
     * @param int $hostId
     * @param int $netInItemId
     * @param int $netOutItemId
     */
    public function __construct(int $hostId, int $netInItemId, int $netOutItemId)
    {
        $this->hostId = $hostId;
        $this->netInItemId = $netInItemId;
        $this->netOutItemId = $netOutItemId;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'hostId' => $this->getHostId(),
        'netInItemId' => $this->getNetInItemId(),
        'netOutItemId' => $this->getNetOutItemId(),
        ];
    }

    /**
     * @param object $object
     * @return ZabbixInterface
     */
    public static function fromStdClass(object $object):ZabbixInterface
    {
        $hostId = (int) $object->hostId;
        $netInItemId = (int) $object->netInItemId;
        $netOutItemId = (int) $object->netOutItemId;

        return new ZabbixInterface($hostId, $netInItemId, $netOutItemId);
     }
}
