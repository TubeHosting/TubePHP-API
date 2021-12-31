<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

require_once __DIR__ . '/Template.php';

class VPSTemplate extends Template
{

    private string|null $startDate;

    private int|null $id;

    private int|null $price;

    private string|null $serviceType;

    private int|null $dataId;

    private int|null $coreCount;

    private int|null $memory;

    private int|null $diskSpace;

    private string|null $vpsType;


    /**
     * @return string|null
     */
    public function getStartDate(): string|null
    {
         return $this->startDate;
     }

    /**
     * @return int|null
     */
    public function getId(): int|null
    {
         return $this->id;
     }

    /**
     * @return int|null
     */
    public function getPrice(): int|null
    {
         return $this->price;
     }

    /**
     * @return string|null
     */
    public function getServiceType(): string|null
    {
         return $this->serviceType;
     }

    /**
     * @return int|null
     */
    public function getDataId(): int|null
    {
         return $this->dataId;
     }

    /**
     * @return int|null
     */
    public function getCoreCount(): int|null
    {
         return $this->coreCount;
     }

    /**
     * @return int|null
     */
    public function getMemory(): int|null
    {
         return $this->memory;
     }

    /**
     * @return int|null
     */
    public function getDiskSpace(): int|null
    {
         return $this->diskSpace;
     }

    /**
     * @return string|null
     */
    public function getVpsType(): string|null
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
    public function __construct(string|null $startDate, int|null $id, int|null $price, string|null $serviceType, int|null $dataId, int|null $coreCount, int|null $memory, int|null $diskSpace, string|null $vpsType)
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
    public function getAsArr()
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
        }else $startDate = $object->startDate=null;

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->price)) {
            $price = (int) $object->price;
        }else $price = $object->price=null;

        if (isset($object->serviceType)) {
            $serviceType = (string) $object->serviceType;
        }else $serviceType = $object->serviceType=null;

        if (isset($object->dataId)) {
            $dataId = (int) $object->dataId;
        }else $dataId = $object->dataId=null;

        if (isset($object->coreCount)) {
            $coreCount = (int) $object->coreCount;
        }else $coreCount = $object->coreCount=null;

        if (isset($object->memory)) {
            $memory = (int) $object->memory;
        }else $memory = $object->memory=null;

        if (isset($object->diskSpace)) {
            $diskSpace = (int) $object->diskSpace;
        }else $diskSpace = $object->diskSpace=null;

        if (isset($object->vpsType)) {
            $vpsType = (string) $object->vpsType;
        }else $vpsType = $object->vpsType=null;

        return new VPSTemplate($startDate, $id, $price, $serviceType, $dataId, $coreCount, $memory, $diskSpace, $vpsType);
     }
}
