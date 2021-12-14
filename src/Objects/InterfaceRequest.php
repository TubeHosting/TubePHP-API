<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class InterfaceRequest
{

    private int $interfaceId;

    private string $mac;

    private ZabbixInterface $zabbixInterface;


    /**
     * @return int
     */
    public function getInterfaceId(): int
    {
         return $this->interfaceId;
     }

    /**
     * @return string
     */
    public function getMac(): string
    {
         return $this->mac;
     }

    /**
     * @return ZabbixInterface
     */
    public function getZabbixInterface(): ZabbixInterface
    {
         return $this->zabbixInterface;
     }

    /**
     * @param int $interfaceId
     * @param string $mac
     * @param ZabbixInterface $zabbixInterface
     */
    public function __construct(int $interfaceId, string $mac, ZabbixInterface $zabbixInterface)
    {
        $this->interfaceId = $interfaceId;
        $this->mac = $mac;
        $this->zabbixInterface = $zabbixInterface;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'interfaceId' => $this->getInterfaceId(),
        'mac' => $this->getMac(),
        'zabbixInterface' => $this->getZabbixInterface(),
        ];
    }

    /**
     * @param object $object
     * @return InterfaceRequest
     */
    public static function fromStdClass(object $object):InterfaceRequest
    {
        $interfaceId = (int) $object->interfaceId;
        $mac = (string) $object->mac;
        $zabbixInterface = ZabbixInterface::fromStdClass((object)$object->zabbixInterface);

        return new InterfaceRequest($interfaceId, $mac, $zabbixInterface);
     }
}
