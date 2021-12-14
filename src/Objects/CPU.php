<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class CPU
{

    private int $id;

    private int $coreCount;

    private int $threadsPerCore;

    private int $baseClock;

    private int $turboClock;

    private string $model;

    private string $brand;


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
    public function getCoreCount(): int
    {
         return $this->coreCount;
     }

    /**
     * @return int
     */
    public function getThreadsPerCore(): int
    {
         return $this->threadsPerCore;
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
    public function getModel(): string
    {
         return $this->model;
     }

    /**
     * @return string
     */
    public function getBrand(): string
    {
         return $this->brand;
     }

    /**
     * @param int $id
     * @param int $coreCount
     * @param int $threadsPerCore
     * @param int $baseClock
     * @param int $turboClock
     * @param string $model
     * @param string $brand
     */
    public function __construct(int $id, int $coreCount, int $threadsPerCore, int $baseClock, int $turboClock, string $model, string $brand)
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
        $id = (int) $object->id;
        $coreCount = (int) $object->coreCount;
        $threadsPerCore = (int) $object->threadsPerCore;
        $baseClock = (int) $object->baseClock;
        $turboClock = (int) $object->turboClock;
        $model = (string) $object->model;
        $brand = (string) $object->brand;

        return new CPU($id, $coreCount, $threadsPerCore, $baseClock, $turboClock, $model, $brand);
     }
}
