<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class DiskLinkRequest
{

    private int|null $diskBay;

    private int|null $diskId;


    /**
     * @return int|null
     */
    public function getDiskBay(): int|null
    {
         return $this->diskBay;
     }

    /**
     * @return int|null
     */
    public function getDiskId(): int|null
    {
         return $this->diskId;
     }

    /**
     * @param int|null $diskBay
     * @param int|null $diskId
     */
    public function __construct(int|null $diskBay, int|null $diskId)
    {
        $this->diskBay = $diskBay;
        $this->diskId = $diskId;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'diskBay' => $this->getDiskBay(),
        'diskId' => $this->getDiskId(),
        ];
    }

    /**
     * @param object $object
     * @return DiskLinkRequest
     */
    public static function fromStdClass(object $object):DiskLinkRequest
    {

        if (isset($object->diskBay)) {
            $diskBay = (int) $object->diskBay;
        }else $diskBay = $object->diskBay=null;

        if (isset($object->diskId)) {
            $diskId = (int) $object->diskId;
        }else $diskId = $object->diskId=null;

        return new DiskLinkRequest($diskBay, $diskId);
     }
}
