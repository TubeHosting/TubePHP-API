<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DDoSMetric
{

    private $time;

    private $pps;

    private $mbits;


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
    public function getPps(): ?int
    {
         return $this->pps;
     }

    /**
     * @return ?int
     */
    public function getMbits(): ?int
    {
         return $this->mbits;
     }

    /**
     * @param string|null $time
     * @param int|null $pps
     * @param int|null $mbits
     */
    public function __construct(?string $time, ?int $pps, ?int $mbits)
    {
        $this->time = $time;
        $this->pps = $pps;
        $this->mbits = $mbits;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'time' => $this->getTime(),
        'pps' => $this->getPps(),
        'mbits' => $this->getMbits(),
        ];
    }

    /**
     * @param object $object
     * @return DDoSMetric
     */
    public static function fromStdClass(object $object):DDoSMetric
    {

        if (isset($object->time)) {
            $time = (string) $object->time;
        }else $time = null;

        if (isset($object->pps)) {
            $pps = (int) $object->pps;
        }else $pps = null;

        if (isset($object->mbits)) {
            $mbits = (int) $object->mbits;
        }else $mbits = null;

        return new DDoSMetric($time, $pps, $mbits);
     }
}
