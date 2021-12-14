<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class AggregatedInterfaceRequest
{

    private int $interfaceId;

    private ZabbixInterface $zabbixInterface;

    private array $interfaces;


    /**
     * @return int
     */
    public function getInterfaceId(): int
    {
         return $this->interfaceId;
     }

    /**
     * @return ZabbixInterface
     */
    public function getZabbixInterface(): ZabbixInterface
    {
         return $this->zabbixInterface;
     }

    /**
     * @return array
     */
    public function getInterfaces(): array
    {
         return $this->interfaces;
     }

    /**
     * @param int $interfaceId
     * @param ZabbixInterface $zabbixInterface
     * @param array $interfaces
     */
    public function __construct(int $interfaceId, ZabbixInterface $zabbixInterface, array $interfaces)
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
        $interfaceId = (int) $object->interfaceId;
        $zabbixInterface = ZabbixInterface::fromStdClass((object)$object->zabbixInterface);
        $interfaces = (array) $object->interfaces;

        return new AggregatedInterfaceRequest($interfaceId, $zabbixInterface, $interfaces);
     }
}
