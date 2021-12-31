<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

require_once __DIR__ . '/Service.php';

class Dedicated extends Service
{

    private int|null $dataId;

    private int|null $id;

    private string|null $startDate;

    private string|null $endDate;

    private int|null $price;

    private string|null $priceType;

    private string|null $deactivatedOn;

    private string|null $description;

    private string|null $runtime;

    private string|null $name;

    private string|null $type;

    private int|null $priceObject;

    private int|null $serviceGroupId;

    private int|null $templateId;

    private array|null $addedUpgrades;

    private array|null $removedUpgrades;

    private int|null $instanceId;

    private DedicatedInstance|null $instance;


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
    public function getId(): int|null
    {
         return $this->id;
     }

    /**
     * @return string|null
     */
    public function getStartDate(): string|null
    {
         return $this->startDate;
     }

    /**
     * @return string|null
     */
    public function getEndDate(): string|null
    {
         return $this->endDate;
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
    public function getPriceType(): string|null
    {
         return $this->priceType;
     }

    /**
     * @return string|null
     */
    public function getDeactivatedOn(): string|null
    {
         return $this->deactivatedOn;
     }

    /**
     * @return string|null
     */
    public function getDescription(): string|null
    {
         return $this->description;
     }

    /**
     * @return string|null
     */
    public function getRuntime(): string|null
    {
         return $this->runtime;
     }

    /**
     * @return string|null
     */
    public function getName(): string|null
    {
         return $this->name;
     }

    /**
     * @return string|null
     */
    public function getType(): string|null
    {
         return $this->type;
     }

    /**
     * @return int|null
     */
    public function getPriceObject(): int|null
    {
         return $this->priceObject;
     }

    /**
     * @return int|null
     */
    public function getServiceGroupId(): int|null
    {
         return $this->serviceGroupId;
     }

    /**
     * @return int|null
     */
    public function getTemplateId(): int|null
    {
         return $this->templateId;
     }

    /**
     * @return array|null
     */
    public function getAddedUpgrades(): array|null
    {
         return $this->addedUpgrades;
     }

    /**
     * @return array|null
     */
    public function getRemovedUpgrades(): array|null
    {
         return $this->removedUpgrades;
     }

    /**
     * @return int|null
     */
    public function getInstanceId(): int|null
    {
         return $this->instanceId;
     }

    /**
     * @return DedicatedInstance|null
     */
    public function getInstance(): DedicatedInstance|null
    {
         return $this->instance;
     }

    /**
     * @param int|null $dataId
     * @param int|null $id
     * @param string|null $startDate
     * @param string|null $endDate
     * @param int|null $price
     * @param string|null $priceType
     * @param string|null $deactivatedOn
     * @param string|null $description
     * @param string|null $runtime
     * @param string|null $name
     * @param string|null $type
     * @param int|null $priceObject
     * @param int|null $serviceGroupId
     * @param int|null $templateId
     * @param array|null $addedUpgrades
     * @param array|null $removedUpgrades
     * @param int|null $instanceId
     * @param DedicatedInstance|null $instance
     */
    public function __construct(int|null $dataId, int|null $id, string|null $startDate, string|null $endDate, int|null $price, string|null $priceType, string|null $deactivatedOn, string|null $description, string|null $runtime, string|null $name, string|null $type, int|null $priceObject, int|null $serviceGroupId, int|null $templateId, array|null $addedUpgrades, array|null $removedUpgrades, int|null $instanceId, DedicatedInstance|null $instance)
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

        if (isset($object->dataId)) {
            $dataId = (int) $object->dataId;
        }else $dataId = $object->dataId=null;

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->startDate)) {
            $startDate = (string) $object->startDate;
        }else $startDate = $object->startDate=null;

        if (isset($object->endDate)) {
            $endDate = (string) $object->endDate;
        }else $endDate = $object->endDate=null;

        if (isset($object->price)) {
            $price = (int) $object->price;
        }else $price = $object->price=null;

        if (isset($object->priceType)) {
            $priceType = (string) $object->priceType;
        }else $priceType = $object->priceType=null;

        if (isset($object->deactivatedOn)) {
            $deactivatedOn = (string) $object->deactivatedOn;
        }else $deactivatedOn = $object->deactivatedOn=null;

        if (isset($object->description)) {
            $description = (string) $object->description;
        }else $description = $object->description=null;

        if (isset($object->runtime)) {
            $runtime = (string) $object->runtime;
        }else $runtime = $object->runtime=null;

        if (isset($object->name)) {
            $name = (string) $object->name;
        }else $name = $object->name=null;

        if (isset($object->type)) {
            $type = (string) $object->type;
        }else $type = $object->type=null;

        if (isset($object->priceObject)) {
            $priceObject = (int) $object->priceObject;
        }else $priceObject = $object->priceObject=null;

        if (isset($object->serviceGroupId)) {
            $serviceGroupId = (int) $object->serviceGroupId;
        }else $serviceGroupId = $object->serviceGroupId=null;

        if (isset($object->templateId)) {
            $templateId = (int) $object->templateId;
        }else $templateId = $object->templateId=null;

        if (isset($object->addedUpgrades)) {
            $addedUpgrades = (array) $object->addedUpgrades;
        }else $addedUpgrades = $object->addedUpgrades=null;

        if (isset($object->removedUpgrades)) {
            $removedUpgrades = (array) $object->removedUpgrades;
        }else $removedUpgrades = $object->removedUpgrades=null;

        if (isset($object->instanceId)) {
            $instanceId = (int) $object->instanceId;
        }else $instanceId = $object->instanceId=null;

        if (isset($object->instance)) {
           $instance = DedicatedInstance::fromStdClass((object)$object->instance);
        }else $instance = $object->instance=null;

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
