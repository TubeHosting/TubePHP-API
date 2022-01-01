<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class AggregatedInterfaceRequest
{

    private int|null $interfaceId;

    private ZabbixInterface|null $zabbixInterface;

    private array|null $interfaces;


    /**
     * @return int|null
     */
    public function getInterfaceId(): int|null
    {
         return $this->interfaceId;
     }

    /**
     * @return ZabbixInterface|null
     */
    public function getZabbixInterface(): ZabbixInterface|null
    {
         return $this->zabbixInterface;
     }

    /**
     * @return array|null
     */
    public function getInterfaces(): array|null
    {
         return $this->interfaces;
     }

    /**
     * @param int|null $interfaceId
     * @param ZabbixInterface|null $zabbixInterface
     * @param array|null $interfaces
     */
    public function __construct(int|null $interfaceId, ZabbixInterface|null $zabbixInterface, array|null $interfaces)
    {
        $this->interfaceId = $interfaceId;
        $this->zabbixInterface = $zabbixInterface;
        $this->interfaces = $interfaces;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'interfaceId' => $this->getInterfaceId(),
        'zabbixInterface' => $this->getZabbixInterface(),
        'interfaces' => $this->getInterfaces(),
        ];
    }

    /**
     * @param object $object
     * @return AggregatedInterfaceRequest
     */
    public static function fromStdClass(object $object):AggregatedInterfaceRequest
    {

        if (isset($object->interfaceId)) {
            $interfaceId = (int) $object->interfaceId;
        }else $interfaceId = $object->interfaceId=null;

        if (isset($object->zabbixInterface)) {
           $zabbixInterface = ZabbixInterface::fromStdClass((object)$object->zabbixInterface);
        }else $zabbixInterface = $object->zabbixInterface=null;

        if (isset($object->interfaces)) {
            $interfaces = (array) $object->interfaces;
        }else $interfaces = $object->interfaces=null;

        return new AggregatedInterfaceRequest($interfaceId, $zabbixInterface, $interfaces);
     }
}
