<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

require_once __DIR__ . '/Template.php';

class VPSTemplate extends Template
{

    private string $startDate;

    private int $id;

    private int $price;

    private string $serviceType;

    private int $dataId;

    private int $coreCount;

    private int $memory;

    private int $diskSpace;

    private string $vpsType;


    /**
     * @return string
     */
    public function getStartDate(): string
    {
         return $this->startDate;
     }

    /**
     * @return int
     */
    public function getId(): int
    {
         return $this->id;
     }

    /**
     * @return int
     */
    public function getPrice(): int
    {
         return $this->price;
     }

    /**
     * @return string
     */
    public function getServiceType(): string
    {
         return $this->serviceType;
     }

    /**
     * @return int
     */
    public function getDataId(): int
    {
         return $this->dataId;
     }

    /**
     * @return int
     */
    public function getCoreCount(): int
    {
         return $this->coreCount;
     }

    /**
     * @return int
     */
    public function getMemory(): int
    {
         return $this->memory;
     }

    /**
     * @return int
     */
    public function getDiskSpace(): int
    {
         return $this->diskSpace;
     }

    /**
     * @return string
     */
    public function getVpsType(): string
    {
         return $this->vpsType;
     }

    /**
     * @param string $startDate
     * @param int $id
     * @param int $price
     * @param string $serviceType
     * @param int $dataId
     * @param int $coreCount
     * @param int $memory
     * @param int $diskSpace
     * @param string $vpsType
     */
    public function __construct(string $startDate, int $id, int $price, string $serviceType, int $dataId, int $coreCount, int $memory, int $diskSpace, string $vpsType)
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
        $startDate = (string) $object->startDate;
        $id = (int) $object->id;
        $price = (int) $object->price;
        $serviceType = (string) $object->serviceType;
        $dataId = (int) $object->dataId;
        $coreCount = (int) $object->coreCount;
        $memory = (int) $object->memory;
        $diskSpace = (int) $object->diskSpace;
        $vpsType = (string) $object->vpsType;

        return new VPSTemplate($startDate, $id, $price, $serviceType, $dataId, $coreCount, $memory, $diskSpace, $vpsType);
     }
}
