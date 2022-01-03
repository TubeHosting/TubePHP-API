<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';



class Dedicated
{

    private $dataId;

    private $id;

    private $startDate;

    private $endDate;

    private $price;

    private $priceType;

    private $deactivatedOn;

    private $description;

    private $runtime;

    private $name;

    private $type;

    private $priceObject;

    private $serviceGroupId;

    private $templateId;

    private $addedUpgrades;

    private $removedUpgrades;

    private $instanceId;

    private $instance;


    /**
     * @return ?int
     */
    public function getDataId(): ?int
    {
         return $this->dataId;
     }

    /**
     * @return ?int
     */
    public function getId(): ?int
    {
         return $this->id;
     }

    /**
     * @return ?string
     */
    public function getStartDate(): ?string
    {
         return $this->startDate;
     }

    /**
     * @return ?string
     */
    public function getEndDate(): ?string
    {
         return $this->endDate;
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
    public function getPriceType(): ?string
    {
         return $this->priceType;
     }

    /**
     * @return ?string
     */
    public function getDeactivatedOn(): ?string
    {
         return $this->deactivatedOn;
     }

    /**
     * @return ?string
     */
    public function getDescription(): ?string
    {
         return $this->description;
     }

    /**
     * @return ?string
     */
    public function getRuntime(): ?string
    {
         return $this->runtime;
     }

    /**
     * @return ?string
     */
    public function getName(): ?string
    {
         return $this->name;
     }

    /**
     * @return ?string
     */
    public function getType(): ?string
    {
         return $this->type;
     }

    /**
     * @return ?int
     */
    public function getPriceObject(): ?int
    {
         return $this->priceObject;
     }

    /**
     * @return ?int
     */
    public function getServiceGroupId(): ?int
    {
         return $this->serviceGroupId;
     }

    /**
     * @return ?int
     */
    public function getTemplateId(): ?int
    {
         return $this->templateId;
     }

    /**
     * @return ?array
     */
    public function getAddedUpgrades(): ?array
    {
         return $this->addedUpgrades;
     }

    /**
     * @return ?array
     */
    public function getRemovedUpgrades(): ?array
    {
         return $this->removedUpgrades;
     }

    /**
     * @return ?int
     */
    public function getInstanceId(): ?int
    {
         return $this->instanceId;
     }

    /**
     * @return ?DedicatedInstance
     */
    public function getInstance(): ?DedicatedInstance
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
    public function __construct(?int $dataId, ?int $id, ?string $startDate, ?string $endDate, ?int $price, ?string $priceType, ?string $deactivatedOn, ?string $description, ?string $runtime, ?string $name, ?string $type, ?int $priceObject, ?int $serviceGroupId, ?int $templateId, ?array $addedUpgrades, ?array $removedUpgrades, ?int $instanceId, ?DedicatedInstance $instance)
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
    public function getAsArr():array
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
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getServiceByID_1(int $id, string $start = "", string $end = "", int $interval = 0, int $count = 0): DedicatedStatisticsResult 
    {
        $result = TubeAPI::request('GET', '/dedicated/'.$id.'/interfaces/statistics?start='.$start.'&end='.$end.'&interval='.$interval.'&count='.$count.'', null, TubeAPI::$token);
        return  DedicatedStatisticsResult::fromStdClass(json_decode($result));
    }
}
