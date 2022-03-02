<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';



class VPS
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

    private $vpsId;

    private $vpsType;

    private $coreCount;

    private $memory;

    private $diskSpace;

    private $diskType;

    private $nodeId;

    private $lastInstalledSystem;

    private $osDisplayName;

    private $primaryIPv4;


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
     * @return ?int
     */
    public function getVpsId(): ?int
    {
         return $this->vpsId;
     }

    /**
     * @return ?string
     */
    public function getVpsType(): ?string
    {
         return $this->vpsType;
     }

    /**
     * @return ?int
     */
    public function getCoreCount(): ?int
    {
         return $this->coreCount;
     }

    /**
     * @return ?int
     */
    public function getMemory(): ?int
    {
         return $this->memory;
     }

    /**
     * @return ?int
     */
    public function getDiskSpace(): ?int
    {
         return $this->diskSpace;
     }

    /**
     * @return ?string
     */
    public function getDiskType(): ?string
    {
         return $this->diskType;
     }

    /**
     * @return ?int
     */
    public function getNodeId(): ?int
    {
         return $this->nodeId;
     }

    /**
     * @return ?string
     */
    public function getLastInstalledSystem(): ?string
    {
         return $this->lastInstalledSystem;
     }

    /**
     * @return ?string
     */
    public function getOsDisplayName(): ?string
    {
         return $this->osDisplayName;
     }

    /**
     * @return ?LinkIPv4BundleIPv4
     */
    public function getPrimaryIPv4(): ?LinkIPv4BundleIPv4
    {
         return $this->primaryIPv4;
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
     * @param int|null $vpsId
     * @param string|null $vpsType
     * @param int|null $coreCount
     * @param int|null $memory
     * @param int|null $diskSpace
     * @param string|null $diskType
     * @param int|null $nodeId
     * @param string|null $lastInstalledSystem
     * @param string|null $osDisplayName
     * @param LinkIPv4BundleIPv4|null $primaryIPv4
     */
    public function __construct(?int $dataId, ?int $id, ?string $startDate, ?string $endDate, ?int $price, ?string $priceType, ?string $deactivatedOn, ?string $description, ?string $runtime, ?string $name, ?string $type, ?int $priceObject, ?int $templateId, ?int $realPrice, ?int $serviceGroupId, ?int $vpsId, ?string $vpsType, ?int $coreCount, ?int $memory, ?int $diskSpace, ?string $diskType, ?int $nodeId, ?string $lastInstalledSystem, ?string $osDisplayName, ?LinkIPv4BundleIPv4 $primaryIPv4)
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
        $this->vpsId = $vpsId;
        $this->vpsType = $vpsType;
        $this->coreCount = $coreCount;
        $this->memory = $memory;
        $this->diskSpace = $diskSpace;
        $this->diskType = $diskType;
        $this->nodeId = $nodeId;
        $this->lastInstalledSystem = $lastInstalledSystem;
        $this->osDisplayName = $osDisplayName;
        $this->primaryIPv4 = $primaryIPv4;
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
        'vpsId' => $this->getVpsId(),
        'vpsType' => $this->getVpsType(),
        'coreCount' => $this->getCoreCount(),
        'memory' => $this->getMemory(),
        'diskSpace' => $this->getDiskSpace(),
        'diskType' => $this->getDiskType(),
        'nodeId' => $this->getNodeId(),
        'lastInstalledSystem' => $this->getLastInstalledSystem(),
        'osDisplayName' => $this->getOsDisplayName(),
        'primaryIPv4' => $this->getPrimaryIPv4(),
        ];
    }

    /**
     * @param object $object
     * @return VPS
     */
    public static function fromStdClass(object $object):VPS
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

        if (isset($object->vpsId)) {
            $vpsId = (int) $object->vpsId;
        }else $vpsId = null;

        if (isset($object->vpsType)) {
            $vpsType = (string) $object->vpsType;
        }else $vpsType = null;

        if (isset($object->coreCount)) {
            $coreCount = (int) $object->coreCount;
        }else $coreCount = null;

        if (isset($object->memory)) {
            $memory = (int) $object->memory;
        }else $memory = null;

        if (isset($object->diskSpace)) {
            $diskSpace = (int) $object->diskSpace;
        }else $diskSpace = null;

        if (isset($object->diskType)) {
            $diskType = (string) $object->diskType;
        }else $diskType = null;

        if (isset($object->nodeId)) {
            $nodeId = (int) $object->nodeId;
        }else $nodeId = null;

        if (isset($object->lastInstalledSystem)) {
            $lastInstalledSystem = (string) $object->lastInstalledSystem;
        }else $lastInstalledSystem = null;

        if (isset($object->osDisplayName)) {
            $osDisplayName = (string) $object->osDisplayName;
        }else $osDisplayName = null;

        if (isset($object->primaryIPv4)) {
           $primaryIPv4 = LinkIPv4BundleIPv4::fromStdClass((object)$object->primaryIPv4);
        }else $primaryIPv4 = null;

        return new VPS($dataId, $id, $startDate, $endDate, $price, $priceType, $deactivatedOn, $description, $runtime, $name, $type, $priceObject, $templateId, $realPrice, $serviceGroupId, $vpsId, $vpsType, $coreCount, $memory, $diskSpace, $diskType, $nodeId, $lastInstalledSystem, $osDisplayName, $primaryIPv4);
     }


    /**
     * @link https://doc.api.tube-hosting.com/#/vps-controller/changeRootPassword
     * @param int $serviceId
     * @param PasswordChange $passwordChange
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function changeRootPassword(int $serviceId,PasswordChange $passwordChange):string 
    {
        $result = TubeAPI::request('PUT', '/vps/'.$serviceId.'/password', $passwordChange->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/vps-controller/stopServerById
     * @param int $serviceId
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function stopServerById(int $serviceId):string 
    {
        $result = TubeAPI::request('POST', '/vps/'.$serviceId.'/stop', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/vps-controller/startServerById
     * @param int $serviceId
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function startServerById(int $serviceId):string 
    {
        $result = TubeAPI::request('POST', '/vps/'.$serviceId.'/start', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/vps-controller/shutdownServerById
     * @param int $serviceId
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function shutdownServerById(int $serviceId):string 
    {
        $result = TubeAPI::request('POST', '/vps/'.$serviceId.'/shutdown', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/vps-controller/restartServerById
     * @param int $serviceId
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function restartServerById(int $serviceId):string 
    {
        $result = TubeAPI::request('POST', '/vps/'.$serviceId.'/restart', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/vps-controller/reinstallServerById
     * @param int $serviceId
     * @param VpsReinstall $vpsReinstall
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function reinstallServerById(int $serviceId,VpsReinstall $vpsReinstall):string 
    {
        $result = TubeAPI::request('POST', '/vps/'.$serviceId.'/reinstall', $vpsReinstall->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/vps-controller/getServerById
     * @param int $serviceId
     * @return  VPS
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getServerById(int $serviceId): VPS 
    {
        $result = TubeAPI::request('GET', '/vps/'.$serviceId.'', null, TubeAPI::$token);
        return  VPS::fromStdClass(json_decode($result));
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/vps-controller/getServerStatusById
     * @param int $serviceId
     * @param bool $cache
     * @return  VpsStatus
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getServerStatusById(int $serviceId, bool $cache = null): VpsStatus 
    {
        $result = TubeAPI::request('GET', '/vps/'.$serviceId.'/status?cache='.$cache.'', null, TubeAPI::$token);
        return  VpsStatus::fromStdClass(json_decode($result));
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/vps-controller/getServerStatisticsById
     * @param int $serviceId
     * @param string $timeFrame
     * @return array
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getServerStatisticsById(int $serviceId, string $timeFrame = ""):array 
    {
        $result = TubeAPI::request('GET', '/vps/'.$serviceId.'/statistics?timeFrame='.$timeFrame.'', null, TubeAPI::$token);
        $tmpResults = json_decode($result);
        //handle objects in array
        $results = [];
        foreach ($tmpResults as $key => $result) {
            $result = RRDDataValue::fromStdClass($result);
            $result = array($key => $result);
            $results = array_merge($results, $result);
        }
        return $results;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/vps-controller/getAvailableLxcOs
     * @return array
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getAvailableLxcOs():array 
    {
        $result = TubeAPI::request('GET', '/vps/os/lxc', null, TubeAPI::$token);
        $tmpResults = json_decode($result);
        //handle objects in array
        $results = [];
        foreach ($tmpResults as $key => $result) {
            $result = LxcOs::fromStdClass($result);
            $result = array($key => $result);
            $results = array_merge($results, $result);
        }
        return $results;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/vps-controller/getAvailableKvmOs
     * @return array
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getAvailableKvmOs():array 
    {
        $result = TubeAPI::request('GET', '/vps/os/kvm', null, TubeAPI::$token);
        $tmpResults = json_decode($result);
        //handle objects in array
        $results = [];
        foreach ($tmpResults as $key => $result) {
            $result = KvmOs::fromStdClass($result);
            $result = array($key => $result);
            $results = array_merge($results, $result);
        }
        return $results;
    }
}
