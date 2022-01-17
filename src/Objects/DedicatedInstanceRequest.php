<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DedicatedInstanceRequest
{

    private $userId;

    private $price;

    private $runtimeInterval;

    private $memory;

    private $position;

    private $startDate;

    private $labelId;

    private $available;

    private $memoryType;

    private $cpuId;

    private $cpuCount;

    private $gpuId;

    private $gpuCount;

    private $disks;

    private $interfaces;

    private $aggregatedInterfaces;

    private $caseType;


    /**
     * @return ?int
     */
    public function getUserId(): ?int
    {
         return $this->userId;
     }

    /**
     * @return ?int
     */
    public function getPrice(): ?int
    {
         return $this->price;
     }

    /**
     * @return ?int
     */
    public function getRuntimeInterval(): ?int
    {
         return $this->runtimeInterval;
     }

    /**
     * @return ?int
     */
    public function getMemory(): ?int
    {
         return $this->memory;
     }

    /**
     * @return ?ServerPosition
     */
    public function getPosition(): ?ServerPosition
    {
         return $this->position;
     }

    /**
     * @return ?string
     */
    public function getStartDate(): ?string
    {
         return $this->startDate;
     }

    /**
     * @return ?int
     */
    public function getLabelId(): ?int
    {
         return $this->labelId;
     }

    /**
     * @return ?bool
     */
    public function getAvailable(): ?bool
    {
         return $this->available;
     }

    /**
     * @return ?string
     */
    public function getMemoryType(): ?string
    {
         return $this->memoryType;
     }

    /**
     * @return ?int
     */
    public function getCpuId(): ?int
    {
         return $this->cpuId;
     }

    /**
     * @return ?int
     */
    public function getCpuCount(): ?int
    {
         return $this->cpuCount;
     }

    /**
     * @return ?int
     */
    public function getGpuId(): ?int
    {
         return $this->gpuId;
     }

    /**
     * @return ?int
     */
    public function getGpuCount(): ?int
    {
         return $this->gpuCount;
     }

    /**
     * @return ?array
     */
    public function getDisks(): ?array
    {
         return $this->disks;
     }

    /**
     * @return ?array
     */
    public function getInterfaces(): ?array
    {
         return $this->interfaces;
     }

    /**
     * @return ?array
     */
    public function getAggregatedInterfaces(): ?array
    {
         return $this->aggregatedInterfaces;
     }

    /**
     * @return ?string
     */
    public function getCaseType(): ?string
    {
         return $this->caseType;
     }

    /**
     * @param int|null $userId
     * @param int|null $price
     * @param int|null $runtimeInterval
     * @param int|null $memory
     * @param ServerPosition|null $position
     * @param string|null $startDate
     * @param int|null $labelId
     * @param bool|null $available
     * @param string|null $memoryType
     * @param int|null $cpuId
     * @param int|null $cpuCount
     * @param int|null $gpuId
     * @param int|null $gpuCount
     * @param array|null $disks
     * @param array|null $interfaces
     * @param array|null $aggregatedInterfaces
     * @param string|null $caseType
     */
    public function __construct(?int $userId, ?int $price, ?int $runtimeInterval, ?int $memory, ?ServerPosition $position, ?string $startDate, ?int $labelId, ?bool $available, ?string $memoryType, ?int $cpuId, ?int $cpuCount, ?int $gpuId, ?int $gpuCount, ?array $disks, ?array $interfaces, ?array $aggregatedInterfaces, ?string $caseType)
    {
        $this->userId = $userId;
        $this->price = $price;
        $this->runtimeInterval = $runtimeInterval;
        $this->memory = $memory;
        $this->position = $position;
        $this->startDate = $startDate;
        $this->labelId = $labelId;
        $this->available = $available;
        $this->memoryType = $memoryType;
        $this->cpuId = $cpuId;
        $this->cpuCount = $cpuCount;
        $this->gpuId = $gpuId;
        $this->gpuCount = $gpuCount;

        //handle objects in array
        $tmpDisks = $disks;
        $disks = [];
        if($tmpDisks!==null){
            foreach ($tmpDisks as $key => $item) {
                $item = DiskLinkRequest::fromStdClass($item);
                $singleItem = array($key => $item);
                $disks = array_merge($disks, $singleItem);
            }
        }
        $this->disks = $disks;

        //handle objects in array
        $tmpInterfaces = $interfaces;
        $interfaces = [];
        if($tmpInterfaces!==null){
            foreach ($tmpInterfaces as $key => $item) {
                $item = InterfaceRequest::fromStdClass($item);
                $singleItem = array($key => $item);
                $interfaces = array_merge($interfaces, $singleItem);
            }
        }
        $this->interfaces = $interfaces;

        //handle objects in array
        $tmpAggregatedInterfaces = $aggregatedInterfaces;
        $aggregatedInterfaces = [];
        if($tmpAggregatedInterfaces!==null){
            foreach ($tmpAggregatedInterfaces as $key => $item) {
                $item = AggregatedInterfaceRequest::fromStdClass($item);
                $singleItem = array($key => $item);
                $aggregatedInterfaces = array_merge($aggregatedInterfaces, $singleItem);
            }
        }
        $this->aggregatedInterfaces = $aggregatedInterfaces;
        $this->caseType = $caseType;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'userId' => $this->getUserId(),
        'price' => $this->getPrice(),
        'runtimeInterval' => $this->getRuntimeInterval(),
        'memory' => $this->getMemory(),
        'position' => $this->getPosition(),
        'startDate' => $this->getStartDate(),
        'labelId' => $this->getLabelId(),
        'available' => $this->getAvailable(),
        'memoryType' => $this->getMemoryType(),
        'cpuId' => $this->getCpuId(),
        'cpuCount' => $this->getCpuCount(),
        'gpuId' => $this->getGpuId(),
        'gpuCount' => $this->getGpuCount(),
        'disks' => $this->getDisks(),
        'interfaces' => $this->getInterfaces(),
        'aggregatedInterfaces' => $this->getAggregatedInterfaces(),
        'caseType' => $this->getCaseType(),
        ];
    }

    /**
     * @param object $object
     * @return DedicatedInstanceRequest
     */
    public static function fromStdClass(object $object):DedicatedInstanceRequest
    {

        if (isset($object->userId)) {
            $userId = (int) $object->userId;
        }else $userId = null;

        if (isset($object->price)) {
            $price = (int) $object->price;
        }else $price = null;

        if (isset($object->runtimeInterval)) {
            $runtimeInterval = (int) $object->runtimeInterval;
        }else $runtimeInterval = null;

        if (isset($object->memory)) {
            $memory = (int) $object->memory;
        }else $memory = null;

        if (isset($object->position)) {
           $position = ServerPosition::fromStdClass((object)$object->position);
        }else $position = null;

        if (isset($object->startDate)) {
            $startDate = (string) $object->startDate;
        }else $startDate = null;

        if (isset($object->labelId)) {
            $labelId = (int) $object->labelId;
        }else $labelId = null;

        if (isset($object->available)) {
            $available = (bool) $object->available;
        }else $available = null;

        if (isset($object->memoryType)) {
            $memoryType = (string) $object->memoryType;
        }else $memoryType = null;

        if (isset($object->cpuId)) {
            $cpuId = (int) $object->cpuId;
        }else $cpuId = null;

        if (isset($object->cpuCount)) {
            $cpuCount = (int) $object->cpuCount;
        }else $cpuCount = null;

        if (isset($object->gpuId)) {
            $gpuId = (int) $object->gpuId;
        }else $gpuId = null;

        if (isset($object->gpuCount)) {
            $gpuCount = (int) $object->gpuCount;
        }else $gpuCount = null;

        if (isset($object->disks)) {
            $disks = (array) $object->disks;
        }else $disks = null;

        if (isset($object->interfaces)) {
            $interfaces = (array) $object->interfaces;
        }else $interfaces = null;

        if (isset($object->aggregatedInterfaces)) {
            $aggregatedInterfaces = (array) $object->aggregatedInterfaces;
        }else $aggregatedInterfaces = null;

        if (isset($object->caseType)) {
            $caseType = (string) $object->caseType;
        }else $caseType = null;

        return new DedicatedInstanceRequest($userId, $price, $runtimeInterval, $memory, $position, $startDate, $labelId, $available, $memoryType, $cpuId, $cpuCount, $gpuId, $gpuCount, $disks, $interfaces, $aggregatedInterfaces, $caseType);
     }


    /**
     * @link https://doc.api.tube-hosting.com/#/admin-dedicated-repository/createInstance
     * @param DedicatedInstanceRequest $dedicatedInstanceRequest
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function createInstance(DedicatedInstanceRequest $dedicatedInstanceRequest):string 
    {
        $result = TubeAPI::request('PUT', '/admin/dedicateds/instances', $dedicatedInstanceRequest->getAsArr(), TubeAPI::$token);
        return $result;
    }
}
