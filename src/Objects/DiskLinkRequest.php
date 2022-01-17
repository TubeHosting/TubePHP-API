<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DiskLinkRequest
{

    private $diskBay;

    private $diskId;


    /**
     * @return ?int
     */
    public function getDiskBay(): ?int
    {
         return $this->diskBay;
     }

    /**
     * @return ?int
     */
    public function getDiskId(): ?int
    {
         return $this->diskId;
     }

    /**
     * @param int|null $diskBay
     * @param int|null $diskId
     */
    public function __construct(?int $diskBay, ?int $diskId)
    {
        $this->diskBay = $diskBay;
        $this->diskId = $diskId;
    }

    /**
     * @return array
     */
    public function getAsArr():array
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
        }else $diskBay = null;

        if (isset($object->diskId)) {
            $diskId = (int) $object->diskId;
        }else $diskId = null;

        return new DiskLinkRequest($diskBay, $diskId);
     }
}
