<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DedicatedInterfacesAggregated
{

    private $interfaces;

    private $aggregatedId;

    private $instanceId;

    private $interfaceId;


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
    public function getAggregatedId(): ?int
    {
         return $this->aggregatedId;
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
    public function getInterfaceId(): ?int
    {
         return $this->interfaceId;
     }

    /**
     * @param array|null $interfaces
     * @param int|null $aggregatedId
     * @param int|null $instanceId
     * @param int|null $interfaceId
     */
    public function __construct(?array $interfaces, ?int $aggregatedId, ?int $instanceId, ?int $interfaceId)
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
        $this->aggregatedId = $aggregatedId;
        $this->instanceId = $instanceId;
        $this->interfaceId = $interfaceId;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'interfaces' => $this->getInterfaces(),
        'aggregatedId' => $this->getAggregatedId(),
        'instanceId' => $this->getInstanceId(),
        'interfaceId' => $this->getInterfaceId(),
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

        if (isset($object->aggregatedId)) {
            $aggregatedId = (int) $object->aggregatedId;
        }else $aggregatedId = null;

        if (isset($object->instanceId)) {
            $instanceId = (int) $object->instanceId;
        }else $instanceId = null;

        if (isset($object->interfaceId)) {
            $interfaceId = (int) $object->interfaceId;
        }else $interfaceId = null;

        return new DedicatedInterfacesAggregated($interfaces, $aggregatedId, $instanceId, $interfaceId);
     }
}
