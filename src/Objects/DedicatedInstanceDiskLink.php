<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class DedicatedInstanceDiskLink
{

    private int $id;

    private Disk $disk;

    private int $diskBay;


    /**
     * @return int
     */
    public function getId(): int
    {
         return $this->id;
     }

    /**
     * @return Disk
     */
    public function getDisk(): Disk
    {
         return $this->disk;
     }

    /**
     * @return int
     */
    public function getDiskBay(): int
    {
         return $this->diskBay;
     }

    /**
     * @param int $id
     * @param Disk $disk
     * @param int $diskBay
     */
    public function __construct(int $id, Disk $disk, int $diskBay)
    {
        $this->id = $id;
        $this->disk = $disk;
        $this->diskBay = $diskBay;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'id' => $this->getId(),
        'disk' => $this->getDisk(),
        'diskBay' => $this->getDiskBay(),
        ];
    }

    /**
     * @param object $object
     * @return DedicatedInstanceDiskLink
     */
    public static function fromStdClass(object $object):DedicatedInstanceDiskLink
    {
        $id = (int) $object->id;
        $disk = Disk::fromStdClass((object)$object->disk);
        $diskBay = (int) $object->diskBay;

        return new DedicatedInstanceDiskLink($id, $disk, $diskBay);
     }
}
