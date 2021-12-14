<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class Disk
{

    private int $id;

    private int $space;

    private string $type;

    private string $brand;

    private string $name;


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
    public function getSpace(): int
    {
         return $this->space;
     }

    /**
     * @return string
     */
    public function getType(): string
    {
         return $this->type;
     }

    /**
     * @return string
     */
    public function getBrand(): string
    {
         return $this->brand;
     }

    /**
     * @return string
     */
    public function getName(): string
    {
         return $this->name;
     }

    /**
     * @param int $id
     * @param int $space
     * @param string $type
     * @param string $brand
     * @param string $name
     */
    public function __construct(int $id, int $space, string $type, string $brand, string $name)
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
        $id = (int) $object->id;
        $space = (int) $object->space;
        $type = (string) $object->type;
        $brand = (string) $object->brand;
        $name = (string) $object->name;

        return new Disk($id, $space, $type, $brand, $name);
     }
}
