<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class DedicatedConfiguration
{

    private int $id;

    private int $memory;

    private int $hddDiskSpace;

    private int $ssdDiskSpace;

    private CPU $cpu;

    private GPU $gpu;

    private int $cpuCount;

    private int $gpuCount;

    private bool $available;

    private string $memoryType;


    /**
     * @return int
     */
    public function getId(): int
    {
         return $this->id;
     }

    /**
     * @return int
     */
    public function getMemory(): int
    {
         return $this->memory;
     }

    /**
     * @return int
     */
    public function getHddDiskSpace(): int
    {
         return $this->hddDiskSpace;
     }

    /**
     * @return int
     */
    public function getSsdDiskSpace(): int
    {
         return $this->ssdDiskSpace;
     }

    /**
     * @return CPU
     */
    public function getCpu(): CPU
    {
         return $this->cpu;
     }

    /**
     * @return GPU
     */
    public function getGpu(): GPU
    {
         return $this->gpu;
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
    public function getGpuCount(): int
    {
         return $this->gpuCount;
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
     * @param int $id
     * @param int $memory
     * @param int $hddDiskSpace
     * @param int $ssdDiskSpace
     * @param CPU $cpu
     * @param GPU $gpu
     * @param int $cpuCount
     * @param int $gpuCount
     * @param bool $available
     * @param string $memoryType
     */
    public function __construct(int $id, int $memory, int $hddDiskSpace, int $ssdDiskSpace, CPU $cpu, GPU $gpu, int $cpuCount, int $gpuCount, bool $available, string $memoryType)
    {
        $this->id = $id;
        $this->memory = $memory;
        $this->hddDiskSpace = $hddDiskSpace;
        $this->ssdDiskSpace = $ssdDiskSpace;
        $this->cpu = $cpu;
        $this->gpu = $gpu;
        $this->cpuCount = $cpuCount;
        $this->gpuCount = $gpuCount;
        $this->available = $available;
        $this->memoryType = $memoryType;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'id' => $this->getId(),
        'memory' => $this->getMemory(),
        'hddDiskSpace' => $this->getHddDiskSpace(),
        'ssdDiskSpace' => $this->getSsdDiskSpace(),
        'cpu' => $this->getCpu(),
        'gpu' => $this->getGpu(),
        'cpuCount' => $this->getCpuCount(),
        'gpuCount' => $this->getGpuCount(),
        'available' => $this->getAvailable(),
        'memoryType' => $this->getMemoryType(),
        ];
    }

    /**
     * @param object $object
     * @return DedicatedConfiguration
     */
    public static function fromStdClass(object $object):DedicatedConfiguration
    {
        $id = (int) $object->id;
        $memory = (int) $object->memory;
        $hddDiskSpace = (int) $object->hddDiskSpace;
        $ssdDiskSpace = (int) $object->ssdDiskSpace;
        $cpu = CPU::fromStdClass((object)$object->cpu);
        $gpu = GPU::fromStdClass((object)$object->gpu);
        $cpuCount = (int) $object->cpuCount;
        $gpuCount = (int) $object->gpuCount;
        $available = (bool) $object->available;
        $memoryType = (string) $object->memoryType;

        return new DedicatedConfiguration($id, $memory, $hddDiskSpace, $ssdDiskSpace, $cpu, $gpu, $cpuCount, $gpuCount, $available, $memoryType);
     }
}
