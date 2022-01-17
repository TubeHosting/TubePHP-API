<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class RRDDataValue
{

    private $cpu;

    private $disk;

    private $diskread;

    private $diskwrite;

    private $maxcpu;

    private $maxdisk;

    private $maxmem;

    private $mem;

    private $netin;

    private $netout;

    private $time;


    /**
     * @return ?float
     */
    public function getCpu(): ?float
    {
         return $this->cpu;
     }

    /**
     * @return ?float
     */
    public function getDisk(): ?float
    {
         return $this->disk;
     }

    /**
     * @return ?float
     */
    public function getDiskread(): ?float
    {
         return $this->diskread;
     }

    /**
     * @return ?float
     */
    public function getDiskwrite(): ?float
    {
         return $this->diskwrite;
     }

    /**
     * @return ?int
     */
    public function getMaxcpu(): ?int
    {
         return $this->maxcpu;
     }

    /**
     * @return ?int
     */
    public function getMaxdisk(): ?int
    {
         return $this->maxdisk;
     }

    /**
     * @return ?int
     */
    public function getMaxmem(): ?int
    {
         return $this->maxmem;
     }

    /**
     * @return ?float
     */
    public function getMem(): ?float
    {
         return $this->mem;
     }

    /**
     * @return ?float
     */
    public function getNetin(): ?float
    {
         return $this->netin;
     }

    /**
     * @return ?float
     */
    public function getNetout(): ?float
    {
         return $this->netout;
     }

    /**
     * @return ?int
     */
    public function getTime(): ?int
    {
         return $this->time;
     }

    /**
     * @param float|null $cpu
     * @param float|null $disk
     * @param float|null $diskread
     * @param float|null $diskwrite
     * @param int|null $maxcpu
     * @param int|null $maxdisk
     * @param int|null $maxmem
     * @param float|null $mem
     * @param float|null $netin
     * @param float|null $netout
     * @param int|null $time
     */
    public function __construct(?float $cpu, ?float $disk, ?float $diskread, ?float $diskwrite, ?int $maxcpu, ?int $maxdisk, ?int $maxmem, ?float $mem, ?float $netin, ?float $netout, ?int $time)
    {
        $this->cpu = $cpu;
        $this->disk = $disk;
        $this->diskread = $diskread;
        $this->diskwrite = $diskwrite;
        $this->maxcpu = $maxcpu;
        $this->maxdisk = $maxdisk;
        $this->maxmem = $maxmem;
        $this->mem = $mem;
        $this->netin = $netin;
        $this->netout = $netout;
        $this->time = $time;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'cpu' => $this->getCpu(),
        'disk' => $this->getDisk(),
        'diskread' => $this->getDiskread(),
        'diskwrite' => $this->getDiskwrite(),
        'maxcpu' => $this->getMaxcpu(),
        'maxdisk' => $this->getMaxdisk(),
        'maxmem' => $this->getMaxmem(),
        'mem' => $this->getMem(),
        'netin' => $this->getNetin(),
        'netout' => $this->getNetout(),
        'time' => $this->getTime(),
        ];
    }

    /**
     * @param object $object
     * @return RRDDataValue
     */
    public static function fromStdClass(object $object):RRDDataValue
    {

        if (isset($object->cpu)) {
            $cpu = (float) $object->cpu;
        }else $cpu = null;

        if (isset($object->disk)) {
            $disk = (float) $object->disk;
        }else $disk = null;

        if (isset($object->diskread)) {
            $diskread = (float) $object->diskread;
        }else $diskread = null;

        if (isset($object->diskwrite)) {
            $diskwrite = (float) $object->diskwrite;
        }else $diskwrite = null;

        if (isset($object->maxcpu)) {
            $maxcpu = (int) $object->maxcpu;
        }else $maxcpu = null;

        if (isset($object->maxdisk)) {
            $maxdisk = (int) $object->maxdisk;
        }else $maxdisk = null;

        if (isset($object->maxmem)) {
            $maxmem = (int) $object->maxmem;
        }else $maxmem = null;

        if (isset($object->mem)) {
            $mem = (float) $object->mem;
        }else $mem = null;

        if (isset($object->netin)) {
            $netin = (float) $object->netin;
        }else $netin = null;

        if (isset($object->netout)) {
            $netout = (float) $object->netout;
        }else $netout = null;

        if (isset($object->time)) {
            $time = (int) $object->time;
        }else $time = null;

        return new RRDDataValue($cpu, $disk, $diskread, $diskwrite, $maxcpu, $maxdisk, $maxmem, $mem, $netin, $netout, $time);
     }
}
