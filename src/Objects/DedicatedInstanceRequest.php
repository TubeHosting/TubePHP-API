<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class DedicatedInstanceRequest
{

    private int|null $userId;

    private int|null $price;

    private int|null $runtimeInterval;

    private int|null $memory;

    private ServerPosition|null $position;

    private string|null $startDate;

    private int|null $labelId;

    private bool|null $available;

    private string|null $memoryType;

    private int|null $cpuId;

    private int|null $cpuCount;

    private int|null $gpuId;

    private int|null $gpuCount;

    private array|null $disks;

    private array|null $interfaces;

    private array|null $aggregatedInterfaces;

    private string|null $caseType;


    /**
     * @return int|null
     */
    public function getUserId(): int|null
    {
         return $this->userId;
     }

    /**
     * @return int|null
     */
    public function getPrice(): int|null
    {
         return $this->price;
     }

    /**
     * @return int|null
     */
    public function getRuntimeInterval(): int|null
    {
         return $this->runtimeInterval;
     }

    /**
     * @return int|null
     */
    public function getMemory(): int|null
    {
         return $this->memory;
     }

    /**
     * @return ServerPosition|null
     */
    public function getPosition(): ServerPosition|null
    {
         return $this->position;
     }

    /**
     * @return string|null
     */
    public function getStartDate(): string|null
    {
         return $this->startDate;
     }

    /**
     * @return int|null
     */
    public function getLabelId(): int|null
    {
         return $this->labelId;
     }

    /**
     * @return bool|null
     */
    public function getAvailable(): bool|null
    {
         return $this->available;
     }

    /**
     * @return string|null
     */
    public function getMemoryType(): string|null
    {
         return $this->memoryType;
     }

    /**
     * @return int|null
     */
    public function getCpuId(): int|null
    {
         return $this->cpuId;
     }

    /**
     * @return int|null
     */
    public function getCpuCount(): int|null
    {
         return $this->cpuCount;
     }

    /**
     * @return int|null
     */
    public function getGpuId(): int|null
    {
         return $this->gpuId;
     }

    /**
     * @return int|null
     */
    public function getGpuCount(): int|null
    {
         return $this->gpuCount;
     }

    /**
     * @return array|null
     */
    public function getDisks(): array|null
    {
         return $this->disks;
     }

    /**
     * @return array|null
     */
    public function getInterfaces(): array|null
    {
         return $this->interfaces;
     }

    /**
     * @return array|null
     */
    public function getAggregatedInterfaces(): array|null
    {
         return $this->aggregatedInterfaces;
     }

    /**
     * @return string|null
     */
    public function getCaseType(): string|null
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
    public function __construct(int|null $userId, int|null $price, int|null $runtimeInterval, int|null $memory, ServerPosition|null $position, string|null $startDate, int|null $labelId, bool|null $available, string|null $memoryType, int|null $cpuId, int|null $cpuCount, int|null $gpuId, int|null $gpuCount, array|null $disks, array|null $interfaces, array|null $aggregatedInterfaces, string|null $caseType)
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
        foreach ($tmpDisks as $key => $item) {
            $item = PaymentBundle::fromStdClass($item);
            $singleItem = array($key => $item);
            $disks = array_merge($disks, $singleItem);
        }
        $this->disks = $disks;

        //handle objects in array
        $tmpInterfaces = $interfaces;
        $interfaces = [];
        foreach ($tmpInterfaces as $key => $item) {
            $item = PaymentBundle::fromStdClass($item);
            $singleItem = array($key => $item);
            $interfaces = array_merge($interfaces, $singleItem);
        }
        $this->interfaces = $interfaces;

        //handle objects in array
        $tmpAggregatedInterfaces = $aggregatedInterfaces;
        $aggregatedInterfaces = [];
        foreach ($tmpAggregatedInterfaces as $key => $item) {
            $item = PaymentBundle::fromStdClass($item);
            $singleItem = array($key => $item);
            $aggregatedInterfaces = array_merge($aggregatedInterfaces, $singleItem);
        }
        $this->aggregatedInterfaces = $aggregatedInterfaces;
        $this->caseType = $caseType;
    }

    /**
     * @return array
     */
    public function getAsArr()
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
        }else $userId = $object->userId=null;

        if (isset($object->price)) {
            $price = (int) $object->price;
        }else $price = $object->price=null;

        if (isset($object->runtimeInterval)) {
            $runtimeInterval = (int) $object->runtimeInterval;
        }else $runtimeInterval = $object->runtimeInterval=null;

        if (isset($object->memory)) {
            $memory = (int) $object->memory;
        }else $memory = $object->memory=null;

        if (isset($object->position)) {
           $position = ServerPosition::fromStdClass((object)$object->position);
        }else $position = $object->position=null;

        if (isset($object->startDate)) {
            $startDate = (string) $object->startDate;
        }else $startDate = $object->startDate=null;

        if (isset($object->labelId)) {
            $labelId = (int) $object->labelId;
        }else $labelId = $object->labelId=null;

        if (isset($object->available)) {
            $available = (bool) $object->available;
        }else $available = $object->available=null;

        if (isset($object->memoryType)) {
            $memoryType = (string) $object->memoryType;
        }else $memoryType = $object->memoryType=null;

        if (isset($object->cpuId)) {
            $cpuId = (int) $object->cpuId;
        }else $cpuId = $object->cpuId=null;

        if (isset($object->cpuCount)) {
            $cpuCount = (int) $object->cpuCount;
        }else $cpuCount = $object->cpuCount=null;

        if (isset($object->gpuId)) {
            $gpuId = (int) $object->gpuId;
        }else $gpuId = $object->gpuId=null;

        if (isset($object->gpuCount)) {
            $gpuCount = (int) $object->gpuCount;
        }else $gpuCount = $object->gpuCount=null;

        if (isset($object->disks)) {
            $disks = (array) $object->disks;
        }else $disks = $object->disks=null;

        if (isset($object->interfaces)) {
            $interfaces = (array) $object->interfaces;
        }else $interfaces = $object->interfaces=null;

        if (isset($object->aggregatedInterfaces)) {
            $aggregatedInterfaces = (array) $object->aggregatedInterfaces;
        }else $aggregatedInterfaces = $object->aggregatedInterfaces=null;

        if (isset($object->caseType)) {
            $caseType = (string) $object->caseType;
        }else $caseType = $object->caseType=null;

        return new DedicatedInstanceRequest($userId, $price, $runtimeInterval, $memory, $position, $startDate, $labelId, $available, $memoryType, $cpuId, $cpuCount, $gpuId, $gpuCount, $disks, $interfaces, $aggregatedInterfaces, $caseType);
     }


    /**
     * @param DedicatedInstanceRequest $dedicatedInstanceRequest
     * @return string
     * @throws \Exception
     */
    public static function createInstance(DedicatedInstanceRequest $dedicatedInstanceRequest):string 
    {
        $result = TubeAPI::request('PUT', '/admin/dedicateds/instances', $dedicatedInstanceRequest->getAsArr(), TubeAPI::$token);
        return $result;
    }
}
