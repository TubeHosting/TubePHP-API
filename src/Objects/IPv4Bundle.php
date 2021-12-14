<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

require_once __DIR__ . '/Service.php';

class IPv4Bundle extends Service
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

    private array $ips;


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
    public function getIps(): array
    {
         return $this->ips;
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
     * @param array $ips
     */
    public function __construct(int $dataId, int $id, string $startDate, string $endDate, int $price, string $priceType, string $deactivatedOn, string $description, string $runtime, string $name, string $type, int $priceObject, int $serviceGroupId, int $templateId, array $ips)
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
        $ips = (array) $object->ips;

        return new IPv4Bundle($dataId, $id, $startDate, $endDate, $price, $priceType, $deactivatedOn, $description, $runtime, $name, $type, $priceObject, $serviceGroupId, $templateId, $ips);
     }


    /**
     * @param int $serviceId
     * @return array
     * @throws \Exception
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
