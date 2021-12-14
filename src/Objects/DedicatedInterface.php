<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class DedicatedInterface
{

    private DedicatedInstance $instance;

    private ZabbixInterface $zabbixInterface;

    private int $interfaceId;


    /**
     * @return DedicatedInstance
     */
    public function getInstance(): DedicatedInstance
    {
         return $this->instance;
     }

    /**
     * @return ZabbixInterface
     */
    public function getZabbixInterface(): ZabbixInterface
    {
         return $this->zabbixInterface;
     }

    /**
     * @return int
     */
    public function getInterfaceId(): int
    {
         return $this->interfaceId;
     }

    /**
     * @param DedicatedInstance $instance
     * @param ZabbixInterface $zabbixInterface
     * @param int $interfaceId
     */
    public function __construct(DedicatedInstance $instance, ZabbixInterface $zabbixInterface, int $interfaceId)
    {
        $this->instance = $instance;
        $this->zabbixInterface = $zabbixInterface;
        $this->interfaceId = $interfaceId;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'instance' => $this->getInstance(),
        'zabbixInterface' => $this->getZabbixInterface(),
        'interfaceId' => $this->getInterfaceId(),
        ];
    }

    /**
     * @param object $object
     * @return DedicatedInterface
     */
    public static function fromStdClass(object $object):DedicatedInterface
    {
        $instance = DedicatedInstance::fromStdClass((object)$object->instance);
        $zabbixInterface = ZabbixInterface::fromStdClass((object)$object->zabbixInterface);
        $interfaceId = (int) $object->interfaceId;

        return new DedicatedInterface($instance, $zabbixInterface, $interfaceId);
     }
}
