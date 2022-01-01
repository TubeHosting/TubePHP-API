<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DedicatedInterface
{

    private DedicatedInstance|null $instance;

    private ZabbixInterface|null $zabbixInterface;

    private int|null $interfaceId;


    /**
     * @return DedicatedInstance|null
     */
    public function getInstance(): DedicatedInstance|null
    {
         return $this->instance;
     }

    /**
     * @return ZabbixInterface|null
     */
    public function getZabbixInterface(): ZabbixInterface|null
    {
         return $this->zabbixInterface;
     }

    /**
     * @return int|null
     */
    public function getInterfaceId(): int|null
    {
         return $this->interfaceId;
     }

    /**
     * @param DedicatedInstance|null $instance
     * @param ZabbixInterface|null $zabbixInterface
     * @param int|null $interfaceId
     */
    public function __construct(DedicatedInstance|null $instance, ZabbixInterface|null $zabbixInterface, int|null $interfaceId)
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

        if (isset($object->instance)) {
           $instance = DedicatedInstance::fromStdClass((object)$object->instance);
        }else $instance = $object->instance=null;

        if (isset($object->zabbixInterface)) {
           $zabbixInterface = ZabbixInterface::fromStdClass((object)$object->zabbixInterface);
        }else $zabbixInterface = $object->zabbixInterface=null;

        if (isset($object->interfaceId)) {
            $interfaceId = (int) $object->interfaceId;
        }else $interfaceId = $object->interfaceId=null;

        return new DedicatedInterface($instance, $zabbixInterface, $interfaceId);
     }
}
