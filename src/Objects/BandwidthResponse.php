<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class BandwidthResponse
{

    private string|null $time;

    private int|null $out;

    private int|null $in;


    /**
     * @return string|null
     */
    public function getTime(): string|null
    {
         return $this->time;
     }

    /**
     * @return int|null
     */
    public function getOut(): int|null
    {
         return $this->out;
     }

    /**
     * @return int|null
     */
    public function getIn(): int|null
    {
         return $this->in;
     }

    /**
     * @param string|null $time
     * @param int|null $out
     * @param int|null $in
     */
    public function __construct(string|null $time, int|null $out, int|null $in)
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

        if (isset($object->time)) {
            $time = (string) $object->time;
        }else $time = $object->time=null;

        if (isset($object->out)) {
            $out = (int) $object->out;
        }else $out = $object->out=null;

        if (isset($object->in)) {
            $in = (int) $object->in;
        }else $in = $object->in=null;

        return new BandwidthResponse($time, $out, $in);
     }
}
