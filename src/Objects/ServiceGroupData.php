<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class ServiceGroupData
{

    private int|null $price;

    private string|null $endDate;

    private int|null $position;

    private int|null $id;

    private int|null $serviceGroupId;

    private string|null $startDate;

    private TemplateGroup|null $templateGroup;

    private int|null $templateGroupId;

    private int|null $runtimeInterval;

    private array|null $services;

    private string|null $name;

    private bool|null $active;

    private int|null $priceObject;

    private int|null $realPrice;


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
    public function getEndDate(): string|null
    {
         return $this->endDate;
     }

    /**
     * @return int|null
     */
    public function getPosition(): int|null
    {
         return $this->position;
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
    public function getServiceGroupId(): int|null
    {
         return $this->serviceGroupId;
     }

    /**
     * @return string|null
     */
    public function getStartDate(): string|null
    {
         return $this->startDate;
     }

    /**
     * @return TemplateGroup|null
     */
    public function getTemplateGroup(): TemplateGroup|null
    {
         return $this->templateGroup;
     }

    /**
     * @return int|null
     */
    public function getTemplateGroupId(): int|null
    {
         return $this->templateGroupId;
     }

    /**
     * @return int|null
     */
    public function getRuntimeInterval(): int|null
    {
         return $this->runtimeInterval;
     }

    /**
     * @return array|null
     */
    public function getServices(): array|null
    {
         return $this->services;
     }

    /**
     * @return string|null
     */
    public function getName(): string|null
    {
         return $this->name;
     }

    /**
     * @return bool|null
     */
    public function getActive(): bool|null
    {
         return $this->active;
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
    public function getRealPrice(): int|null
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
    public function __construct(int|null $price, string|null $endDate, int|null $position, int|null $id, int|null $serviceGroupId, string|null $startDate, TemplateGroup|null $templateGroup, int|null $templateGroupId, int|null $runtimeInterval, array|null $services, string|null $name, bool|null $active, int|null $priceObject, int|null $realPrice)
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
        $this->services = $services;
        $this->name = $name;
        $this->active = $active;
        $this->priceObject = $priceObject;
        $this->realPrice = $realPrice;
    }

    /**
     * @return array
     */
    public function getAsArr()
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
        }else $price = $object->price=null;

        if (isset($object->endDate)) {
            $endDate = (string) $object->endDate;
        }else $endDate = $object->endDate=null;

        if (isset($object->position)) {
            $position = (int) $object->position;
        }else $position = $object->position=null;

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->serviceGroupId)) {
            $serviceGroupId = (int) $object->serviceGroupId;
        }else $serviceGroupId = $object->serviceGroupId=null;

        if (isset($object->startDate)) {
            $startDate = (string) $object->startDate;
        }else $startDate = $object->startDate=null;

        if (isset($object->templateGroup)) {
           $templateGroup = TemplateGroup::fromStdClass((object)$object->templateGroup);
        }else $templateGroup = $object->templateGroup=null;

        if (isset($object->templateGroupId)) {
            $templateGroupId = (int) $object->templateGroupId;
        }else $templateGroupId = $object->templateGroupId=null;

        if (isset($object->runtimeInterval)) {
            $runtimeInterval = (int) $object->runtimeInterval;
        }else $runtimeInterval = $object->runtimeInterval=null;

        if (isset($object->services)) {
            $services = (array) $object->services;
        }else $services = $object->services=null;

        if (isset($object->name)) {
            $name = (string) $object->name;
        }else $name = $object->name=null;

        if (isset($object->active)) {
            $active = (bool) $object->active;
        }else $active = $object->active=null;

        if (isset($object->priceObject)) {
            $priceObject = (int) $object->priceObject;
        }else $priceObject = $object->priceObject=null;

        if (isset($object->realPrice)) {
            $realPrice = (int) $object->realPrice;
        }else $realPrice = $object->realPrice=null;

        return new ServiceGroupData($price, $endDate, $position, $id, $serviceGroupId, $startDate, $templateGroup, $templateGroupId, $runtimeInterval, $services, $name, $active, $priceObject, $realPrice);
     }


    /**
     * @param int $serviceGroupId
     * @return string
     * @throws \Exception
     */
    public static function acceptSecondaryOwner(int $serviceGroupId):string 
    {
        $result = TubeAPI::request('PUT', '/servicegroups/'.$serviceGroupId.'/secondaryowners/accept', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @param int $serviceGroupId
     * @return string
     * @throws \Exception
     */
    public static function extendServiceGroup(int $serviceGroupId):string 
    {
        $result = TubeAPI::request('PUT', '/servicegroups/'.$serviceGroupId.'/extend', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @param int $serviceGroupId
     * @return array
     * @throws \Exception
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
     * @param int $serviceGroupId
     * @param array $array
     * @return array
     * @throws \Exception
     */
    public static function addSecondaryOwners(int $serviceGroupId,array $array):array 
    {
        $result = TubeAPI::request('POST', '/servicegroups/'.$serviceGroupId.'/secondaryowners', $array, TubeAPI::$token);
        return json_decode($result);
    }


    /**
     * @param int $serviceGroupId
     * @param int $serviceId
     * @return object
     * @throws \Exception
     */
    public static function getServiceByServiceGroupByID(int $serviceGroupId, int $serviceId):object 
    {
        $result = TubeAPI::request('GET', '/servicegroups/'.$serviceGroupId.'/service/'.$serviceId.'', null, TubeAPI::$token);
        if(((array)$result)['type'] === "Service") return  Service::fromStdClass($result);
        if(((array)$result)['type'] === "Dedicated") return  Dedicated::fromStdClass($result);
        if(((array)$result)['type'] === "IPv4Bundle") return  IPv4Bundle::fromStdClass($result);
        if(((array)$result)['type'] === "VPS") return  VPS::fromStdClass($result);
        return new \stdClass();
    }


    /**
     * @param int $serviceGroupId
     * @return array
     * @throws \Exception
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
     * @param int $serviceGroupId
     * @return  SingleServiceGroupData
     * @throws \Exception
     */
    public static function getServiceGroupByID(int $serviceGroupId): SingleServiceGroupData 
    {
        $result = TubeAPI::request('GET', '/servicegroups/'.$serviceGroupId.'/current', null, TubeAPI::$token);
        return  SingleServiceGroupData::fromStdClass(json_decode($result));
    }


    /**
     * @return array
     * @throws \Exception
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
     * @param bool $primaryOnly
     * @return array
     * @throws \Exception
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
     * @param int $serviceGroupId
     * @param int $userId
     * @return string
     * @throws \Exception
     */
    public static function deleteSecondaryOwners(int $serviceGroupId, int $userId):string 
    {
        $result = TubeAPI::request('DELETE', '/servicegroups/'.$serviceGroupId.'/secondaryowners/'.$userId.'', null, TubeAPI::$token);
        return $result;
    }
}
