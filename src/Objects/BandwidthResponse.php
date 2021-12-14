<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class BandwidthResponse
{

    private string $time;

    private int $out;

    private int $in;


    /**
     * @return string
     */
    public function getTime(): string
    {
         return $this->time;
     }

    /**
     * @return int
     */
    public function getOut(): int
    {
         return $this->out;
     }

    /**
     * @return int
     */
    public function getIn(): int
    {
         return $this->in;
     }

    /**
     * @param string $time
     * @param int $out
     * @param int $in
     */
    public function __construct(string $time, int $out, int $in)
    {
        $this->time = $time;
        $this->out = $out;
        $this->in = $in;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'time' => $this->getTime(),
        'out' => $this->getOut(),
        'in' => $this->getIn(),
        ];
    }

    /**
     * @param object $object
     * @return BandwidthResponse
     */
    public static function fromStdClass(object $object):BandwidthResponse
    {
        $time = (string) $object->time;
        $out = (int) $object->out;
        $in = (int) $object->in;

        return new BandwidthResponse($time, $out, $in);
     }
}
