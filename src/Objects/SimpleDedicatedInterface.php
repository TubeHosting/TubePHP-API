<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class SimpleDedicatedInterface
{

    private string $mac;

    private int $speed;

    private bool $active;

    private int $interfaceId;

    private int $aggregatedId;

    private int $instanceId;


    /**
     * @return string
     */
    public function getMac(): string
    {
         return $this->mac;
     }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
         return $this->speed;
     }

    /**
     * @return bool
     */
    public function getActive(): bool
    {
         return $this->active;
     }

    /**
     * @return int
     */
    public function getInterfaceId(): int
    {
         return $this->interfaceId;
     }

    /**
     * @return int
     */
    public function getAggregatedId(): int
    {
         return $this->aggregatedId;
     }

    /**
     * @return int
     */
    public function getInstanceId(): int
    {
         return $this->instanceId;
     }

    /**
     * @param string $mac
     * @param int $speed
     * @param bool $active
     * @param int $interfaceId
     * @param int $aggregatedId
     * @param int $instanceId
     */
    public function __construct(string $mac, int $speed, bool $active, int $interfaceId, int $aggregatedId, int $instanceId)
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
        $mac = (string) $object->mac;
        $speed = (int) $object->speed;
        $active = (bool) $object->active;
        $interfaceId = (int) $object->interfaceId;
        $aggregatedId = (int) $object->aggregatedId;
        $instanceId = (int) $object->instanceId;

        return new SimpleDedicatedInterface($mac, $speed, $active, $interfaceId, $aggregatedId, $instanceId);
     }
}
