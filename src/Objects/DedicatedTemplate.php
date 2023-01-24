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

    private $dataId;

    private $serviceType;

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
     * @param int|null $dataId
     * @param string|null $serviceType
     * @param DedicatedConfiguration|null $configuration
     */
    public function __construct(?string $startDate, ?int $id, ?int $price, ?int $dataId, ?string $serviceType, ?DedicatedConfiguration $configuration)
    {
        $this->startDate = $startDate;
        $this->id = $id;
        $this->price = $price;
        $this->dataId = $dataId;
        $this->serviceType = $serviceType;
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
        'dataId' => $this->getDataId(),
        'serviceType' => $this->getServiceType(),
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

        if (isset($object->configuration)) {
           $configuration = DedicatedConfiguration::fromStdClass((object)$object->configuration);
        }else $configuration = null;

        return new DedicatedTemplate($startDate, $id, $price, $dataId, $serviceType, $configuration);
     }
}
