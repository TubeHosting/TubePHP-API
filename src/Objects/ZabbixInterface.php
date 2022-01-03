<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class ZabbixInterface
{

    private $hostId;

    private $netInItemId;

    private $netOutItemId;


    /**
     * @return ?int
     */
    public function getHostId(): ?int
    {
         return $this->hostId;
     }

    /**
     * @return ?int
     */
    public function getNetInItemId(): ?int
    {
         return $this->netInItemId;
     }

    /**
     * @return ?int
     */
    public function getNetOutItemId(): ?int
    {
         return $this->netOutItemId;
     }

    /**
     * @param int|null $hostId
     * @param int|null $netInItemId
     * @param int|null $netOutItemId
     */
    public function __construct(?int $hostId, ?int $netInItemId, ?int $netOutItemId)
    {
        $this->hostId = $hostId;
        $this->netInItemId = $netInItemId;
        $this->netOutItemId = $netOutItemId;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'hostId' => $this->getHostId(),
        'netInItemId' => $this->getNetInItemId(),
        'netOutItemId' => $this->getNetOutItemId(),
        ];
    }

    /**
     * @param object $object
     * @return ZabbixInterface
     */
    public static function fromStdClass(object $object):ZabbixInterface
    {

        if (isset($object->hostId)) {
            $hostId = (int) $object->hostId;
        }else $hostId = $object->hostId=null;

        if (isset($object->netInItemId)) {
            $netInItemId = (int) $object->netInItemId;
        }else $netInItemId = $object->netInItemId=null;

        if (isset($object->netOutItemId)) {
            $netOutItemId = (int) $object->netOutItemId;
        }else $netOutItemId = $object->netOutItemId=null;

        return new ZabbixInterface($hostId, $netInItemId, $netOutItemId);
     }
}
