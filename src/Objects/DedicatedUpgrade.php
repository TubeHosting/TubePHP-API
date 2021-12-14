<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class DedicatedUpgrade
{

    private int $id;

    private int $gpuCount;

    private int $memory;

    private string $memoryType;

    private int $cpuCount;

    private CPU $cpu;

    private GPU $gpu;

    private array $addedDisks;

    private array $removedDisks;

    private int $price;


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
    public function getGpuCount(): int
    {
         return $this->gpuCount;
     }

    /**
     * @return int
     */
    public function getMemory(): int
    {
         return $this->memory;
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
    public function getCpuCount(): int
    {
         return $this->cpuCount;
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
     * @return array
     */
    public function getAddedDisks(): array
    {
         return $this->addedDisks;
     }

    /**
     * @return array
     */
    public function getRemovedDisks(): array
    {
         return $this->removedDisks;
     }

    /**
     * @return int
     */
    public function getPrice(): int
    {
         return $this->price;
     }

    /**
     * @param int $id
     * @param int $gpuCount
     * @param int $memory
     * @param string $memoryType
     * @param int $cpuCount
     * @param CPU $cpu
     * @param GPU $gpu
     * @param array $addedDisks
     * @param array $removedDisks
     * @param int $price
     */
    public function __construct(int $id, int $gpuCount, int $memory, string $memoryType, int $cpuCount, CPU $cpu, GPU $gpu, array $addedDisks, array $removedDisks, int $price)
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
        $id = (int) $object->id;
        $gpuCount = (int) $object->gpuCount;
        $memory = (int) $object->memory;
        $memoryType = (string) $object->memoryType;
        $cpuCount = (int) $object->cpuCount;
        $cpu = CPU::fromStdClass((object)$object->cpu);
        $gpu = GPU::fromStdClass((object)$object->gpu);
        $addedDisks = (array) $object->addedDisks;
        $removedDisks = (array) $object->removedDisks;
        $price = (int) $object->price;

        return new DedicatedUpgrade($id, $gpuCount, $memory, $memoryType, $cpuCount, $cpu, $gpu, $addedDisks, $removedDisks, $price);
     }
}
