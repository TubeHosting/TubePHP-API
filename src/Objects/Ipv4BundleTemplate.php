<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

require_once __DIR__ . '/Template.php';

class Ipv4BundleTemplate extends Template
{

    private string $startDate;

    private int $id;

    private int $price;

    private string $serviceType;

    private int $dataId;

    private int $count;

    private bool $primary;


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
    public function getCount(): int
    {
         return $this->count;
     }

    /**
     * @return bool
     */
    public function getPrimary(): bool
    {
         return $this->primary;
     }

    /**
     * @param string $startDate
     * @param int $id
     * @param int $price
     * @param string $serviceType
     * @param int $dataId
     * @param int $count
     * @param bool $primary
     */
    public function __construct(string $startDate, int $id, int $price, string $serviceType, int $dataId, int $count, bool $primary)
    {
        $this->startDate = $startDate;
        $this->id = $id;
        $this->price = $price;
        $this->serviceType = $serviceType;
        $this->dataId = $dataId;
        $this->count = $count;
        $this->primary = $primary;
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
        'count' => $this->getCount(),
        'primary' => $this->getPrimary(),
        ];
    }

    /**
     * @param object $object
     * @return Ipv4BundleTemplate
     */
    public static function fromStdClass(object $object):Ipv4BundleTemplate
    {
        $startDate = (string) $object->startDate;
        $id = (int) $object->id;
        $price = (int) $object->price;
        $serviceType = (string) $object->serviceType;
        $dataId = (int) $object->dataId;
        $count = (int) $object->count;
        $primary = (bool) $object->primary;

        return new Ipv4BundleTemplate($startDate, $id, $price, $serviceType, $dataId, $count, $primary);
     }
}
