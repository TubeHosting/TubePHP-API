<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class ServerPosition
{

    private $id;

    private $hall;

    private $room;

    private $rack;

    private $position;

    private $height;


    /**
     * @return ?int
     */
    public function getId(): ?int
    {
         return $this->id;
     }

    /**
     * @return ?string
     */
    public function getHall(): ?string
    {
         return $this->hall;
     }

    /**
     * @return ?string
     */
    public function getRoom(): ?string
    {
         return $this->room;
     }

    /**
     * @return ?int
     */
    public function getRack(): ?int
    {
         return $this->rack;
     }

    /**
     * @return ?int
     */
    public function getPosition(): ?int
    {
         return $this->position;
     }

    /**
     * @return ?int
     */
    public function getHeight(): ?int
    {
         return $this->height;
     }

    /**
     * @param int|null $id
     * @param string|null $hall
     * @param string|null $room
     * @param int|null $rack
     * @param int|null $position
     * @param int|null $height
     */
    public function __construct(?int $id, ?string $hall, ?string $room, ?int $rack, ?int $position, ?int $height)
    {
        $this->id = $id;
        $this->hall = $hall;
        $this->room = $room;
        $this->rack = $rack;
        $this->position = $position;
        $this->height = $height;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'id' => $this->getId(),
        'hall' => $this->getHall(),
        'room' => $this->getRoom(),
        'rack' => $this->getRack(),
        'position' => $this->getPosition(),
        'height' => $this->getHeight(),
        ];
    }

    /**
     * @param object $object
     * @return ServerPosition
     */
    public static function fromStdClass(object $object):ServerPosition
    {

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->hall)) {
            $hall = (string) $object->hall;
        }else $hall = $object->hall=null;

        if (isset($object->room)) {
            $room = (string) $object->room;
        }else $room = $object->room=null;

        if (isset($object->rack)) {
            $rack = (int) $object->rack;
        }else $rack = $object->rack=null;

        if (isset($object->position)) {
            $position = (int) $object->position;
        }else $position = $object->position=null;

        if (isset($object->height)) {
            $height = (int) $object->height;
        }else $height = $object->height=null;

        return new ServerPosition($id, $hall, $room, $rack, $position, $height);
     }
}
