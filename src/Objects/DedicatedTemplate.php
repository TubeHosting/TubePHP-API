<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

require_once __DIR__ . '/Template.php';

class DedicatedTemplate extends Template
{

    private string $startDate;

    private int $id;

    private int $price;

    private string $serviceType;

    private int $dataId;

    private DedicatedConfiguration $configuration;


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
     * @return DedicatedConfiguration
     */
    public function getConfiguration(): DedicatedConfiguration
    {
         return $this->configuration;
     }

    /**
     * @param string $startDate
     * @param int $id
     * @param int $price
     * @param string $serviceType
     * @param int $dataId
     * @param DedicatedConfiguration $configuration
     */
    public function __construct(string $startDate, int $id, int $price, string $serviceType, int $dataId, DedicatedConfiguration $configuration)
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
    public function getAsArr()
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
        $startDate = (string) $object->startDate;
        $id = (int) $object->id;
        $price = (int) $object->price;
        $serviceType = (string) $object->serviceType;
        $dataId = (int) $object->dataId;
        $configuration = DedicatedConfiguration::fromStdClass((object)$object->configuration);

        return new DedicatedTemplate($startDate, $id, $price, $serviceType, $dataId, $configuration);
     }
}
