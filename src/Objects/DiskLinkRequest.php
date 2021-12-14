<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class DiskLinkRequest
{

    private int $diskBay;

    private int $diskId;


    /**
     * @return int
     */
    public function getDiskBay(): int
    {
         return $this->diskBay;
     }

    /**
     * @return int
     */
    public function getDiskId(): int
    {
         return $this->diskId;
     }

    /**
     * @param int $diskBay
     * @param int $diskId
     */
    public function __construct(int $diskBay, int $diskId)
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
        $diskBay = (int) $object->diskBay;
        $diskId = (int) $object->diskId;

        return new DiskLinkRequest($diskBay, $diskId);
     }
}
