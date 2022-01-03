<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';



class DedicatedTemplate
{

    private $startDate;

    private $id;

    private $price;

    private $serviceType;

    private $dataId;

    private $configuration;


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
     * @return ?DedicatedConfiguration
     */
    public function getConfiguration(): ?DedicatedConfiguration
    {
         return $this->configuration;
     }

    /**
     * @param string|null $startDate
     * @param int|null $id
     * @param int|null $price
     * @param string|null $serviceType
     * @param int|null $dataId
     * @param DedicatedConfiguration|null $configuration
     */
    public function __construct(?string $startDate, ?int $id, ?int $price, ?string $serviceType, ?int $dataId, ?DedicatedConfiguration $configuration)
    {
        $this->startDate = $startDate;
        $this->id = $id;
        $this->price = $price;
        $this->serviceType = $serviceType;
        $this->dataId = $dataId;
        $this->configuration = $configuration;
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
        'configuration' => $this->getConfiguration(),
        ];
    }

    /**
     * @param object $object
     * @return DedicatedTemplate
     */
    public static function fromStdClass(object $object):DedicatedTemplate
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

        if (isset($object->configuration)) {
           $configuration = DedicatedConfiguration::fromStdClass((object)$object->configuration);
        }else $configuration = $object->configuration=null;

        return new DedicatedTemplate($startDate, $id, $price, $serviceType, $dataId, $configuration);
     }
}
