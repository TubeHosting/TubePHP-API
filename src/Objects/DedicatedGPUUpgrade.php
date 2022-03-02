<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DedicatedGPUUpgrade
{

    private $price;

    private $gpuCount;

    private $gpu;


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
    public function getGpuCount(): ?int
    {
         return $this->gpuCount;
     }

    /**
     * @return ?GPU
     */
    public function getGpu(): ?GPU
    {
         return $this->gpu;
     }

    /**
     * @param int|null $price
     * @param int|null $gpuCount
     * @param GPU|null $gpu
     */
    public function __construct(?int $price, ?int $gpuCount, ?GPU $gpu)
    {
        $this->price = $price;
        $this->gpuCount = $gpuCount;
        $this->gpu = $gpu;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'price' => $this->getPrice(),
        'gpuCount' => $this->getGpuCount(),
        'gpu' => $this->getGpu(),
        ];
    }

    /**
     * @param object $object
     * @return DedicatedGPUUpgrade
     */
    public static function fromStdClass(object $object):DedicatedGPUUpgrade
    {

        if (isset($object->price)) {
            $price = (int) $object->price;
        }else $price = null;

        if (isset($object->gpuCount)) {
            $gpuCount = (int) $object->gpuCount;
        }else $gpuCount = null;

        if (isset($object->gpu)) {
           $gpu = GPU::fromStdClass((object)$object->gpu);
        }else $gpu = null;

        return new DedicatedGPUUpgrade($price, $gpuCount, $gpu);
     }
}
