<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class Memory
{

    private int|null $B;


    /**
     * @return int|null
     */
    public function getB(): int|null
    {
         return $this->B;
     }

    /**
     * @param int|null $B
     */
    public function __construct(int|null $B)
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

        if (isset($object->B)) {
            $B = (int) $object->B;
        }else $B = $object->B=null;

        return new Memory($B);
     }
}
