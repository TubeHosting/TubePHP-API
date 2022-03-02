<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DedicatedCPUUpgrade
{

    private $price;

    private $cpuCount;

    private $cpu;


    /**
     * @return ?int
     */
    public function getPrice(): ?int
    {
         return $this->price;
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
     * @param int|null $price
     * @param int|null $cpuCount
     * @param CPU|null $cpu
     */
    public function __construct(?int $price, ?int $cpuCount, ?CPU $cpu)
    {
        $this->price = $price;
        $this->cpuCount = $cpuCount;
        $this->cpu = $cpu;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'price' => $this->getPrice(),
        'cpuCount' => $this->getCpuCount(),
        'cpu' => $this->getCpu(),
        ];
    }

    /**
     * @param object $object
     * @return DedicatedCPUUpgrade
     */
    public static function fromStdClass(object $object):DedicatedCPUUpgrade
    {

        if (isset($object->price)) {
            $price = (int) $object->price;
        }else $price = null;

        if (isset($object->cpuCount)) {
            $cpuCount = (int) $object->cpuCount;
        }else $cpuCount = null;

        if (isset($object->cpu)) {
           $cpu = CPU::fromStdClass((object)$object->cpu);
        }else $cpu = null;

        return new DedicatedCPUUpgrade($price, $cpuCount, $cpu);
     }
}
