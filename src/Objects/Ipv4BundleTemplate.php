<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';



class Ipv4BundleTemplate
{

    private $startDate;

    private $id;

    private $price;

    private $dataId;

    private $serviceType;

    private $count;

    private $primary;


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
     * @return ?int
     */
    public function getDataId(): ?int
    {
         return $this->dataId;
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
    public function getCount(): ?int
    {
         return $this->count;
     }

    /**
     * @return ?bool
     */
    public function getPrimary(): ?bool
    {
         return $this->primary;
     }

    /**
     * @param string|null $startDate
     * @param int|null $id
     * @param int|null $price
     * @param int|null $dataId
     * @param string|null $serviceType
     * @param int|null $count
     * @param bool|null $primary
     */
    public function __construct(?string $startDate, ?int $id, ?int $price, ?int $dataId, ?string $serviceType, ?int $count, ?bool $primary)
    {
        $this->startDate = $startDate;
        $this->id = $id;
        $this->price = $price;
        $this->dataId = $dataId;
        $this->serviceType = $serviceType;
        $this->count = $count;
        $this->primary = $primary;
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
        'dataId' => $this->getDataId(),
        'serviceType' => $this->getServiceType(),
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
        }else $startDate = null;

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = null;

        if (isset($object->price)) {
            $price = (int) $object->price;
        }else $price = null;

        if (isset($object->dataId)) {
            $dataId = (int) $object->dataId;
        }else $dataId = null;

        if (isset($object->serviceType)) {
            $serviceType = (string) $object->serviceType;
        }else $serviceType = null;

        if (isset($object->count)) {
            $count = (int) $object->count;
        }else $count = null;

        if (isset($object->primary)) {
            $primary = (bool) $object->primary;
        }else $primary = null;

        return new Ipv4BundleTemplate($startDate, $id, $price, $dataId, $serviceType, $count, $primary);
     }
}
