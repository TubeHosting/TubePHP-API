<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class Template
{

    private $startDate;

    private $id;

    private $price;

    private $dataId;

    private $serviceType;


    /**
     * @return ?string
     */
    public function getStartDate(): ?string
    {
         return $this->startDate;
     }

    /**
     * @return ?int
     */
    public function getId(): ?int
    {
         return $this->id;
     }

    /**
     * @return ?int
     */
    public function getPrice(): ?int
    {
         return $this->price;
     }

    /**
     * @return ?int
     */
    public function getDataId(): ?int
    {
         return $this->dataId;
     }

    /**
     * @return ?string
     */
    public function getServiceType(): ?string
    {
         return $this->serviceType;
     }

    /**
     * @param string|null $startDate
     * @param int|null $id
     * @param int|null $price
     * @param int|null $dataId
     * @param string|null $serviceType
     */
    public function __construct(?string $startDate, ?int $id, ?int $price, ?int $dataId, ?string $serviceType)
    {
        $this->startDate = $startDate;
        $this->id = $id;
        $this->price = $price;
        $this->dataId = $dataId;
        $this->serviceType = $serviceType;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'startDate' => $this->getStartDate(),
        'id' => $this->getId(),
        'price' => $this->getPrice(),
        'dataId' => $this->getDataId(),
        'serviceType' => $this->getServiceType(),
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
        }else $startDate = null;

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = null;

        if (isset($object->price)) {
            $price = (int) $object->price;
        }else $price = null;

        if (isset($object->dataId)) {
            $dataId = (int) $object->dataId;
        }else $dataId = null;

        if (isset($object->serviceType)) {
            $serviceType = (string) $object->serviceType;
        }else $serviceType = null;

        return new Template($startDate, $id, $price, $dataId, $serviceType);
     }


    /**
     * @link https://doc.api.tube-hosting.com/#/template-controller/getTemplateGroups
     * @return array
     * @throws \TubeAPI\Exceptions\RequestException
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
