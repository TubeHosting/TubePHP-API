<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DedicatedConfiguration
{

    private $id;

    private $memory;

    private $hddDiskSpace;

    private $ssdDiskSpace;

    private $cpu;

    private $gpu;

    private $cpuCount;

    private $gpuCount;

    private $available;

    private $memoryType;


    /**
     * @return ?int
     */
    public function getId(): ?int
    {
         return $this->id;
     }

    /**
     * @return ?int
     */
    public function getMemory(): ?int
    {
         return $this->memory;
     }

    /**
     * @return ?int
     */
    public function getHddDiskSpace(): ?int
    {
         return $this->hddDiskSpace;
     }

    /**
     * @return ?int
     */
    public function getSsdDiskSpace(): ?int
    {
         return $this->ssdDiskSpace;
     }

    /**
     * @return ?CPU
     */
    public function getCpu(): ?CPU
    {
         return $this->cpu;
     }

    /**
     * @return ?GPU
     */
    public function getGpu(): ?GPU
    {
         return $this->gpu;
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
    public function getGpuCount(): ?int
    {
         return $this->gpuCount;
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
    public function __construct(?int $id, ?int $memory, ?int $hddDiskSpace, ?int $ssdDiskSpace, ?CPU $cpu, ?GPU $gpu, ?int $cpuCount, ?int $gpuCount, ?bool $available, ?string $memoryType)
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
    public function getAsArr():array
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
