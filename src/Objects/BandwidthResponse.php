<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class BandwidthResponse
{

    private $time;

    private $out;

    private $in;


    /**
     * @return ?string
     */
    public function getTime(): ?string
    {
         return $this->time;
     }

    /**
     * @return ?int
     */
    public function getOut(): ?int
    {
         return $this->out;
     }

    /**
     * @return ?int
     */
    public function getIn(): ?int
    {
         return $this->in;
     }

    /**
     * @param string|null $time
     * @param int|null $out
     * @param int|null $in
     */
    public function __construct(?string $time, ?int $out, ?int $in)
    {
        $this->time = $time;
        $this->out = $out;
        $this->in = $in;
    }

    /**
     * @return array
     */
    public function getAsArr():array
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
        }else $time = null;

        if (isset($object->out)) {
            $out = (int) $object->out;
        }else $out = null;

        if (isset($object->in)) {
            $in = (int) $object->in;
        }else $in = null;

        return new BandwidthResponse($time, $out, $in);
     }
}
