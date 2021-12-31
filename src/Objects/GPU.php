<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class GPU
{

    private int|null $id;

    private int|null $baseClock;

    private int|null $turboClock;

    private string|null $brand;

    private string|null $model;

    private int|null $memory;

    private Memory|null $memoryObject;


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
    public function getBaseClock(): int|null
    {
         return $this->baseClock;
     }

    /**
     * @return int|null
     */
    public function getTurboClock(): int|null
    {
         return $this->turboClock;
     }

    /**
     * @return string|null
     */
    public function getBrand(): string|null
    {
         return $this->brand;
     }

    /**
     * @return string|null
     */
    public function getModel(): string|null
    {
         return $this->model;
     }

    /**
     * @return int|null
     */
    public function getMemory(): int|null
    {
         return $this->memory;
     }

    /**
     * @return Memory|null
     */
    public function getMemoryObject(): Memory|null
    {
         return $this->memoryObject;
     }

    /**
     * @param int|null $id
     * @param int|null $baseClock
     * @param int|null $turboClock
     * @param string|null $brand
     * @param string|null $model
     * @param int|null $memory
     * @param Memory|null $memoryObject
     */
    public function __construct(int|null $id, int|null $baseClock, int|null $turboClock, string|null $brand, string|null $model, int|null $memory, Memory|null $memoryObject)
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

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->baseClock)) {
            $baseClock = (int) $object->baseClock;
        }else $baseClock = $object->baseClock=null;

        if (isset($object->turboClock)) {
            $turboClock = (int) $object->turboClock;
        }else $turboClock = $object->turboClock=null;

        if (isset($object->brand)) {
            $brand = (string) $object->brand;
        }else $brand = $object->brand=null;

        if (isset($object->model)) {
            $model = (string) $object->model;
        }else $model = $object->model=null;

        if (isset($object->memory)) {
            $memory = (int) $object->memory;
        }else $memory = $object->memory=null;

        if (isset($object->memoryObject)) {
           $memoryObject = Memory::fromStdClass((object)$object->memoryObject);
        }else $memoryObject = $object->memoryObject=null;

        return new GPU($id, $baseClock, $turboClock, $brand, $model, $memory, $memoryObject);
     }
}
