<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class DedicatedInstanceRequest
{

    private int $userId;

    private int $price;

    private int $runtimeInterval;

    private int $memory;

    private ServerPosition $position;

    private string $startDate;

    private int $labelId;

    private bool $available;

    private string $memoryType;

    private int $cpuId;

    private int $cpuCount;

    private int $gpuId;

    private int $gpuCount;

    private array $disks;

    private array $interfaces;

    private array $aggregatedInterfaces;

    private string $caseType;


    /**
     * @return int
     */
    public function getUserId(): int
    {
         return $this->userId;
     }

    /**
     * @return int
     */
    public function getPrice(): int
    {
         return $this->price;
     }

    /**
     * @return int
     */
    public function getRuntimeInterval(): int
    {
         return $this->runtimeInterval;
     }

    /**
     * @return int
     */
    public function getMemory(): int
    {
         return $this->memory;
     }

    /**
     * @return ServerPosition
     */
    public function getPosition(): ServerPosition
    {
         return $this->position;
     }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
         return $this->startDate;
     }

    /**
     * @return int
     */
    public function getLabelId(): int
    {
         return $this->labelId;
     }

    /**
     * @return bool
     */
    public function getAvailable(): bool
    {
         return $this->available;
     }

    /**
     * @return string
     */
    public function getMemoryType(): string
    {
         return $this->memoryType;
     }

    /**
     * @return int
     */
    public function getCpuId(): int
    {
         return $this->cpuId;
     }

    /**
     * @return int
     */
    public function getCpuCount(): int
    {
         return $this->cpuCount;
     }

    /**
     * @return int
     */
    public function getGpuId(): int
    {
         return $this->gpuId;
     }

    /**
     * @return int
     */
    public function getGpuCount(): int
    {
         return $this->gpuCount;
     }

    /**
     * @return array
     */
    public function getDisks(): array
    {
         return $this->disks;
     }

    /**
     * @return array
     */
    public function getInterfaces(): array
    {
         return $this->interfaces;
     }

    /**
     * @return array
     */
    public function getAggregatedInterfaces(): array
    {
         return $this->aggregatedInterfaces;
     }

    /**
     * @return string
     */
    public function getCaseType(): string
    {
         return $this->caseType;
     }

    /**
     * @param int $userId
     * @param int $price
     * @param int $runtimeInterval
     * @param int $memory
     * @param ServerPosition $position
     * @param string $startDate
     * @param int $labelId
     * @param bool $available
     * @param string $memoryType
     * @param int $cpuId
     * @param int $cpuCount
     * @param int $gpuId
     * @param int $gpuCount
     * @param array $disks
     * @param array $interfaces
     * @param array $aggregatedInterfaces
     * @param string $caseType
     */
    public function __construct(int $userId, int $price, int $runtimeInterval, int $memory, ServerPosition $position, string $startDate, int $labelId, bool $available, string $memoryType, int $cpuId, int $cpuCount, int $gpuId, int $gpuCount, array $disks, array $interfaces, array $aggregatedInterfaces, string $caseType)
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
        $userId = (int) $object->userId;
        $price = (int) $object->price;
        $runtimeInterval = (int) $object->runtimeInterval;
        $memory = (int) $object->memory;
        $position = ServerPosition::fromStdClass((object)$object->position);
        $startDate = (string) $object->startDate;
        $labelId = (int) $object->labelId;
        $available = (bool) $object->available;
        $memoryType = (string) $object->memoryType;
        $cpuId = (int) $object->cpuId;
        $cpuCount = (int) $object->cpuCount;
        $gpuId = (int) $object->gpuId;
        $gpuCount = (int) $object->gpuCount;
        $disks = (array) $object->disks;
        $interfaces = (array) $object->interfaces;
        $aggregatedInterfaces = (array) $object->aggregatedInterfaces;
        $caseType = (string) $object->caseType;

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
