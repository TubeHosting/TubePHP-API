<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class Memory
{

    private $B;


    /**
     * @return ?int
     */
    public function getB(): ?int
    {
         return $this->B;
     }

    /**
     * @param int|null $B
     */
    public function __construct(?int $B)
    {
        $this->B = $B;
    }

    /**
     * @return array
     */
    public function getAsArr():array
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
        }else $B = null;

        return new Memory($B);
     }
}
