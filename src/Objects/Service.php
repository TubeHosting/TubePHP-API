<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class Service
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
     */
    public function __construct(int $dataId, int $id, string $startDate, string $endDate, int $price, string $priceType, string $deactivatedOn, string $description, string $runtime, string $name, string $type, int $priceObject, int $serviceGroupId, int $templateId)
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
        ];
    }

    /**
     * @param object $object
     * @return Service
     */
    public static function fromStdClass(object $object):Service
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

        return new Service($dataId, $id, $startDate, $endDate, $price, $priceType, $deactivatedOn, $description, $runtime, $name, $type, $priceObject, $serviceGroupId, $templateId);
     }


    /**
     * @param int $serviceId
     * @param DescriptionBody $descriptionBody
     * @return string
     * @throws \Exception
     */
    public static function changeDescription(int $serviceId,DescriptionBody $descriptionBody):string 
    {
        $result = TubeAPI::request('PUT', '/services/'.$serviceId.'/description', $descriptionBody->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param int $serviceId
     * @return object
     * @throws \Exception
     */
    public static function getServiceByID(int $serviceId):object 
    {
        $result = TubeAPI::request('GET', '/services/'.$serviceId.'/current', null, TubeAPI::$token);
        if(((array)$result)['type'] === "Service") return  Service::fromStdClass($result);
        if(((array)$result)['type'] === "Dedicated") return  Dedicated::fromStdClass($result);
        if(((array)$result)['type'] === "IPv4Bundle") return  IPv4Bundle::fromStdClass($result);
        if(((array)$result)['type'] === "VPS") return  VPS::fromStdClass($result);
        return new \stdClass();
    }
}
