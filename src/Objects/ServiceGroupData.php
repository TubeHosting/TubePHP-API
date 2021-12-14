<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class ServiceGroupData
{

    private int $price;

    private string $endDate;

    private int $position;

    private int $id;

    private int $serviceGroupId;

    private string $startDate;

    private TemplateGroup $templateGroup;

    private int $templateGroupId;

    private int $runtimeInterval;

    private array $services;

    private string $name;

    private bool $active;

    private int $priceObject;

    private int $realPrice;


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
    public function getEndDate(): string
    {
         return $this->endDate;
     }

    /**
     * @return int
     */
    public function getPosition(): int
    {
         return $this->position;
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
    public function getServiceGroupId(): int
    {
         return $this->serviceGroupId;
     }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
         return $this->startDate;
     }

    /**
     * @return TemplateGroup
     */
    public function getTemplateGroup(): TemplateGroup
    {
         return $this->templateGroup;
     }

    /**
     * @return int
     */
    public function getTemplateGroupId(): int
    {
         return $this->templateGroupId;
     }

    /**
     * @return int
     */
    public function getRuntimeInterval(): int
    {
         return $this->runtimeInterval;
     }

    /**
     * @return array
     */
    public function getServices(): array
    {
         return $this->services;
     }

    /**
     * @return string
     */
    public function getName(): string
    {
         return $this->name;
     }

    /**
     * @return bool
     */
    public function getActive(): bool
    {
         return $this->active;
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
    public function getRealPrice(): int
    {
         return $this->realPrice;
     }

    /**
     * @param int $price
     * @param string $endDate
     * @param int $position
     * @param int $id
     * @param int $serviceGroupId
     * @param string $startDate
     * @param TemplateGroup $templateGroup
     * @param int $templateGroupId
     * @param int $runtimeInterval
     * @param array $services
     * @param string $name
     * @param bool $active
     * @param int $priceObject
     * @param int $realPrice
     */
    public function __construct(int $price, string $endDate, int $position, int $id, int $serviceGroupId, string $startDate, TemplateGroup $templateGroup, int $templateGroupId, int $runtimeInterval, array $services, string $name, bool $active, int $priceObject, int $realPrice)
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
        $price = (int) $object->price;
        $endDate = (string) $object->endDate;
        $position = (int) $object->position;
        $id = (int) $object->id;
        $serviceGroupId = (int) $object->serviceGroupId;
        $startDate = (string) $object->startDate;
        $templateGroup = TemplateGroup::fromStdClass((object)$object->templateGroup);
        $templateGroupId = (int) $object->templateGroupId;
        $runtimeInterval = (int) $object->runtimeInterval;
        $services = (array) $object->services;
        $name = (string) $object->name;
        $active = (bool) $object->active;
        $priceObject = (int) $object->priceObject;
        $realPrice = (int) $object->realPrice;

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
