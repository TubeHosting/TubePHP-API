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

    private $serviceGroupId;

    private $priceObject;

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
    public function getServiceGroupId(): ?int
    {
         return $this->serviceGroupId;
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
     * @param int|null $serviceGroupId
     * @param int|null $priceObject
     * @param int|null $templateId
     * @param array|null $addedUpgrades
     * @param array|null $removedUpgrades
     * @param int|null $instanceId
     * @param DedicatedInstance|null $instance
     */
    public function __construct(?int $dataId, ?int $id, ?string $startDate, ?string $endDate, ?int $price, ?string $priceType, ?string $deactivatedOn, ?string $description, ?string $runtime, ?string $name, ?string $type, ?int $serviceGroupId, ?int $priceObject, ?int $templateId, ?array $addedUpgrades, ?array $removedUpgrades, ?int $instanceId, ?DedicatedInstance $instance)
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
        $this->serviceGroupId = $serviceGroupId;
        $this->priceObject = $priceObject;
        $this->templateId = $templateId;

        //handle objects in array
        $tmpAddedUpgrades = $addedUpgrades;
        $addedUpgrades = [];
        if($tmpAddedUpgrades!==null){
            foreach ($tmpAddedUpgrades as $key => $item) {
                $item = DedicatedUpgrade::fromStdClass($item);
                $singleItem = array($key => $item);
                $addedUpgrades = array_merge($addedUpgrades, $singleItem);
            }
        }
        $this->addedUpgrades = $addedUpgrades;

        //handle objects in array
        $tmpRemovedUpgrades = $removedUpgrades;
        $removedUpgrades = [];
        if($tmpRemovedUpgrades!==null){
            foreach ($tmpRemovedUpgrades as $key => $item) {
                $item = DedicatedUpgrade::fromStdClass($item);
                $singleItem = array($key => $item);
                $removedUpgrades = array_merge($removedUpgrades, $singleItem);
            }
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
        'serviceGroupId' => $this->getServiceGroupId(),
        'priceObject' => $this->getPriceObject(),
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
        }else $dataId = null;

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = null;

        if (isset($object->startDate)) {
            $startDate = (string) $object->startDate;
        }else $startDate = null;

        if (isset($object->endDate)) {
            $endDate = (string) $object->endDate;
        }else $endDate = null;

        if (isset($object->price)) {
            $price = (int) $object->price;
        }else $price = null;

        if (isset($object->priceType)) {
            $priceType = (string) $object->priceType;
        }else $priceType = null;

        if (isset($object->deactivatedOn)) {
            $deactivatedOn = (string) $object->deactivatedOn;
        }else $deactivatedOn = null;

        if (isset($object->description)) {
            $description = (string) $object->description;
        }else $description = null;

        if (isset($object->runtime)) {
            $runtime = (string) $object->runtime;
        }else $runtime = null;

        if (isset($object->name)) {
            $name = (string) $object->name;
        }else $name = null;

        if (isset($object->type)) {
            $type = (string) $object->type;
        }else $type = null;

        if (isset($object->serviceGroupId)) {
            $serviceGroupId = (int) $object->serviceGroupId;
        }else $serviceGroupId = null;

        if (isset($object->priceObject)) {
            $priceObject = (int) $object->priceObject;
        }else $priceObject = null;

        if (isset($object->templateId)) {
            $templateId = (int) $object->templateId;
        }else $templateId = null;

        if (isset($object->addedUpgrades)) {
            $addedUpgrades = (array) $object->addedUpgrades;
        }else $addedUpgrades = null;

        if (isset($object->removedUpgrades)) {
            $removedUpgrades = (array) $object->removedUpgrades;
        }else $removedUpgrades = null;

        if (isset($object->instanceId)) {
            $instanceId = (int) $object->instanceId;
        }else $instanceId = null;

        if (isset($object->instance)) {
           $instance = DedicatedInstance::fromStdClass((object)$object->instance);
        }else $instance = null;

        return new Dedicated($dataId, $id, $startDate, $endDate, $price, $priceType, $deactivatedOn, $description, $runtime, $name, $type, $serviceGroupId, $priceObject, $templateId, $addedUpgrades, $removedUpgrades, $instanceId, $instance);
     }


    /**
     * @link https://doc.api.tube-hosting.com/#/dedicated-controller/getServiceByID_1
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
