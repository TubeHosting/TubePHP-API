<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class SimpleDedicatedInterface
{

    private $mac;

    private $speed;

    private $active;

    private $interfaceId;

    private $instanceId;

    private $aggregatedId;


    /**
     * @return ?string
     */
    public function getMac(): ?string
    {
         return $this->mac;
     }

    /**
     * @return ?int
     */
    public function getSpeed(): ?int
    {
         return $this->speed;
     }

    /**
     * @return ?bool
     */
    public function getActive(): ?bool
    {
         return $this->active;
     }

    /**
     * @return ?int
     */
    public function getInterfaceId(): ?int
    {
         return $this->interfaceId;
     }

    /**
     * @return ?int
     */
    public function getInstanceId(): ?int
    {
         return $this->instanceId;
     }

    /**
     * @return ?int
     */
    public function getAggregatedId(): ?int
    {
         return $this->aggregatedId;
     }

    /**
     * @param string|null $mac
     * @param int|null $speed
     * @param bool|null $active
     * @param int|null $interfaceId
     * @param int|null $instanceId
     * @param int|null $aggregatedId
     */
    public function __construct(?string $mac, ?int $speed, ?bool $active, ?int $interfaceId, ?int $instanceId, ?int $aggregatedId)
    {
        $this->mac = $mac;
        $this->speed = $speed;
        $this->active = $active;
        $this->interfaceId = $interfaceId;
        $this->instanceId = $instanceId;
        $this->aggregatedId = $aggregatedId;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'mac' => $this->getMac(),
        'speed' => $this->getSpeed(),
        'active' => $this->getActive(),
        'interfaceId' => $this->getInterfaceId(),
        'instanceId' => $this->getInstanceId(),
        'aggregatedId' => $this->getAggregatedId(),
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
        }else $mac = null;

        if (isset($object->speed)) {
            $speed = (int) $object->speed;
        }else $speed = null;

        if (isset($object->active)) {
            $active = (bool) $object->active;
        }else $active = null;

        if (isset($object->interfaceId)) {
            $interfaceId = (int) $object->interfaceId;
        }else $interfaceId = null;

        if (isset($object->instanceId)) {
            $instanceId = (int) $object->instanceId;
        }else $instanceId = null;

        if (isset($object->aggregatedId)) {
            $aggregatedId = (int) $object->aggregatedId;
        }else $aggregatedId = null;

        return new SimpleDedicatedInterface($mac, $speed, $active, $interfaceId, $instanceId, $aggregatedId);
     }
}
