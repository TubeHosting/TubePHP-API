<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DedicatedInterface
{

    private $instance;

    private $zabbixInterface;

    private $interfaceId;


    /**
     * @return ?DedicatedInstance
     */
    public function getInstance(): ?DedicatedInstance
    {
         return $this->instance;
     }

    /**
     * @return ?ZabbixInterface
     */
    public function getZabbixInterface(): ?ZabbixInterface
    {
         return $this->zabbixInterface;
     }

    /**
     * @return ?int
     */
    public function getInterfaceId(): ?int
    {
         return $this->interfaceId;
     }

    /**
     * @param DedicatedInstance|null $instance
     * @param ZabbixInterface|null $zabbixInterface
     * @param int|null $interfaceId
     */
    public function __construct(?DedicatedInstance $instance, ?ZabbixInterface $zabbixInterface, ?int $interfaceId)
    {
        $this->instance = $instance;
        $this->zabbixInterface = $zabbixInterface;
        $this->interfaceId = $interfaceId;
    }

    /**
     * @return array
     */
    public function getAsArr():array
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
        }else $instance = null;

        if (isset($object->zabbixInterface)) {
           $zabbixInterface = ZabbixInterface::fromStdClass((object)$object->zabbixInterface);
        }else $zabbixInterface = null;

        if (isset($object->interfaceId)) {
            $interfaceId = (int) $object->interfaceId;
        }else $interfaceId = null;

        return new DedicatedInterface($instance, $zabbixInterface, $interfaceId);
     }
}
