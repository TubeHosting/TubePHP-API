<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';



class IPv4Bundle
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

    private array|null $ips;


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
    public function getIps(): array|null
    {
         return $this->ips;
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
     * @param array|null $ips
     */
    public function __construct(int|null $dataId, int|null $id, string|null $startDate, string|null $endDate, int|null $price, string|null $priceType, string|null $deactivatedOn, string|null $description, string|null $runtime, string|null $name, string|null $type, int|null $priceObject, int|null $serviceGroupId, int|null $templateId, array|null $ips)
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
        $tmpIps = $ips;
        $ips = [];
        foreach ($tmpIps as $key => $item) {
            $item = PaymentBundle::fromStdClass($item);
            $singleItem = array($key => $item);
            $ips = array_merge($ips, $singleItem);
        }
        $this->ips = $ips;
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
        'ips' => $this->getIps(),
        ];
    }

    /**
     * @param object $object
     * @return IPv4Bundle
     */
    public static function fromStdClass(object $object):IPv4Bundle
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

        if (isset($object->ips)) {
            $ips = (array) $object->ips;
        }else $ips = $object->ips=null;

        return new IPv4Bundle($dataId, $id, $startDate, $endDate, $price, $priceType, $deactivatedOn, $description, $runtime, $name, $type, $priceObject, $serviceGroupId, $templateId, $ips);
     }


    /**
     * @param int $serviceId
     * @return array
     * @throws Exceptions\RequestException
     */
    public static function getDDoSIncidentsOnBundle(int $serviceId):array 
    {
        $result = TubeAPI::request('GET', '/ipbundles/'.$serviceId.'/ddos/incidents', null, TubeAPI::$token);
        $tmpResults = json_decode($result);
        //handle objects in array
        $results = [];
        foreach ($tmpResults as $key => $result) {
            $result = CombahtonDDoSAttack::fromStdClass($result);
            $result = array($key => $result);
            $results = array_merge($results, $result);
        }
        return $results;
    }
}
