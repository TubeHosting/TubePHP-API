<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DedicatedUpgrade
{

    private int|null $id;

    private int|null $gpuCount;

    private int|null $memory;

    private string|null $memoryType;

    private int|null $cpuCount;

    private CPU|null $cpu;

    private GPU|null $gpu;

    private array|null $addedDisks;

    private array|null $removedDisks;

    private int|null $price;


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
    public function getGpuCount(): int|null
    {
         return $this->gpuCount;
     }

    /**
     * @return int|null
     */
    public function getMemory(): int|null
    {
         return $this->memory;
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
    public function getCpuCount(): int|null
    {
         return $this->cpuCount;
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
     * @return array|null
     */
    public function getAddedDisks(): array|null
    {
         return $this->addedDisks;
     }

    /**
     * @return array|null
     */
    public function getRemovedDisks(): array|null
    {
         return $this->removedDisks;
     }

    /**
     * @return int|null
     */
    public function getPrice(): int|null
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
    public function __construct(int|null $id, int|null $gpuCount, int|null $memory, string|null $memoryType, int|null $cpuCount, CPU|null $cpu, GPU|null $gpu, array|null $addedDisks, array|null $removedDisks, int|null $price)
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
        foreach ($tmpAddedDisks as $key => $item) {
            $item = PaymentBundle::fromStdClass($item);
            $singleItem = array($key => $item);
            $addedDisks = array_merge($addedDisks, $singleItem);
        }
        $this->addedDisks = $addedDisks;

        //handle objects in array
        $tmpRemovedDisks = $removedDisks;
        $removedDisks = [];
        foreach ($tmpRemovedDisks as $key => $item) {
            $item = PaymentBundle::fromStdClass($item);
            $singleItem = array($key => $item);
            $removedDisks = array_merge($removedDisks, $singleItem);
        }
        $this->removedDisks = $removedDisks;
        $this->price = $price;
    }

    /**
     * @return array
     */
    public function getAsArr()
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
        }else $id = $object->id=null;

        if (isset($object->gpuCount)) {
            $gpuCount = (int) $object->gpuCount;
        }else $gpuCount = $object->gpuCount=null;

        if (isset($object->memory)) {
            $memory = (int) $object->memory;
        }else $memory = $object->memory=null;

        if (isset($object->memoryType)) {
            $memoryType = (string) $object->memoryType;
        }else $memoryType = $object->memoryType=null;

        if (isset($object->cpuCount)) {
            $cpuCount = (int) $object->cpuCount;
        }else $cpuCount = $object->cpuCount=null;

        if (isset($object->cpu)) {
           $cpu = CPU::fromStdClass((object)$object->cpu);
        }else $cpu = $object->cpu=null;

        if (isset($object->gpu)) {
           $gpu = GPU::fromStdClass((object)$object->gpu);
        }else $gpu = $object->gpu=null;

        if (isset($object->addedDisks)) {
            $addedDisks = (array) $object->addedDisks;
        }else $addedDisks = $object->addedDisks=null;

        if (isset($object->removedDisks)) {
            $removedDisks = (array) $object->removedDisks;
        }else $removedDisks = $object->removedDisks=null;

        if (isset($object->price)) {
            $price = (int) $object->price;
        }else $price = $object->price=null;

        return new DedicatedUpgrade($id, $gpuCount, $memory, $memoryType, $cpuCount, $cpu, $gpu, $addedDisks, $removedDisks, $price);
     }
}
