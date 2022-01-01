<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class CPU
{

    private int|null $id;

    private int|null $coreCount;

    private int|null $threadsPerCore;

    private int|null $baseClock;

    private int|null $turboClock;

    private string|null $model;

    private string|null $brand;


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
    public function getCoreCount(): int|null
    {
         return $this->coreCount;
     }

    /**
     * @return int|null
     */
    public function getThreadsPerCore(): int|null
    {
         return $this->threadsPerCore;
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
    public function getModel(): string|null
    {
         return $this->model;
     }

    /**
     * @return string|null
     */
    public function getBrand(): string|null
    {
         return $this->brand;
     }

    /**
     * @param int|null $id
     * @param int|null $coreCount
     * @param int|null $threadsPerCore
     * @param int|null $baseClock
     * @param int|null $turboClock
     * @param string|null $model
     * @param string|null $brand
     */
    public function __construct(int|null $id, int|null $coreCount, int|null $threadsPerCore, int|null $baseClock, int|null $turboClock, string|null $model, string|null $brand)
    {
        $this->id = $id;
        $this->coreCount = $coreCount;
        $this->threadsPerCore = $threadsPerCore;
        $this->baseClock = $baseClock;
        $this->turboClock = $turboClock;
        $this->model = $model;
        $this->brand = $brand;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'id' => $this->getId(),
        'coreCount' => $this->getCoreCount(),
        'threadsPerCore' => $this->getThreadsPerCore(),
        'baseClock' => $this->getBaseClock(),
        'turboClock' => $this->getTurboClock(),
        'model' => $this->getModel(),
        'brand' => $this->getBrand(),
        ];
    }

    /**
     * @param object $object
     * @return CPU
     */
    public static function fromStdClass(object $object):CPU
    {

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->coreCount)) {
            $coreCount = (int) $object->coreCount;
        }else $coreCount = $object->coreCount=null;

        if (isset($object->threadsPerCore)) {
            $threadsPerCore = (int) $object->threadsPerCore;
        }else $threadsPerCore = $object->threadsPerCore=null;

        if (isset($object->baseClock)) {
            $baseClock = (int) $object->baseClock;
        }else $baseClock = $object->baseClock=null;

        if (isset($object->turboClock)) {
            $turboClock = (int) $object->turboClock;
        }else $turboClock = $object->turboClock=null;

        if (isset($object->model)) {
            $model = (string) $object->model;
        }else $model = $object->model=null;

        if (isset($object->brand)) {
            $brand = (string) $object->brand;
        }else $brand = $object->brand=null;

        return new CPU($id, $coreCount, $threadsPerCore, $baseClock, $turboClock, $model, $brand);
     }
}
