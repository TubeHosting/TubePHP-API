<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';



class Ipv4BundleTemplate
{

    private string|null $startDate;

    private int|null $id;

    private int|null $price;

    private string|null $serviceType;

    private int|null $dataId;

    private int|null $count;

    private bool|null $primary;


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
    public function getCount(): int|null
    {
         return $this->count;
     }

    /**
     * @return bool|null
     */
    public function getPrimary(): bool|null
    {
         return $this->primary;
     }

    /**
     * @param string|null $startDate
     * @param int|null $id
     * @param int|null $price
     * @param string|null $serviceType
     * @param int|null $dataId
     * @param int|null $count
     * @param bool|null $primary
     */
    public function __construct(string|null $startDate, int|null $id, int|null $price, string|null $serviceType, int|null $dataId, int|null $count, bool|null $primary)
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

        if (isset($object->count)) {
            $count = (int) $object->count;
        }else $count = $object->count=null;

        if (isset($object->primary)) {
            $primary = (bool) $object->primary;
        }else $primary = $object->primary=null;

        return new Ipv4BundleTemplate($startDate, $id, $price, $serviceType, $dataId, $count, $primary);
     }
}
