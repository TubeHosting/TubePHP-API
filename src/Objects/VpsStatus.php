<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class VpsStatus
{

    private $status;

    private $name;

    private $uptime;

    private $cpu;

    private $diskread;

    private $diskwrite;

    private $cpus;

    private $disk;

    private $maxdisk;

    private $maxmem;

    private $mem;

    private $netin;

    private $netout;


    /**
     * @return ?string
     */
    public function getStatus(): ?string
    {
         return $this->status;
     }

    /**
     * @return ?string
     */
    public function getName(): ?string
    {
         return $this->name;
     }

    /**
     * @return ?int
     */
    public function getUptime(): ?int
    {
         return $this->uptime;
     }

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
    public function getCpus(): ?int
    {
         return $this->cpus;
     }

    /**
     * @return ?float
     */
    public function getDisk(): ?float
    {
         return $this->disk;
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
    public function __construct(?string $status, ?string $name, ?int $uptime, ?float $cpu, ?float $diskread, ?float $diskwrite, ?int $cpus, ?float $disk, ?int $maxdisk, ?int $maxmem, ?float $mem, ?float $netin, ?float $netout)
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
    public function getAsArr():array
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
        }else $status = null;

        if (isset($object->name)) {
            $name = (string) $object->name;
        }else $name = null;

        if (isset($object->uptime)) {
            $uptime = (int) $object->uptime;
        }else $uptime = null;

        if (isset($object->cpu)) {
            $cpu = (float) $object->cpu;
        }else $cpu = null;

        if (isset($object->diskread)) {
            $diskread = (float) $object->diskread;
        }else $diskread = null;

        if (isset($object->diskwrite)) {
            $diskwrite = (float) $object->diskwrite;
        }else $diskwrite = null;

        if (isset($object->cpus)) {
            $cpus = (int) $object->cpus;
        }else $cpus = null;

        if (isset($object->disk)) {
            $disk = (float) $object->disk;
        }else $disk = null;

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

        return new VpsStatus($status, $name, $uptime, $cpu, $diskread, $diskwrite, $cpus, $disk, $maxdisk, $maxmem, $mem, $netin, $netout);
     }
}
