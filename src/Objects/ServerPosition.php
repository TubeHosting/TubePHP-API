<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class ServerPosition
{

    private int|null $id;

    private string|null $hall;

    private string|null $room;

    private int|null $rack;

    private int|null $position;

    private int|null $height;


    /**
     * @return int|null
     */
    public function getId(): int|null
    {
         return $this->id;
     }

    /**
     * @return string|null
     */
    public function getHall(): string|null
    {
         return $this->hall;
     }

    /**
     * @return string|null
     */
    public function getRoom(): string|null
    {
         return $this->room;
     }

    /**
     * @return int|null
     */
    public function getRack(): int|null
    {
         return $this->rack;
     }

    /**
     * @return int|null
     */
    public function getPosition(): int|null
    {
         return $this->position;
     }

    /**
     * @return int|null
     */
    public function getHeight(): int|null
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
    public function __construct(int|null $id, string|null $hall, string|null $room, int|null $rack, int|null $position, int|null $height)
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
    public function getAsArr()
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
