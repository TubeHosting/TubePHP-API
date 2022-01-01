<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DedicatedInterfacesAggregated
{

    private array|null $interfaces;

    private int|null $interfaceId;

    private int|null $aggregatedId;

    private int|null $instanceId;


    /**
     * @return array|null
     */
    public function getInterfaces(): array|null
    {
         return $this->interfaces;
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
     * @param array|null $interfaces
     * @param int|null $interfaceId
     * @param int|null $aggregatedId
     * @param int|null $instanceId
     */
    public function __construct(array|null $interfaces, int|null $interfaceId, int|null $aggregatedId, int|null $instanceId)
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

        if (isset($object->interfaces)) {
            $interfaces = (array) $object->interfaces;
        }else $interfaces = $object->interfaces=null;

        if (isset($object->interfaceId)) {
            $interfaceId = (int) $object->interfaceId;
        }else $interfaceId = $object->interfaceId=null;

        if (isset($object->aggregatedId)) {
            $aggregatedId = (int) $object->aggregatedId;
        }else $aggregatedId = $object->aggregatedId=null;

        if (isset($object->instanceId)) {
            $instanceId = (int) $object->instanceId;
        }else $instanceId = $object->instanceId=null;

        return new DedicatedInterfacesAggregated($interfaces, $interfaceId, $aggregatedId, $instanceId);
     }
}
