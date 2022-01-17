<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class ServiceGroupData
{

    private $price;

    private $endDate;

    private $position;

    private $id;

    private $serviceGroupId;

    private $startDate;

    private $templateGroup;

    private $templateGroupId;

    private $runtimeInterval;

    private $services;

    private $name;

    private $active;

    private $priceObject;

    private $realPrice;


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
    public function getEndDate(): ?string
    {
         return $this->endDate;
     }

    /**
     * @return ?int
     */
    public function getPosition(): ?int
    {
         return $this->position;
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
    public function getServiceGroupId(): ?int
    {
         return $this->serviceGroupId;
     }

    /**
     * @return ?string
     */
    public function getStartDate(): ?string
    {
         return $this->startDate;
     }

    /**
     * @return ?TemplateGroup
     */
    public function getTemplateGroup(): ?TemplateGroup
    {
         return $this->templateGroup;
     }

    /**
     * @return ?int
     */
    public function getTemplateGroupId(): ?int
    {
         return $this->templateGroupId;
     }

    /**
     * @return ?int
     */
    public function getRuntimeInterval(): ?int
    {
         return $this->runtimeInterval;
     }

    /**
     * @return ?array
     */
    public function getServices(): ?array
    {
         return $this->services;
     }

    /**
     * @return ?string
     */
    public function getName(): ?string
    {
         return $this->name;
     }

    /**
     * @return ?bool
     */
    public function getActive(): ?bool
    {
         return $this->active;
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
    public function getRealPrice(): ?int
    {
         return $this->realPrice;
     }

    /**
     * @param int|null $price
     * @param string|null $endDate
     * @param int|null $position
     * @param int|null $id
     * @param int|null $serviceGroupId
     * @param string|null $startDate
     * @param TemplateGroup|null $templateGroup
     * @param int|null $templateGroupId
     * @param int|null $runtimeInterval
     * @param array|null $services
     * @param string|null $name
     * @param bool|null $active
     * @param int|null $priceObject
     * @param int|null $realPrice
     */
    public function __construct(?int $price, ?string $endDate, ?int $position, ?int $id, ?int $serviceGroupId, ?string $startDate, ?TemplateGroup $templateGroup, ?int $templateGroupId, ?int $runtimeInterval, ?array $services, ?string $name, ?bool $active, ?int $priceObject, ?int $realPrice)
    {
        $this->price = $price;
        $this->endDate = $endDate;
        $this->position = $position;
        $this->id = $id;
        $this->serviceGroupId = $serviceGroupId;
        $this->startDate = $startDate;
        $this->templateGroup = $templateGroup;
        $this->templateGroupId = $templateGroupId;
        $this->runtimeInterval = $runtimeInterval;

        //handle objects in array with multiple possible objects
        $tmpServices = $services;
        $services = [];
        if($tmpServices!==null){
            foreach ($tmpServices as $key => $item) {
                switch ((string)((array)$item)['type']){
                   case "DEDICATED":
                       $item = Dedicated::fromStdClass($item);
                        break;
                   case "IPV4BUNDLE":
                       $item = IPv4Bundle::fromStdClass($item);
                        break;
                   case "VPS":
                       $item = VPS::fromStdClass($item);
                        break;
                }
                $singleItem = array($key => $item);
                $services = array_merge($services, $singleItem);
            }
        }
        $this->services = $services;
        $this->name = $name;
        $this->active = $active;
        $this->priceObject = $priceObject;
        $this->realPrice = $realPrice;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'price' => $this->getPrice(),
        'endDate' => $this->getEndDate(),
        'position' => $this->getPosition(),
        'id' => $this->getId(),
        'serviceGroupId' => $this->getServiceGroupId(),
        'startDate' => $this->getStartDate(),
        'templateGroup' => $this->getTemplateGroup(),
        'templateGroupId' => $this->getTemplateGroupId(),
        'runtimeInterval' => $this->getRuntimeInterval(),
        'services' => $this->getServices(),
        'name' => $this->getName(),
        'active' => $this->getActive(),
        'priceObject' => $this->getPriceObject(),
        'realPrice' => $this->getRealPrice(),
        ];
    }

    /**
     * @param object $object
     * @return ServiceGroupData
     */
    public static function fromStdClass(object $object):ServiceGroupData
    {

        if (isset($object->price)) {
            $price = (int) $object->price;
        }else $price = null;

        if (isset($object->endDate)) {
            $endDate = (string) $object->endDate;
        }else $endDate = null;

        if (isset($object->position)) {
            $position = (int) $object->position;
        }else $position = null;

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = null;

        if (isset($object->serviceGroupId)) {
            $serviceGroupId = (int) $object->serviceGroupId;
        }else $serviceGroupId = null;

        if (isset($object->startDate)) {
            $startDate = (string) $object->startDate;
        }else $startDate = null;

        if (isset($object->templateGroup)) {
           $templateGroup = TemplateGroup::fromStdClass((object)$object->templateGroup);
        }else $templateGroup = null;

        if (isset($object->templateGroupId)) {
            $templateGroupId = (int) $object->templateGroupId;
        }else $templateGroupId = null;

        if (isset($object->runtimeInterval)) {
            $runtimeInterval = (int) $object->runtimeInterval;
        }else $runtimeInterval = null;

        if (isset($object->services)) {
            $services = (array) $object->services;
        }else $services = null;

        if (isset($object->name)) {
            $name = (string) $object->name;
        }else $name = null;

        if (isset($object->active)) {
            $active = (bool) $object->active;
        }else $active = null;

        if (isset($object->priceObject)) {
            $priceObject = (int) $object->priceObject;
        }else $priceObject = null;

        if (isset($object->realPrice)) {
            $realPrice = (int) $object->realPrice;
        }else $realPrice = null;

        return new ServiceGroupData($price, $endDate, $position, $id, $serviceGroupId, $startDate, $templateGroup, $templateGroupId, $runtimeInterval, $services, $name, $active, $priceObject, $realPrice);
     }


    /**
     * @link https://doc.api.tube-hosting.com/#/service-group-controller/acceptSecondaryOwner
     * @param int $serviceGroupId
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function acceptSecondaryOwner(int $serviceGroupId):string 
    {
        $result = TubeAPI::request('PUT', '/servicegroups/'.$serviceGroupId.'/secondaryowners/accept', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/service-group-controller/extendServiceGroup
     * @param int $serviceGroupId
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function extendServiceGroup(int $serviceGroupId):string 
    {
        $result = TubeAPI::request('PUT', '/servicegroups/'.$serviceGroupId.'/extend', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/service-group-controller/getSecondaryOwners
     * @param int $serviceGroupId
     * @return array
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getSecondaryOwners(int $serviceGroupId):array 
    {
        $result = TubeAPI::request('GET', '/servicegroups/'.$serviceGroupId.'/secondaryowners', null, TubeAPI::$token);
        $tmpResults = json_decode($result);
        //handle objects in array
        $results = [];
        foreach ($tmpResults as $key => $result) {
            $result = SecondaryOwner::fromStdClass($result);
            $result = array($key => $result);
            $results = array_merge($results, $result);
        }
        return $results;
    }
    /**
     * @link https://doc.api.tube-hosting.com/#/service-group-controller/addSecondaryOwners
     * @param int $serviceGroupId
     * @param array $array
     * @return array
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function addSecondaryOwners(int $serviceGroupId,array $array):array 
    {
        $result = TubeAPI::request('POST', '/servicegroups/'.$serviceGroupId.'/secondaryowners', $array, TubeAPI::$token);
        return json_decode($result);
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/service-group-controller/getServiceByServiceGroupByID
     * @param int $serviceGroupId
     * @param int $serviceId
     * @return object
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getServiceByServiceGroupByID(int $serviceGroupId, int $serviceId):object 
    {
        $result = TubeAPI::request('GET', '/servicegroups/'.$serviceGroupId.'/service/'.$serviceId.'', null, TubeAPI::$token);
        $result = json_decode($result);
        if(((array)$result)['type'] === "Service") return  Service::fromStdClass($result);
        if(((array)$result)['type'] === "Dedicated") return  Dedicated::fromStdClass($result);
        if(((array)$result)['type'] === "IPv4Bundle") return  IPv4Bundle::fromStdClass($result);
        if(((array)$result)['type'] === "VPS") return  VPS::fromStdClass($result);
        return new \stdClass();
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/service-group-controller/getDDoSIncidentsOfServiceGroup
     * @param int $serviceGroupId
     * @return array
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getDDoSIncidentsOfServiceGroup(int $serviceGroupId):array 
    {
        $result = TubeAPI::request('GET', '/servicegroups/'.$serviceGroupId.'/ddos/incidents', null, TubeAPI::$token);
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


    /**
     * @link https://doc.api.tube-hosting.com/#/service-group-controller/getServiceGroupByID
     * @param int $serviceGroupId
     * @return  SingleServiceGroupData
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getServiceGroupByID(int $serviceGroupId): SingleServiceGroupData 
    {
        $result = TubeAPI::request('GET', '/servicegroups/'.$serviceGroupId.'/current', null, TubeAPI::$token);
        return  SingleServiceGroupData::fromStdClass(json_decode($result));
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/service-group-controller/getInvites
     * @return array
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getInvites():array 
    {
        $result = TubeAPI::request('GET', '/servicegroups/invites', null, TubeAPI::$token);
        $tmpResults = json_decode($result);
        //handle objects in array
        $results = [];
        foreach ($tmpResults as $key => $result) {
            $result = ServiceGroupInvite::fromStdClass($result);
            $result = array($key => $result);
            $results = array_merge($results, $result);
        }
        return $results;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/service-group-controller/getAllServiceGroupsFromUser
     * @param bool $primaryOnly
     * @return array
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getAllServiceGroupsFromUser(bool $primaryOnly = null):array 
    {
        $result = TubeAPI::request('GET', '/servicegroups/currents?primaryOnly='.$primaryOnly.'', null, TubeAPI::$token);
        $tmpResults = json_decode($result);
        //handle objects in array
        $results = [];
        foreach ($tmpResults as $key => $result) {
            $result = SingleServiceGroupData::fromStdClass($result);
            $result = array($key => $result);
            $results = array_merge($results, $result);
        }
        return $results;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/service-group-controller/deleteSecondaryOwners
     * @param int $serviceGroupId
     * @param int $userId
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function deleteSecondaryOwners(int $serviceGroupId, int $userId):string 
    {
        $result = TubeAPI::request('DELETE', '/servicegroups/'.$serviceGroupId.'/secondaryowners/'.$userId.'', null, TubeAPI::$token);
        return $result;
    }
}
