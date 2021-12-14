<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class DedicatedInterfacesAggregated
{

    private array $interfaces;

    private int $interfaceId;

    private int $aggregatedId;

    private int $instanceId;


    /**
     * @return array
     */
    public function getInterfaces(): array
    {
         return $this->interfaces;
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
     * @param array $interfaces
     * @param int $interfaceId
     * @param int $aggregatedId
     * @param int $instanceId
     */
    public function __construct(array $interfaces, int $interfaceId, int $aggregatedId, int $instanceId)
    {
        $this->interfaces = $interfaces;
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
        'interfaces' => $this->getInterfaces(),
        'interfaceId' => $this->getInterfaceId(),
        'aggregatedId' => $this->getAggregatedId(),
        'instanceId' => $this->getInstanceId(),
        ];
    }

    /**
     * @param object $object
     * @return DedicatedInterfacesAggregated
     */
    public static function fromStdClass(object $object):DedicatedInterfacesAggregated
    {
        $interfaces = (array) $object->interfaces;
        $interfaceId = (int) $object->interfaceId;
        $aggregatedId = (int) $object->aggregatedId;
        $instanceId = (int) $object->instanceId;

        return new DedicatedInterfacesAggregated($interfaces, $interfaceId, $aggregatedId, $instanceId);
     }
}
