<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class Memory
{

    private int $B;


    /**
     * @return int
     */
    public function getB(): int
    {
         return $this->B;
     }

    /**
     * @param int $B
     */
    public function __construct(int $B)
    {
        $this->B = $B;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'B' => $this->getB(),
        ];
    }

    /**
     * @param object $object
     * @return Memory
     */
    public static function fromStdClass(object $object):Memory
    {
        $B = (int) $object->B;

        return new Memory($B);
     }
}
