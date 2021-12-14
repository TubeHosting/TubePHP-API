<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class ServerPosition
{

    private int $id;

    private string $hall;

    private string $room;

    private int $rack;

    private int $position;

    private int $height;


    /**
     * @return int
     */
    public function getId(): int
    {
         return $this->id;
     }

    /**
     * @return string
     */
    public function getHall(): string
    {
         return $this->hall;
     }

    /**
     * @return string
     */
    public function getRoom(): string
    {
         return $this->room;
     }

    /**
     * @return int
     */
    public function getRack(): int
    {
         return $this->rack;
     }

    /**
     * @return int
     */
    public function getPosition(): int
    {
         return $this->position;
     }

    /**
     * @return int
     */
    public function getHeight(): int
    {
         return $this->height;
     }

    /**
     * @param int $id
     * @param string $hall
     * @param string $room
     * @param int $rack
     * @param int $position
     * @param int $height
     */
    public function __construct(int $id, string $hall, string $room, int $rack, int $position, int $height)
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
        $id = (int) $object->id;
        $hall = (string) $object->hall;
        $room = (string) $object->room;
        $rack = (int) $object->rack;
        $position = (int) $object->position;
        $height = (int) $object->height;

        return new ServerPosition($id, $hall, $room, $rack, $position, $height);
     }
}
