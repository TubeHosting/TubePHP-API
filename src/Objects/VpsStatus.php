<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class VpsStatus
{

    private string|null $status;

    private string|null $name;

    private int|null $uptime;

    private float|null $cpu;

    private float|null $diskread;

    private float|null $diskwrite;

    private int|null $cpus;

    private float|null $disk;

    private int|null $maxdisk;

    private int|null $maxmem;

    private float|null $mem;

    private float|null $netin;

    private float|null $netout;


    /**
     * @return string|null
     */
    public function getStatus(): string|null
    {
         return $this->status;
     }

    /**
     * @return string|null
     */
    public function getName(): string|null
    {
         return $this->name;
     }

    /**
     * @return int|null
     */
    public function getUptime(): int|null
    {
         return $this->uptime;
     }

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
    public function getCpus(): int|null
    {
         return $this->cpus;
     }

    /**
     * @return float|null
     */
    public function getDisk(): float|null
    {
         return $this->disk;
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
     * @param string|null $status
     * @param string|null $name
     * @param int|null $uptime
     * @param float|null $cpu
     * @param float|null $diskread
     * @param float|null $diskwrite
     * @param int|null $cpus
     * @param float|null $disk
     * @param int|null $maxdisk
     * @param int|null $maxmem
     * @param float|null $mem
     * @param float|null $netin
     * @param float|null $netout
     */
    public function __construct(string|null $status, string|null $name, int|null $uptime, float|null $cpu, float|null $diskread, float|null $diskwrite, int|null $cpus, float|null $disk, int|null $maxdisk, int|null $maxmem, float|null $mem, float|null $netin, float|null $netout)
    {
        $this->status = $status;
        $this->name = $name;
        $this->uptime = $uptime;
        $this->cpu = $cpu;
        $this->diskread = $diskread;
        $this->diskwrite = $diskwrite;
        $this->cpus = $cpus;
        $this->disk = $disk;
        $this->maxdisk = $maxdisk;
        $this->maxmem = $maxmem;
        $this->mem = $mem;
        $this->netin = $netin;
        $this->netout = $netout;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'status' => $this->getStatus(),
        'name' => $this->getName(),
        'uptime' => $this->getUptime(),
        'cpu' => $this->getCpu(),
        'diskread' => $this->getDiskread(),
        'diskwrite' => $this->getDiskwrite(),
        'cpus' => $this->getCpus(),
        'disk' => $this->getDisk(),
        'maxdisk' => $this->getMaxdisk(),
        'maxmem' => $this->getMaxmem(),
        'mem' => $this->getMem(),
        'netin' => $this->getNetin(),
        'netout' => $this->getNetout(),
        ];
    }

    /**
     * @param object $object
     * @return VpsStatus
     */
    public static function fromStdClass(object $object):VpsStatus
    {

        if (isset($object->status)) {
            $status = (string) $object->status;
        }else $status = $object->status=null;

        if (isset($object->name)) {
            $name = (string) $object->name;
        }else $name = $object->name=null;

        if (isset($object->uptime)) {
            $uptime = (int) $object->uptime;
        }else $uptime = $object->uptime=null;

        if (isset($object->cpu)) {
            $cpu = (float) $object->cpu;
        }else $cpu = $object->cpu=null;

        if (isset($object->diskread)) {
            $diskread = (float) $object->diskread;
        }else $diskread = $object->diskread=null;

        if (isset($object->diskwrite)) {
            $diskwrite = (float) $object->diskwrite;
        }else $diskwrite = $object->diskwrite=null;

        if (isset($object->cpus)) {
            $cpus = (int) $object->cpus;
        }else $cpus = $object->cpus=null;

        if (isset($object->disk)) {
            $disk = (float) $object->disk;
        }else $disk = $object->disk=null;

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

        return new VpsStatus($status, $name, $uptime, $cpu, $diskread, $diskwrite, $cpus, $disk, $maxdisk, $maxmem, $mem, $netin, $netout);
     }
}
