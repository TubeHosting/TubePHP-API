<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DedicatedUpgrade
{

    private $id;

    private $gpuCount;

    private $memory;

    private $memoryType;

    private $cpuCount;

    private $cpu;

    private $gpu;

    private $addedDisks;

    private $removedDisks;

    private $price;


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
    public function getGpuCount(): ?int
    {
         return $this->gpuCount;
     }

    /**
     * @return ?int
     */
    public function getMemory(): ?int
    {
         return $this->memory;
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
    public function getCpuCount(): ?int
    {
         return $this->cpuCount;
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
     * @return ?array
     */
    public function getAddedDisks(): ?array
    {
         return $this->addedDisks;
     }

    /**
     * @return ?array
     */
    public function getRemovedDisks(): ?array
    {
         return $this->removedDisks;
     }

    /**
     * @return ?int
     */
    public function getPrice(): ?int
    {
         return $this->price;
     }

    /**
     * @param int|null $id
     * @param int|null $gpuCount
     * @param int|null $memory
     * @param string|null $memoryType
     * @param int|null $cpuCount
     * @param CPU|null $cpu
     * @param GPU|null $gpu
     * @param array|null $addedDisks
     * @param array|null $removedDisks
     * @param int|null $price
     */
    public function __construct(?int $id, ?int $gpuCount, ?int $memory, ?string $memoryType, ?int $cpuCount, ?CPU $cpu, ?GPU $gpu, ?array $addedDisks, ?array $removedDisks, ?int $price)
    {
        $this->id = $id;
        $this->gpuCount = $gpuCount;
        $this->memory = $memory;
        $this->memoryType = $memoryType;
        $this->cpuCount = $cpuCount;
        $this->cpu = $cpu;
        $this->gpu = $gpu;

        //handle objects in array
        $tmpAddedDisks = $addedDisks;
        $addedDisks = [];
        if($tmpAddedDisks!==null){
            foreach ($tmpAddedDisks as $key => $item) {
                $item = DedicatedInstanceDiskLink::fromStdClass($item);
                $singleItem = array($key => $item);
                $addedDisks = array_merge($addedDisks, $singleItem);
            }
        }
        $this->addedDisks = $addedDisks;

        //handle objects in array
        $tmpRemovedDisks = $removedDisks;
        $removedDisks = [];
        if($tmpRemovedDisks!==null){
            foreach ($tmpRemovedDisks as $key => $item) {
                $item = DedicatedInstanceDiskLink::fromStdClass($item);
                $singleItem = array($key => $item);
                $removedDisks = array_merge($removedDisks, $singleItem);
            }
        }
        $this->removedDisks = $removedDisks;
        $this->price = $price;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'id' => $this->getId(),
        'gpuCount' => $this->getGpuCount(),
        'memory' => $this->getMemory(),
        'memoryType' => $this->getMemoryType(),
        'cpuCount' => $this->getCpuCount(),
        'cpu' => $this->getCpu(),
        'gpu' => $this->getGpu(),
        'addedDisks' => $this->getAddedDisks(),
        'removedDisks' => $this->getRemovedDisks(),
        'price' => $this->getPrice(),
        ];
    }

    /**
     * @param object $object
     * @return DedicatedUpgrade
     */
    public static function fromStdClass(object $object):DedicatedUpgrade
    {

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = null;

        if (isset($object->gpuCount)) {
            $gpuCount = (int) $object->gpuCount;
        }else $gpuCount = null;

        if (isset($object->memory)) {
            $memory = (int) $object->memory;
        }else $memory = null;

        if (isset($object->memoryType)) {
            $memoryType = (string) $object->memoryType;
        }else $memoryType = null;

        if (isset($object->cpuCount)) {
            $cpuCount = (int) $object->cpuCount;
        }else $cpuCount = null;

        if (isset($object->cpu)) {
           $cpu = CPU::fromStdClass((object)$object->cpu);
        }else $cpu = null;

        if (isset($object->gpu)) {
           $gpu = GPU::fromStdClass((object)$object->gpu);
        }else $gpu = null;

        if (isset($object->addedDisks)) {
            $addedDisks = (array) $object->addedDisks;
        }else $addedDisks = null;

        if (isset($object->removedDisks)) {
            $removedDisks = (array) $object->removedDisks;
        }else $removedDisks = null;

        if (isset($object->price)) {
            $price = (int) $object->price;
        }else $price = null;

        return new DedicatedUpgrade($id, $gpuCount, $memory, $memoryType, $cpuCount, $cpu, $gpu, $addedDisks, $removedDisks, $price);
     }
}
