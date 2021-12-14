<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class VpsStatus
{

    private string $status;

    private string $name;

    private int $uptime;

    private float $cpu;

    private float $diskread;

    private float $diskwrite;

    private int $cpus;

    private float $disk;

    private int $maxdisk;

    private int $maxmem;

    private float $mem;

    private float $netin;

    private float $netout;


    /**
     * @return string
     */
    public function getStatus(): string
    {
         return $this->status;
     }

    /**
     * @return string
     */
    public function getName(): string
    {
         return $this->name;
     }

    /**
     * @return int
     */
    public function getUptime(): int
    {
         return $this->uptime;
     }

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
    public function getCpus(): int
    {
         return $this->cpus;
     }

    /**
     * @return float
     */
    public function getDisk(): float
    {
         return $this->disk;
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
     * @param string $status
     * @param string $name
     * @param int $uptime
     * @param float $cpu
     * @param float $diskread
     * @param float $diskwrite
     * @param int $cpus
     * @param float $disk
     * @param int $maxdisk
     * @param int $maxmem
     * @param float $mem
     * @param float $netin
     * @param float $netout
     */
    public function __construct(string $status, string $name, int $uptime, float $cpu, float $diskread, float $diskwrite, int $cpus, float $disk, int $maxdisk, int $maxmem, float $mem, float $netin, float $netout)
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
        $status = (string) $object->status;
        $name = (string) $object->name;
        $uptime = (int) $object->uptime;
        $cpu = (float) $object->cpu;
        $diskread = (float) $object->diskread;
        $diskwrite = (float) $object->diskwrite;
        $cpus = (int) $object->cpus;
        $disk = (float) $object->disk;
        $maxdisk = (int) $object->maxdisk;
        $maxmem = (int) $object->maxmem;
        $mem = (float) $object->mem;
        $netin = (float) $object->netin;
        $netout = (float) $object->netout;

        return new VpsStatus($status, $name, $uptime, $cpu, $diskread, $diskwrite, $cpus, $disk, $maxdisk, $maxmem, $mem, $netin, $netout);
     }
}
