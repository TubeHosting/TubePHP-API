<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class SimpleDedicatedInterface
{

    private string|null $mac;

    private int|null $speed;

    private bool|null $active;

    private int|null $interfaceId;

    private int|null $aggregatedId;

    private int|null $instanceId;


    /**
     * @return string|null
     */
    public function getMac(): string|null
    {
         return $this->mac;
     }

    /**
     * @return int|null
     */
    public function getSpeed(): int|null
    {
         return $this->speed;
     }

    /**
     * @return bool|null
     */
    public function getActive(): bool|null
    {
         return $this->active;
     }

    /**
     * @return int|null
     */
    public function getInterfaceId(): int|null
    {
         return $this->interfaceId;
     }

    /**
     * @return int|null
     */
    public function getAggregatedId(): int|null
    {
         return $this->aggregatedId;
     }

    /**
     * @return int|null
     */
    public function getInstanceId(): int|null
    {
         return $this->instanceId;
     }

    /**
     * @param string|null $mac
     * @param int|null $speed
     * @param bool|null $active
     * @param int|null $interfaceId
     * @param int|null $aggregatedId
     * @param int|null $instanceId
     */
    public function __construct(string|null $mac, int|null $speed, bool|null $active, int|null $interfaceId, int|null $aggregatedId, int|null $instanceId)
    {
        $this->mac = $mac;
        $this->speed = $speed;
        $this->active = $active;
        $this->interfaceId = $interfaceId;
        $this->aggregatedId = $aggregatedId;
        $this->instanceId = $instanceId;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'mac' => $this->getMac(),
        'speed' => $this->getSpeed(),
        'active' => $this->getActive(),
        'interfaceId' => $this->getInterfaceId(),
        'aggregatedId' => $this->getAggregatedId(),
        'instanceId' => $this->getInstanceId(),
        ];
    }

    /**
     * @param object $object
     * @return SimpleDedicatedInterface
     */
    public static function fromStdClass(object $object):SimpleDedicatedInterface
    {

        if (isset($object->mac)) {
            $mac = (string) $object->mac;
        }else $mac = $object->mac=null;

        if (isset($object->speed)) {
            $speed = (int) $object->speed;
        }else $speed = $object->speed=null;

        if (isset($object->active)) {
            $active = (bool) $object->active;
        }else $active = $object->active=null;

        if (isset($object->interfaceId)) {
            $interfaceId = (int) $object->interfaceId;
        }else $interfaceId = $object->interfaceId=null;

        if (isset($object->aggregatedId)) {
            $aggregatedId = (int) $object->aggregatedId;
        }else $aggregatedId = $object->aggregatedId=null;

        if (isset($object->instanceId)) {
            $instanceId = (int) $object->instanceId;
        }else $instanceId = $object->instanceId=null;

        return new SimpleDedicatedInterface($mac, $speed, $active, $interfaceId, $aggregatedId, $instanceId);
     }
}
