<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class Disk
{

    private $id;

    private $space;

    private $type;

    private $brand;

    private $name;


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
    public function getSpace(): ?int
    {
         return $this->space;
     }

    /**
     * @return ?string
     */
    public function getType(): ?string
    {
         return $this->type;
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
    public function getName(): ?string
    {
         return $this->name;
     }

    /**
     * @param int|null $id
     * @param int|null $space
     * @param string|null $type
     * @param string|null $brand
     * @param string|null $name
     */
    public function __construct(?int $id, ?int $space, ?string $type, ?string $brand, ?string $name)
    {
        $this->id = $id;
        $this->space = $space;
        $this->type = $type;
        $this->brand = $brand;
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'id' => $this->getId(),
        'space' => $this->getSpace(),
        'type' => $this->getType(),
        'brand' => $this->getBrand(),
        'name' => $this->getName(),
        ];
    }

    /**
     * @param object $object
     * @return Disk
     */
    public static function fromStdClass(object $object):Disk
    {

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = null;

        if (isset($object->space)) {
            $space = (int) $object->space;
        }else $space = null;

        if (isset($object->type)) {
            $type = (string) $object->type;
        }else $type = null;

        if (isset($object->brand)) {
            $brand = (string) $object->brand;
        }else $brand = null;

        if (isset($object->name)) {
            $name = (string) $object->name;
        }else $name = null;

        return new Disk($id, $space, $type, $brand, $name);
     }
}
