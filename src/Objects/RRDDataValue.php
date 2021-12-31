<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class RRDDataValue
{

    private float|null $cpu;

    private float|null $disk;

    private float|null $diskread;

    private float|null $diskwrite;

    private int|null $maxcpu;

    private int|null $maxdisk;

    private int|null $maxmem;

    private float|null $mem;

    private float|null $netin;

    private float|null $netout;

    private int|null $time;


    /**
     * @return float|null
     */
    public function getCpu(): float|null
    {
         return $this->cpu;
     }

    /**
     * @return float|null
     */
    public function getDisk(): float|null
    {
         return $this->disk;
     }

    /**
     * @return float|null
     */
    public function getDiskread(): float|null
    {
         return $this->diskread;
     }

    /**
     * @return float|null
     */
    public function getDiskwrite(): float|null
    {
         return $this->diskwrite;
     }

    /**
     * @return int|null
     */
    public function getMaxcpu(): int|null
    {
         return $this->maxcpu;
     }

    /**
     * @return int|null
     */
    public function getMaxdisk(): int|null
    {
         return $this->maxdisk;
     }

    /**
     * @return int|null
     */
    public function getMaxmem(): int|null
    {
         return $this->maxmem;
     }

    /**
     * @return float|null
     */
    public function getMem(): float|null
    {
         return $this->mem;
     }

    /**
     * @return float|null
     */
    public function getNetin(): float|null
    {
         return $this->netin;
     }

    /**
     * @return float|null
     */
    public function getNetout(): float|null
    {
         return $this->netout;
     }

    /**
     * @return int|null
     */
    public function getTime(): int|null
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
    public function __construct(float|null $cpu, float|null $disk, float|null $diskread, float|null $diskwrite, int|null $maxcpu, int|null $maxdisk, int|null $maxmem, float|null $mem, float|null $netin, float|null $netout, int|null $time)
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
    public function getAsArr()
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
        }else $cpu = $object->cpu=null;

        if (isset($object->disk)) {
            $disk = (float) $object->disk;
        }else $disk = $object->disk=null;

        if (isset($object->diskread)) {
            $diskread = (float) $object->diskread;
        }else $diskread = $object->diskread=null;

        if (isset($object->diskwrite)) {
            $diskwrite = (float) $object->diskwrite;
        }else $diskwrite = $object->diskwrite=null;

        if (isset($object->maxcpu)) {
            $maxcpu = (int) $object->maxcpu;
        }else $maxcpu = $object->maxcpu=null;

        if (isset($object->maxdisk)) {
            $maxdisk = (int) $object->maxdisk;
        }else $maxdisk = $object->maxdisk=null;

        if (isset($object->maxmem)) {
            $maxmem = (int) $object->maxmem;
        }else $maxmem = $object->maxmem=null;

        if (isset($object->mem)) {
            $mem = (float) $object->mem;
        }else $mem = $object->mem=null;

        if (isset($object->netin)) {
            $netin = (float) $object->netin;
        }else $netin = $object->netin=null;

        if (isset($object->netout)) {
            $netout = (float) $object->netout;
        }else $netout = $object->netout=null;

        if (isset($object->time)) {
            $time = (int) $object->time;
        }else $time = $object->time=null;

        return new RRDDataValue($cpu, $disk, $diskread, $diskwrite, $maxcpu, $maxdisk, $maxmem, $mem, $netin, $netout, $time);
     }
}
