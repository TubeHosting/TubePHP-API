<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DedicatedInstanceDiskLink
{

    private int|null $id;

    private Disk|null $disk;

    private int|null $diskBay;


    /**
     * @return int|null
     */
    public function getId(): int|null
    {
         return $this->id;
     }

    /**
     * @return Disk|null
     */
    public function getDisk(): Disk|null
    {
         return $this->disk;
     }

    /**
     * @return int|null
     */
    public function getDiskBay(): int|null
    {
         return $this->diskBay;
     }

    /**
     * @param int|null $id
     * @param Disk|null $disk
     * @param int|null $diskBay
     */
    public function __construct(int|null $id, Disk|null $disk, int|null $diskBay)
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

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->disk)) {
           $disk = Disk::fromStdClass((object)$object->disk);
        }else $disk = $object->disk=null;

        if (isset($object->diskBay)) {
            $diskBay = (int) $object->diskBay;
        }else $diskBay = $object->diskBay=null;

        return new DedicatedInstanceDiskLink($id, $disk, $diskBay);
     }
}
