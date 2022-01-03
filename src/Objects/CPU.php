<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class CPU
{

    private $id;

    private $coreCount;

    private $threadsPerCore;

    private $baseClock;

    private $turboClock;

    private $model;

    private $brand;


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
    public function getCoreCount(): ?int
    {
         return $this->coreCount;
     }

    /**
     * @return ?int
     */
    public function getThreadsPerCore(): ?int
    {
         return $this->threadsPerCore;
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
    public function getModel(): ?string
    {
         return $this->model;
     }

    /**
     * @return ?string
     */
    public function getBrand(): ?string
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
    public function __construct(?int $id, ?int $coreCount, ?int $threadsPerCore, ?int $baseClock, ?int $turboClock, ?string $model, ?string $brand)
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
    public function getAsArr():array
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
