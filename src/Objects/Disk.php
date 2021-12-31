<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class Disk
{

    private int|null $id;

    private int|null $space;

    private string|null $type;

    private string|null $brand;

    private string|null $name;


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
    public function getSpace(): int|null
    {
         return $this->space;
     }

    /**
     * @return string|null
     */
    public function getType(): string|null
    {
         return $this->type;
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
    public function getName(): string|null
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
    public function __construct(int|null $id, int|null $space, string|null $type, string|null $brand, string|null $name)
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
    public function getAsArr()
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
        }else $id = $object->id=null;

        if (isset($object->space)) {
            $space = (int) $object->space;
        }else $space = $object->space=null;

        if (isset($object->type)) {
            $type = (string) $object->type;
        }else $type = $object->type=null;

        if (isset($object->brand)) {
            $brand = (string) $object->brand;
        }else $brand = $object->brand=null;

        if (isset($object->name)) {
            $name = (string) $object->name;
        }else $name = $object->name=null;

        return new Disk($id, $space, $type, $brand, $name);
     }
}
