<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class Template
{

    private string|null $startDate;

    private int|null $id;

    private int|null $price;

    private string|null $serviceType;

    private int|null $dataId;


    /**
     * @return string|null
     */
    public function getStartDate(): string|null
    {
         return $this->startDate;
     }

    /**
     * @return int|null
     */
    public function getId(): int|null
    {
         return $this->id;
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
    public function getServiceType(): string|null
    {
         return $this->serviceType;
     }

    /**
     * @return int|null
     */
    public function getDataId(): int|null
    {
         return $this->dataId;
     }

    /**
     * @param string|null $startDate
     * @param int|null $id
     * @param int|null $price
     * @param string|null $serviceType
     * @param int|null $dataId
     */
    public function __construct(string|null $startDate, int|null $id, int|null $price, string|null $serviceType, int|null $dataId)
    {
        $this->startDate = $startDate;
        $this->id = $id;
        $this->price = $price;
        $this->serviceType = $serviceType;
        $this->dataId = $dataId;
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
        ];
    }

    /**
     * @param object $object
     * @return Template
     */
    public static function fromStdClass(object $object):Template
    {

        if (isset($object->startDate)) {
            $startDate = (string) $object->startDate;
        }else $startDate = $object->startDate=null;

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->price)) {
            $price = (int) $object->price;
        }else $price = $object->price=null;

        if (isset($object->serviceType)) {
            $serviceType = (string) $object->serviceType;
        }else $serviceType = $object->serviceType=null;

        if (isset($object->dataId)) {
            $dataId = (int) $object->dataId;
        }else $dataId = $object->dataId=null;

        return new Template($startDate, $id, $price, $serviceType, $dataId);
     }


    /**
     * @return array
     * @throws \Exception
     */
    public static function getTemplateGroups():array 
    {
        $result = TubeAPI::request('GET', '/templategroups', null, TubeAPI::$token);
        $tmpResults = json_decode($result);
        //handle objects in array
        $results = [];
        foreach ($tmpResults as $key => $result) {
            $result = TemplateGroup::fromStdClass($result);
            $result = array($key => $result);
            $results = array_merge($results, $result);
        }
        return $results;
    }
}
