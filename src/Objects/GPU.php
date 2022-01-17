<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class GPU
{

    private $id;

    private $baseClock;

    private $turboClock;

    private $brand;

    private $model;

    private $memory;

    private $memoryObject;


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
    public function getBaseClock(): ?int
    {
         return $this->baseClock;
     }

    /**
     * @return ?int
     */
    public function getTurboClock(): ?int
    {
         return $this->turboClock;
     }

    /**
     * @return ?string
     */
    public function getBrand(): ?string
    {
         return $this->brand;
     }

    /**
     * @return ?string
     */
    public function getModel(): ?string
    {
         return $this->model;
     }

    /**
     * @return ?int
     */
    public function getMemory(): ?int
    {
         return $this->memory;
     }

    /**
     * @return ?Memory
     */
    public function getMemoryObject(): ?Memory
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
    public function __construct(?int $id, ?int $baseClock, ?int $turboClock, ?string $brand, ?string $model, ?int $memory, ?Memory $memoryObject)
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
    public function getAsArr():array
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
        }else $id = null;

        if (isset($object->baseClock)) {
            $baseClock = (int) $object->baseClock;
        }else $baseClock = null;

        if (isset($object->turboClock)) {
            $turboClock = (int) $object->turboClock;
        }else $turboClock = null;

        if (isset($object->brand)) {
            $brand = (string) $object->brand;
        }else $brand = null;

        if (isset($object->model)) {
            $model = (string) $object->model;
        }else $model = null;

        if (isset($object->memory)) {
            $memory = (int) $object->memory;
        }else $memory = null;

        if (isset($object->memoryObject)) {
           $memoryObject = Memory::fromStdClass((object)$object->memoryObject);
        }else $memoryObject = null;

        return new GPU($id, $baseClock, $turboClock, $brand, $model, $memory, $memoryObject);
     }
}
