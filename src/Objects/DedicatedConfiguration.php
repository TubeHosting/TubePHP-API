<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DedicatedConfiguration
{

    private int|null $id;

    private int|null $memory;

    private int|null $hddDiskSpace;

    private int|null $ssdDiskSpace;

    private CPU|null $cpu;

    private GPU|null $gpu;

    private int|null $cpuCount;

    private int|null $gpuCount;

    private bool|null $available;

    private string|null $memoryType;


    /**
     * @return int|null
     */
    public function getId(): int|null
    {
         return $this->id;
     }

    /**
     * @return int|null
     */
    public function getMemory(): int|null
    {
         return $this->memory;
     }

    /**
     * @return int|null
     */
    public function getHddDiskSpace(): int|null
    {
         return $this->hddDiskSpace;
     }

    /**
     * @return int|null
     */
    public function getSsdDiskSpace(): int|null
    {
         return $this->ssdDiskSpace;
     }

    /**
     * @return CPU|null
     */
    public function getCpu(): CPU|null
    {
         return $this->cpu;
     }

    /**
     * @return GPU|null
     */
    public function getGpu(): GPU|null
    {
         return $this->gpu;
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
    public function getGpuCount(): int|null
    {
         return $this->gpuCount;
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
     * @param int|null $id
     * @param int|null $memory
     * @param int|null $hddDiskSpace
     * @param int|null $ssdDiskSpace
     * @param CPU|null $cpu
     * @param GPU|null $gpu
     * @param int|null $cpuCount
     * @param int|null $gpuCount
     * @param bool|null $available
     * @param string|null $memoryType
     */
    public function __construct(int|null $id, int|null $memory, int|null $hddDiskSpace, int|null $ssdDiskSpace, CPU|null $cpu, GPU|null $gpu, int|null $cpuCount, int|null $gpuCount, bool|null $available, string|null $memoryType)
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

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->memory)) {
            $memory = (int) $object->memory;
        }else $memory = $object->memory=null;

        if (isset($object->hddDiskSpace)) {
            $hddDiskSpace = (int) $object->hddDiskSpace;
        }else $hddDiskSpace = $object->hddDiskSpace=null;

        if (isset($object->ssdDiskSpace)) {
            $ssdDiskSpace = (int) $object->ssdDiskSpace;
        }else $ssdDiskSpace = $object->ssdDiskSpace=null;

        if (isset($object->cpu)) {
           $cpu = CPU::fromStdClass((object)$object->cpu);
        }else $cpu = $object->cpu=null;

        if (isset($object->gpu)) {
           $gpu = GPU::fromStdClass((object)$object->gpu);
        }else $gpu = $object->gpu=null;

        if (isset($object->cpuCount)) {
            $cpuCount = (int) $object->cpuCount;
        }else $cpuCount = $object->cpuCount=null;

        if (isset($object->gpuCount)) {
            $gpuCount = (int) $object->gpuCount;
        }else $gpuCount = $object->gpuCount=null;

        if (isset($object->available)) {
            $available = (bool) $object->available;
        }else $available = $object->available=null;

        if (isset($object->memoryType)) {
            $memoryType = (string) $object->memoryType;
        }else $memoryType = $object->memoryType=null;

        return new DedicatedConfiguration($id, $memory, $hddDiskSpace, $ssdDiskSpace, $cpu, $gpu, $cpuCount, $gpuCount, $available, $memoryType);
     }
}
