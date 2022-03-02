<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DedicatedInterfacesAggregated
{

    private $interfaces;

    private $interfaceId;

    private $instanceId;

    private $aggregatedId;


    /**
     * @return ?array
     */
    public function getInterfaces(): ?array
    {
         return $this->interfaces;
     }

    /**
     * @return ?int
     */
    public function getInterfaceId(): ?int
    {
         return $this->interfaceId;
     }

    /**
     * @return ?int
     */
    public function getInstanceId(): ?int
    {
         return $this->instanceId;
     }

    /**
     * @return ?int
     */
    public function getAggregatedId(): ?int
    {
         return $this->aggregatedId;
     }

    /**
     * @param array|null $interfaces
     * @param int|null $interfaceId
     * @param int|null $instanceId
     * @param int|null $aggregatedId
     */
    public function __construct(?array $interfaces, ?int $interfaceId, ?int $instanceId, ?int $aggregatedId)
    {

        //handle stuff in array
        $tmpInterfaces = $interfaces;
        $interfaces = [];
        if($tmpInterfaces!==null){
             foreach ($tmpInterfaces as $key => $item) {
                 $singleItem = array($key => $item);
                 $interfaces = array_merge($interfaces, $singleItem);
            }
        }
        $this->interfaces = $interfaces;
        $this->interfaceId = $interfaceId;
        $this->instanceId = $instanceId;
        $this->aggregatedId = $aggregatedId;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'interfaces' => $this->getInterfaces(),
        'interfaceId' => $this->getInterfaceId(),
        'instanceId' => $this->getInstanceId(),
        'aggregatedId' => $this->getAggregatedId(),
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
        }else $interfaces = null;

        if (isset($object->interfaceId)) {
            $interfaceId = (int) $object->interfaceId;
        }else $interfaceId = null;

        if (isset($object->instanceId)) {
            $instanceId = (int) $object->instanceId;
        }else $instanceId = null;

        if (isset($object->aggregatedId)) {
            $aggregatedId = (int) $object->aggregatedId;
        }else $aggregatedId = null;

        return new DedicatedInterfacesAggregated($interfaces, $interfaceId, $instanceId, $aggregatedId);
     }
}
