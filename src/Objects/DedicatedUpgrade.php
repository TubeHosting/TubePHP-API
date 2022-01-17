<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DedicatedUpgrade
{

    private $id;

    private $price;

    private $type;


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
    public function getPrice(): ?int
    {
         return $this->price;
     }

    /**
     * @return ?string
     */
    public function getType(): ?string
    {
         return $this->type;
     }

    /**
     * @param int|null $id
     * @param int|null $price
     * @param string|null $type
     */
    public function __construct(?int $id, ?int $price, ?string $type)
    {
        $this->id = $id;
        $this->price = $price;
        $this->type = $type;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'id' => $this->getId(),
        'price' => $this->getPrice(),
        'type' => $this->getType(),
        ];
    }

    /**
     * @param object $object
     * @return DedicatedUpgrade
     */
    public static function fromStdClass(object $object):DedicatedUpgrade
    {

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = null;

        if (isset($object->price)) {
            $price = (int) $object->price;
        }else $price = null;

        if (isset($object->type)) {
            $type = (string) $object->type;
        }else $type = null;

        return new DedicatedUpgrade($id, $price, $type);
     }
}
