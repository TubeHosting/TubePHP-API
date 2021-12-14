<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class GPU
{

    private int $id;

    private int $baseClock;

    private int $turboClock;

    private string $brand;

    private string $model;

    private int $memory;

    private Memory $memoryObject;


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
    public function getBaseClock(): int
    {
         return $this->baseClock;
     }

    /**
     * @return int
     */
    public function getTurboClock(): int
    {
         return $this->turboClock;
     }

    /**
     * @return string
     */
    public function getBrand(): string
    {
         return $this->brand;
     }

    /**
     * @return string
     */
    public function getModel(): string
    {
         return $this->model;
     }

    /**
     * @return int
     */
    public function getMemory(): int
    {
         return $this->memory;
     }

    /**
     * @return Memory
     */
    public function getMemoryObject(): Memory
    {
         return $this->memoryObject;
     }

    /**
     * @param int $id
     * @param int $baseClock
     * @param int $turboClock
     * @param string $brand
     * @param string $model
     * @param int $memory
     * @param Memory $memoryObject
     */
    public function __construct(int $id, int $baseClock, int $turboClock, string $brand, string $model, int $memory, Memory $memoryObject)
    {
        $this->id = $id;
        $this->baseClock = $baseClock;
        $this->turboClock = $turboClock;
        $this->brand = $brand;
        $this->model = $model;
        $this->memory = $memory;
        $this->memoryObject = $memoryObject;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'id' => $this->getId(),
        'baseClock' => $this->getBaseClock(),
        'turboClock' => $this->getTurboClock(),
        'brand' => $this->getBrand(),
        'model' => $this->getModel(),
        'memory' => $this->getMemory(),
        'memoryObject' => $this->getMemoryObject(),
        ];
    }

    /**
     * @param object $object
     * @return GPU
     */
    public static function fromStdClass(object $object):GPU
    {
        $id = (int) $object->id;
        $baseClock = (int) $object->baseClock;
        $turboClock = (int) $object->turboClock;
        $brand = (string) $object->brand;
        $model = (string) $object->model;
        $memory = (int) $object->memory;
        $memoryObject = Memory::fromStdClass((object)$object->memoryObject);

        return new GPU($id, $baseClock, $turboClock, $brand, $model, $memory, $memoryObject);
     }
}
