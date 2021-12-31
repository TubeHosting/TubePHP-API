<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class ZabbixInterface
{

    private int|null $hostId;

    private int|null $netInItemId;

    private int|null $netOutItemId;


    /**
     * @return int|null
     */
    public function getHostId(): int|null
    {
         return $this->hostId;
     }

    /**
     * @return int|null
     */
    public function getNetInItemId(): int|null
    {
         return $this->netInItemId;
     }

    /**
     * @return int|null
     */
    public function getNetOutItemId(): int|null
    {
         return $this->netOutItemId;
     }

    /**
     * @param int|null $hostId
     * @param int|null $netInItemId
     * @param int|null $netOutItemId
     */
    public function __construct(int|null $hostId, int|null $netInItemId, int|null $netOutItemId)
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

        if (isset($object->hostId)) {
            $hostId = (int) $object->hostId;
        }else $hostId = $object->hostId=null;

        if (isset($object->netInItemId)) {
            $netInItemId = (int) $object->netInItemId;
        }else $netInItemId = $object->netInItemId=null;

        if (isset($object->netOutItemId)) {
            $netOutItemId = (int) $object->netOutItemId;
        }else $netOutItemId = $object->netOutItemId=null;

        return new ZabbixInterface($hostId, $netInItemId, $netOutItemId);
     }
}
