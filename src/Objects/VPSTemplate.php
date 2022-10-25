<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';



class VPSTemplate
{

    private $startDate;

    private $id;

    private $price;

    private $serviceType;

    private $dataId;

    private $coreCount;

    private $memory;

    private $diskSpace;

    private $vpsType;


    /**
     * @return ?string
     */
    public function getStartDate(): ?string
    {
         return $this->startDate;
     }

    /**
     * @return ?int
     */
    public function getId(): ?int
    {
         return $this->id;
     }

    /**
     * @return ?int
     */
    public function getPrice(): ?int
    {
         return $this->price;
     }

    /**
     * @return ?string
     */
    public function getServiceType(): ?string
    {
         return $this->serviceType;
     }

    /**
     * @return ?int
     */
    public function getDataId(): ?int
    {
         return $this->dataId;
     }

    /**
     * @return ?int
     */
    public function getCoreCount(): ?int
    {
         return $this->coreCount;
     }

    /**
     * @return ?int
     */
    public function getMemory(): ?int
    {
         return $this->memory;
     }

    /**
     * @return ?int
     */
    public function getDiskSpace(): ?int
    {
         return $this->diskSpace;
     }

    /**
     * @return ?string
     */
    public function getVpsType(): ?string
    {
         return $this->vpsType;
     }

    /**
     * @param string|null $startDate
     * @param int|null $id
     * @param int|null $price
     * @param string|null $serviceType
     * @param int|null $dataId
     * @param int|null $coreCount
     * @param int|null $memory
     * @param int|null $diskSpace
     * @param string|null $vpsType
     */
    public function __construct(?string $startDate, ?int $id, ?int $price, ?string $serviceType, ?int $dataId, ?int $coreCount, ?int $memory, ?int $diskSpace, ?string $vpsType)
    {
        $this->startDate = $startDate;
        $this->id = $id;
        $this->price = $price;
        $this->serviceType = $serviceType;
        $this->dataId = $dataId;
        $this->coreCount = $coreCount;
        $this->memory = $memory;
        $this->diskSpace = $diskSpace;
        $this->vpsType = $vpsType;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'startDate' => $this->getStartDate(),
        'id' => $this->getId(),
        'price' => $this->getPrice(),
        'serviceType' => $this->getServiceType(),
        'dataId' => $this->getDataId(),
        'coreCount' => $this->getCoreCount(),
        'memory' => $this->getMemory(),
        'diskSpace' => $this->getDiskSpace(),
        'vpsType' => $this->getVpsType(),
        ];
    }

    /**
     * @param object $object
     * @return VPSTemplate
     */
    public static function fromStdClass(object $object):VPSTemplate
    {

        if (isset($object->startDate)) {
            $startDate = (string) $object->startDate;
        }else $startDate = null;

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = null;

        if (isset($object->price)) {
            $price = (int) $object->price;
        }else $price = null;

        if (isset($object->serviceType)) {
            $serviceType = (string) $object->serviceType;
        }else $serviceType = null;

        if (isset($object->dataId)) {
            $dataId = (int) $object->dataId;
        }else $dataId = null;

        if (isset($object->coreCount)) {
            $coreCount = (int) $object->coreCount;
        }else $coreCount = null;

        if (isset($object->memory)) {
            $memory = (int) $object->memory;
        }else $memory = null;

        if (isset($object->diskSpace)) {
            $diskSpace = (int) $object->diskSpace;
        }else $diskSpace = null;

        if (isset($object->vpsType)) {
            $vpsType = (string) $object->vpsType;
        }else $vpsType = null;

        return new VPSTemplate($startDate, $id, $price, $serviceType, $dataId, $coreCount, $memory, $diskSpace, $vpsType);
     }
}
