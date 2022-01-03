<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DedicatedInstanceDiskLink
{

    private $id;

    private $disk;

    private $diskBay;


    /**
     * @return ?int
     */
    public function getId(): ?int
    {
         return $this->id;
     }

    /**
     * @return ?Disk
     */
    public function getDisk(): ?Disk
    {
         return $this->disk;
     }

    /**
     * @return ?int
     */
    public function getDiskBay(): ?int
    {
         return $this->diskBay;
     }

    /**
     * @param int|null $id
     * @param Disk|null $disk
     * @param int|null $diskBay
     */
    public function __construct(?int $id, ?Disk $disk, ?int $diskBay)
    {
        $this->id = $id;
        $this->disk = $disk;
        $this->diskBay = $diskBay;
    }

    /**
     * @return array
     */
    public function getAsArr():array
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
