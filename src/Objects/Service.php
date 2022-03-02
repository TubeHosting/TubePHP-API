<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class Service
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

    private $templateId;

    private $realPrice;

    private $serviceGroupId;


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
    public function getTemplateId(): ?int
    {
         return $this->templateId;
     }

    /**
     * @return ?int
     */
    public function getRealPrice(): ?int
    {
         return $this->realPrice;
     }

    /**
     * @return ?int
     */
    public function getServiceGroupId(): ?int
    {
         return $this->serviceGroupId;
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
     * @param int|null $templateId
     * @param int|null $realPrice
     * @param int|null $serviceGroupId
     */
    public function __construct(?int $dataId, ?int $id, ?string $startDate, ?string $endDate, ?int $price, ?string $priceType, ?string $deactivatedOn, ?string $description, ?string $runtime, ?string $name, ?string $type, ?int $priceObject, ?int $templateId, ?int $realPrice, ?int $serviceGroupId)
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
        $this->templateId = $templateId;
        $this->realPrice = $realPrice;
        $this->serviceGroupId = $serviceGroupId;
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
        'templateId' => $this->getTemplateId(),
        'realPrice' => $this->getRealPrice(),
        'serviceGroupId' => $this->getServiceGroupId(),
        ];
    }

    /**
     * @param object $object
     * @return Service
     */
    public static function fromStdClass(object $object):Service
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

        if (isset($object->priceObject)) {
            $priceObject = (int) $object->priceObject;
        }else $priceObject = null;

        if (isset($object->templateId)) {
            $templateId = (int) $object->templateId;
        }else $templateId = null;

        if (isset($object->realPrice)) {
            $realPrice = (int) $object->realPrice;
        }else $realPrice = null;

        if (isset($object->serviceGroupId)) {
            $serviceGroupId = (int) $object->serviceGroupId;
        }else $serviceGroupId = null;

        return new Service($dataId, $id, $startDate, $endDate, $price, $priceType, $deactivatedOn, $description, $runtime, $name, $type, $priceObject, $templateId, $realPrice, $serviceGroupId);
     }


    /**
     * @link https://doc.api.tube-hosting.com/#/service-controller/changeDescription
     * @param int $serviceId
     * @param DescriptionBody $descriptionBody
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function changeDescription(int $serviceId,DescriptionBody $descriptionBody):string 
    {
        $result = TubeAPI::request('PUT', '/services/'.$serviceId.'/description', $descriptionBody->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/service-controller/getServiceByID
     * @param int $serviceId
     * @return object
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getServiceByID(int $serviceId):object 
    {
        $result = TubeAPI::request('GET', '/services/'.$serviceId.'/current', null, TubeAPI::$token);
        $result = json_decode($result);
        if(((array)$result)['type'] === "Service") return  Service::fromStdClass($result);
        if(((array)$result)['type'] === "Dedicated") return  Dedicated::fromStdClass($result);
        if(((array)$result)['type'] === "IPv4Bundle") return  IPv4Bundle::fromStdClass($result);
        if(((array)$result)['type'] === "VPS") return  VPS::fromStdClass($result);
        return new \stdClass();
    }
}
