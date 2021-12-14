<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class RRDDataValue
{

    private float $cpu;

    private float $disk;

    private float $diskread;

    private float $diskwrite;

    private int $maxcpu;

    private int $maxdisk;

    private int $maxmem;

    private float $mem;

    private float $netin;

    private float $netout;

    private int $time;


    /**
     * @return float
     */
    public function getCpu(): float
    {
         return $this->cpu;
     }

    /**
     * @return float
     */
    public function getDisk(): float
    {
         return $this->disk;
     }

    /**
     * @return float
     */
    public function getDiskread(): float
    {
         return $this->diskread;
     }

    /**
     * @return float
     */
    public function getDiskwrite(): float
    {
         return $this->diskwrite;
     }

    /**
     * @return int
     */
    public function getMaxcpu(): int
    {
         return $this->maxcpu;
     }

    /**
     * @return int
     */
    public function getMaxdisk(): int
    {
         return $this->maxdisk;
     }

    /**
     * @return int
     */
    public function getMaxmem(): int
    {
         return $this->maxmem;
     }

    /**
     * @return float
     */
    public function getMem(): float
    {
         return $this->mem;
     }

    /**
     * @return float
     */
    public function getNetin(): float
    {
         return $this->netin;
     }

    /**
     * @return float
     */
    public function getNetout(): float
    {
         return $this->netout;
     }

    /**
     * @return int
     */
    public function getTime(): int
    {
         return $this->time;
     }

    /**
     * @param float $cpu
     * @param float $disk
     * @param float $diskread
     * @param float $diskwrite
     * @param int $maxcpu
     * @param int $maxdisk
     * @param int $maxmem
     * @param float $mem
     * @param float $netin
     * @param float $netout
     * @param int $time
     */
    public function __construct(float $cpu, float $disk, float $diskread, float $diskwrite, int $maxcpu, int $maxdisk, int $maxmem, float $mem, float $netin, float $netout, int $time)
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
        $cpu = (float) $object->cpu;
        $disk = (float) $object->disk;
        $diskread = (float) $object->diskread;
        $diskwrite = (float) $object->diskwrite;
        $maxcpu = (int) $object->maxcpu;
        $maxdisk = (int) $object->maxdisk;
        $maxmem = (int) $object->maxmem;
        $mem = (float) $object->mem;
        $netin = (float) $object->netin;
        $netout = (float) $object->netout;
        $time = (int) $object->time;

        return new RRDDataValue($cpu, $disk, $diskread, $diskwrite, $maxcpu, $maxdisk, $maxmem, $mem, $netin, $netout, $time);
     }
}
