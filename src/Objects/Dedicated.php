<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

require_once __DIR__ . '/Service.php';

class Dedicated extends Service
{

    private int $dataId;

    private int $id;

    private string $startDate;

    private string $endDate;

    private int $price;

    private string $priceType;

    private string $deactivatedOn;

    private string $description;

    private string $runtime;

    private string $name;

    private string $type;

    private int $priceObject;

    private int $serviceGroupId;

    private int $templateId;

    private array $addedUpgrades;

    private array $removedUpgrades;

    private int $instanceId;

    private DedicatedInstance $instance;


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
    public function getId(): int
    {
         return $this->id;
     }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
         return $this->startDate;
     }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
         return $this->endDate;
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
    public function getPriceType(): string
    {
         return $this->priceType;
     }

    /**
     * @return string
     */
    public function getDeactivatedOn(): string
    {
         return $this->deactivatedOn;
     }

    /**
     * @return string
     */
    public function getDescription(): string
    {
         return $this->description;
     }

    /**
     * @return string
     */
    public function getRuntime(): string
    {
         return $this->runtime;
     }

    /**
     * @return string
     */
    public function getName(): string
    {
         return $this->name;
     }

    /**
     * @return string
     */
    public function getType(): string
    {
         return $this->type;
     }

    /**
     * @return int
     */
    public function getPriceObject(): int
    {
         return $this->priceObject;
     }

    /**
     * @return int
     */
    public function getServiceGroupId(): int
    {
         return $this->serviceGroupId;
     }

    /**
     * @return int
     */
    public function getTemplateId(): int
    {
         return $this->templateId;
     }

    /**
     * @return array
     */
    public function getAddedUpgrades(): array
    {
         return $this->addedUpgrades;
     }

    /**
     * @return array
     */
    public function getRemovedUpgrades(): array
    {
         return $this->removedUpgrades;
     }

    /**
     * @return int
     */
    public function getInstanceId(): int
    {
         return $this->instanceId;
     }

    /**
     * @return DedicatedInstance
     */
    public function getInstance(): DedicatedInstance
    {
         return $this->instance;
     }

    /**
     * @param int $dataId
     * @param int $id
     * @param string $startDate
     * @param string $endDate
     * @param int $price
     * @param string $priceType
     * @param string $deactivatedOn
     * @param string $description
     * @param string $runtime
     * @param string $name
     * @param string $type
     * @param int $priceObject
     * @param int $serviceGroupId
     * @param int $templateId
     * @param array $addedUpgrades
     * @param array $removedUpgrades
     * @param int $instanceId
     * @param DedicatedInstance $instance
     */
    public function __construct(int $dataId, int $id, string $startDate, string $endDate, int $price, string $priceType, string $deactivatedOn, string $description, string $runtime, string $name, string $type, int $priceObject, int $serviceGroupId, int $templateId, array $addedUpgrades, array $removedUpgrades, int $instanceId, DedicatedInstance $instance)
    {
        $this->dataId = $dataId;
        $this->id = $id;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->price = $price;
        $this->priceType = $priceType;
        $this->deactivatedOn = $deactivatedOn;
        $this->description = $description;
        $this->runtime = $runtime;
        $this->name = $name;
        $this->type = $type;
        $this->priceObject = $priceObject;
        $this->serviceGroupId = $serviceGroupId;
        $this->templateId = $templateId;

        //handle objects in array
        $tmpAddedUpgrades = $addedUpgrades;
        $addedUpgrades = [];
        foreach ($tmpAddedUpgrades as $key => $item) {
            $item = PaymentBundle::fromStdClass($item);
            $singleItem = array($key => $item);
            $addedUpgrades = array_merge($addedUpgrades, $singleItem);
        }
        $this->addedUpgrades = $addedUpgrades;

        //handle objects in array
        $tmpRemovedUpgrades = $removedUpgrades;
        $removedUpgrades = [];
        foreach ($tmpRemovedUpgrades as $key => $item) {
            $item = PaymentBundle::fromStdClass($item);
            $singleItem = array($key => $item);
            $removedUpgrades = array_merge($removedUpgrades, $singleItem);
        }
        $this->removedUpgrades = $removedUpgrades;
        $this->instanceId = $instanceId;
        $this->instance = $instance;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'dataId' => $this->getDataId(),
        'id' => $this->getId(),
        'startDate' => $this->getStartDate(),
        'endDate' => $this->getEndDate(),
        'price' => $this->getPrice(),
        'priceType' => $this->getPriceType(),
        'deactivatedOn' => $this->getDeactivatedOn(),
        'description' => $this->getDescription(),
        'runtime' => $this->getRuntime(),
        'name' => $this->getName(),
        'type' => $this->getType(),
        'priceObject' => $this->getPriceObject(),
        'serviceGroupId' => $this->getServiceGroupId(),
        'templateId' => $this->getTemplateId(),
        'addedUpgrades' => $this->getAddedUpgrades(),
        'removedUpgrades' => $this->getRemovedUpgrades(),
        'instanceId' => $this->getInstanceId(),
        'instance' => $this->getInstance(),
        ];
    }

    /**
     * @param object $object
     * @return Dedicated
     */
    public static function fromStdClass(object $object):Dedicated
    {
        $dataId = (int) $object->dataId;
        $id = (int) $object->id;
        $startDate = (string) $object->startDate;
        $endDate = (string) $object->endDate;
        $price = (int) $object->price;
        $priceType = (string) $object->priceType;
        $deactivatedOn = (string) $object->deactivatedOn;
        $description = (string) $object->description;
        $runtime = (string) $object->runtime;
        $name = (string) $object->name;
        $type = (string) $object->type;
        $priceObject = (int) $object->priceObject;
        $serviceGroupId = (int) $object->serviceGroupId;
        $templateId = (int) $object->templateId;
        $addedUpgrades = (array) $object->addedUpgrades;
        $removedUpgrades = (array) $object->removedUpgrades;
        $instanceId = (int) $object->instanceId;
        $instance = DedicatedInstance::fromStdClass((object)$object->instance);

        return new Dedicated($dataId, $id, $startDate, $endDate, $price, $priceType, $deactivatedOn, $description, $runtime, $name, $type, $priceObject, $serviceGroupId, $templateId, $addedUpgrades, $removedUpgrades, $instanceId, $instance);
     }


    /**
     * @param int $id
     * @param string $start
     * @param string $end
     * @param int $interval
     * @param int $count
     * @return  DedicatedStatisticsResult
     * @throws \Exception
     */
    public static function getServiceByID_1(int $id, string $start = "", string $end = "", int $interval = 0, int $count = 0): DedicatedStatisticsResult 
    {
        $result = TubeAPI::request('GET', '/dedicated/'.$id.'/interfaces/statistics?start='.$start.'&end='.$end.'&interval='.$interval.'&count='.$count.'', null, TubeAPI::$token);
        return  DedicatedStatisticsResult::fromStdClass(json_decode($result));
    }
}
