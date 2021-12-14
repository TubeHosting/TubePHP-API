<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class Template
{

    private string $startDate;

    private int $id;

    private int $price;

    private string $serviceType;

    private int $dataId;


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
     * @param string $startDate
     * @param int $id
     * @param int $price
     * @param string $serviceType
     * @param int $dataId
     */
    public function __construct(string $startDate, int $id, int $price, string $serviceType, int $dataId)
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
        $startDate = (string) $object->startDate;
        $id = (int) $object->id;
        $price = (int) $object->price;
        $serviceType = (string) $object->serviceType;
        $dataId = (int) $object->dataId;

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
