<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class InterfaceRequest
{

    private int|null $interfaceId;

    private string|null $mac;

    private ZabbixInterface|null $zabbixInterface;


    /**
     * @return int|null
     */
    public function getInterfaceId(): int|null
    {
         return $this->interfaceId;
     }

    /**
     * @return string|null
     */
    public function getMac(): string|null
    {
         return $this->mac;
     }

    /**
     * @return ZabbixInterface|null
     */
    public function getZabbixInterface(): ZabbixInterface|null
    {
         return $this->zabbixInterface;
     }

    /**
     * @param int|null $interfaceId
     * @param string|null $mac
     * @param ZabbixInterface|null $zabbixInterface
     */
    public function __construct(int|null $interfaceId, string|null $mac, ZabbixInterface|null $zabbixInterface)
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

        if (isset($object->interfaceId)) {
            $interfaceId = (int) $object->interfaceId;
        }else $interfaceId = $object->interfaceId=null;

        if (isset($object->mac)) {
            $mac = (string) $object->mac;
        }else $mac = $object->mac=null;

        if (isset($object->zabbixInterface)) {
           $zabbixInterface = ZabbixInterface::fromStdClass((object)$object->zabbixInterface);
        }else $zabbixInterface = $object->zabbixInterface=null;

        return new InterfaceRequest($interfaceId, $mac, $zabbixInterface);
     }
}
