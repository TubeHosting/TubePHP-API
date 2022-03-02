<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DedicatedMemoryUpgrade
{

    private $price;

    private $memory;

    private $memoryType;


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
    public function getMemory(): ?int
    {
         return $this->memory;
     }

    /**
     * @return ?string
     */
    public function getMemoryType(): ?string
    {
         return $this->memoryType;
     }

    /**
     * @param int|null $price
     * @param int|null $memory
     * @param string|null $memoryType
     */
    public function __construct(?int $price, ?int $memory, ?string $memoryType)
    {
        $this->price = $price;
        $this->memory = $memory;
        $this->memoryType = $memoryType;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'price' => $this->getPrice(),
        'memory' => $this->getMemory(),
        'memoryType' => $this->getMemoryType(),
        ];
    }

    /**
     * @param object $object
     * @return DedicatedMemoryUpgrade
     */
    public static function fromStdClass(object $object):DedicatedMemoryUpgrade
    {

        if (isset($object->price)) {
            $price = (int) $object->price;
        }else $price = null;

        if (isset($object->memory)) {
            $memory = (int) $object->memory;
        }else $memory = null;

        if (isset($object->memoryType)) {
            $memoryType = (string) $object->memoryType;
        }else $memoryType = null;

        return new DedicatedMemoryUpgrade($price, $memory, $memoryType);
     }
}
