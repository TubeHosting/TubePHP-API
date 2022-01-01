<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';



class VPS
{

    private int|null $dataId;

    private int|null $id;

    private string|null $startDate;

    private string|null $endDate;

    private int|null $price;

    private string|null $priceType;

    private string|null $deactivatedOn;

    private string|null $description;

    private string|null $runtime;

    private string|null $name;

    private string|null $type;

    private int|null $priceObject;

    private int|null $serviceGroupId;

    private int|null $templateId;

    private int|null $vpsId;

    private string|null $vpsType;

    private int|null $coreCount;

    private int|null $memory;

    private int|null $diskSpace;

    private string|null $diskType;

    private int|null $nodeId;

    private string|null $lastInstalledSystem;

    private LinkIPv4BundleIPv4|null $primaryIPv4;

    private string|null $osDisplayName;


    /**
     * @return int|null
     */
    public function getDataId(): int|null
    {
         return $this->dataId;
     }

    /**
     * @return int|null
     */
    public function getId(): int|null
    {
         return $this->id;
     }

    /**
     * @return string|null
     */
    public function getStartDate(): string|null
    {
         return $this->startDate;
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
    public function getPrice(): int|null
    {
         return $this->price;
     }

    /**
     * @return string|null
     */
    public function getPriceType(): string|null
    {
         return $this->priceType;
     }

    /**
     * @return string|null
     */
    public function getDeactivatedOn(): string|null
    {
         return $this->deactivatedOn;
     }

    /**
     * @return string|null
     */
    public function getDescription(): string|null
    {
         return $this->description;
     }

    /**
     * @return string|null
     */
    public function getRuntime(): string|null
    {
         return $this->runtime;
     }

    /**
     * @return string|null
     */
    public function getName(): string|null
    {
         return $this->name;
     }

    /**
     * @return string|null
     */
    public function getType(): string|null
    {
         return $this->type;
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
    public function getServiceGroupId(): int|null
    {
         return $this->serviceGroupId;
     }

    /**
     * @return int|null
     */
    public function getTemplateId(): int|null
    {
         return $this->templateId;
     }

    /**
     * @return int|null
     */
    public function getVpsId(): int|null
    {
         return $this->vpsId;
     }

    /**
     * @return string|null
     */
    public function getVpsType(): string|null
    {
         return $this->vpsType;
     }

    /**
     * @return int|null
     */
    public function getCoreCount(): int|null
    {
         return $this->coreCount;
     }

    /**
     * @return int|null
     */
    public function getMemory(): int|null
    {
         return $this->memory;
     }

    /**
     * @return int|null
     */
    public function getDiskSpace(): int|null
    {
         return $this->diskSpace;
     }

    /**
     * @return string|null
     */
    public function getDiskType(): string|null
    {
         return $this->diskType;
     }

    /**
     * @return int|null
     */
    public function getNodeId(): int|null
    {
         return $this->nodeId;
     }

    /**
     * @return string|null
     */
    public function getLastInstalledSystem(): string|null
    {
         return $this->lastInstalledSystem;
     }

    /**
     * @return LinkIPv4BundleIPv4|null
     */
    public function getPrimaryIPv4(): LinkIPv4BundleIPv4|null
    {
         return $this->primaryIPv4;
     }

    /**
     * @return string|null
     */
    public function getOsDisplayName(): string|null
    {
         return $this->osDisplayName;
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
     * @param int|null $serviceGroupId
     * @param int|null $templateId
     * @param int|null $vpsId
     * @param string|null $vpsType
     * @param int|null $coreCount
     * @param int|null $memory
     * @param int|null $diskSpace
     * @param string|null $diskType
     * @param int|null $nodeId
     * @param string|null $lastInstalledSystem
     * @param LinkIPv4BundleIPv4|null $primaryIPv4
     * @param string|null $osDisplayName
     */
    public function __construct(int|null $dataId, int|null $id, string|null $startDate, string|null $endDate, int|null $price, string|null $priceType, string|null $deactivatedOn, string|null $description, string|null $runtime, string|null $name, string|null $type, int|null $priceObject, int|null $serviceGroupId, int|null $templateId, int|null $vpsId, string|null $vpsType, int|null $coreCount, int|null $memory, int|null $diskSpace, string|null $diskType, int|null $nodeId, string|null $lastInstalledSystem, LinkIPv4BundleIPv4|null $primaryIPv4, string|null $osDisplayName)
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
        $this->vpsId = $vpsId;
        $this->vpsType = $vpsType;
        $this->coreCount = $coreCount;
        $this->memory = $memory;
        $this->diskSpace = $diskSpace;
        $this->diskType = $diskType;
        $this->nodeId = $nodeId;
        $this->lastInstalledSystem = $lastInstalledSystem;
        $this->primaryIPv4 = $primaryIPv4;
        $this->osDisplayName = $osDisplayName;
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
        'vpsId' => $this->getVpsId(),
        'vpsType' => $this->getVpsType(),
        'coreCount' => $this->getCoreCount(),
        'memory' => $this->getMemory(),
        'diskSpace' => $this->getDiskSpace(),
        'diskType' => $this->getDiskType(),
        'nodeId' => $this->getNodeId(),
        'lastInstalledSystem' => $this->getLastInstalledSystem(),
        'primaryIPv4' => $this->getPrimaryIPv4(),
        'osDisplayName' => $this->getOsDisplayName(),
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
        }else $dataId = $object->dataId=null;

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->startDate)) {
            $startDate = (string) $object->startDate;
        }else $startDate = $object->startDate=null;

        if (isset($object->endDate)) {
            $endDate = (string) $object->endDate;
        }else $endDate = $object->endDate=null;

        if (isset($object->price)) {
            $price = (int) $object->price;
        }else $price = $object->price=null;

        if (isset($object->priceType)) {
            $priceType = (string) $object->priceType;
        }else $priceType = $object->priceType=null;

        if (isset($object->deactivatedOn)) {
            $deactivatedOn = (string) $object->deactivatedOn;
        }else $deactivatedOn = $object->deactivatedOn=null;

        if (isset($object->description)) {
            $description = (string) $object->description;
        }else $description = $object->description=null;

        if (isset($object->runtime)) {
            $runtime = (string) $object->runtime;
        }else $runtime = $object->runtime=null;

        if (isset($object->name)) {
            $name = (string) $object->name;
        }else $name = $object->name=null;

        if (isset($object->type)) {
            $type = (string) $object->type;
        }else $type = $object->type=null;

        if (isset($object->priceObject)) {
            $priceObject = (int) $object->priceObject;
        }else $priceObject = $object->priceObject=null;

        if (isset($object->serviceGroupId)) {
            $serviceGroupId = (int) $object->serviceGroupId;
        }else $serviceGroupId = $object->serviceGroupId=null;

        if (isset($object->templateId)) {
            $templateId = (int) $object->templateId;
        }else $templateId = $object->templateId=null;

        if (isset($object->vpsId)) {
            $vpsId = (int) $object->vpsId;
        }else $vpsId = $object->vpsId=null;

        if (isset($object->vpsType)) {
            $vpsType = (string) $object->vpsType;
        }else $vpsType = $object->vpsType=null;

        if (isset($object->coreCount)) {
            $coreCount = (int) $object->coreCount;
        }else $coreCount = $object->coreCount=null;

        if (isset($object->memory)) {
            $memory = (int) $object->memory;
        }else $memory = $object->memory=null;

        if (isset($object->diskSpace)) {
            $diskSpace = (int) $object->diskSpace;
        }else $diskSpace = $object->diskSpace=null;

        if (isset($object->diskType)) {
            $diskType = (string) $object->diskType;
        }else $diskType = $object->diskType=null;

        if (isset($object->nodeId)) {
            $nodeId = (int) $object->nodeId;
        }else $nodeId = $object->nodeId=null;

        if (isset($object->lastInstalledSystem)) {
            $lastInstalledSystem = (string) $object->lastInstalledSystem;
        }else $lastInstalledSystem = $object->lastInstalledSystem=null;

        if (isset($object->primaryIPv4)) {
           $primaryIPv4 = LinkIPv4BundleIPv4::fromStdClass((object)$object->primaryIPv4);
        }else $primaryIPv4 = $object->primaryIPv4=null;

        if (isset($object->osDisplayName)) {
            $osDisplayName = (string) $object->osDisplayName;
        }else $osDisplayName = $object->osDisplayName=null;

        return new VPS($dataId, $id, $startDate, $endDate, $price, $priceType, $deactivatedOn, $description, $runtime, $name, $type, $priceObject, $serviceGroupId, $templateId, $vpsId, $vpsType, $coreCount, $memory, $diskSpace, $diskType, $nodeId, $lastInstalledSystem, $primaryIPv4, $osDisplayName);
     }


    /**
     * @param int $serviceId
     * @return string
     * @throws Exceptions\RequestException
     */
    public static function stopServerById(int $serviceId):string 
    {
        $result = TubeAPI::request('POST', '/vps/'.$serviceId.'/stop', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @param int $serviceId
     * @return string
     * @throws Exceptions\RequestException
     */
    public static function startServerById(int $serviceId):string 
    {
        $result = TubeAPI::request('POST', '/vps/'.$serviceId.'/start', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @param int $serviceId
     * @return string
     * @throws Exceptions\RequestException
     */
    public static function shutdownServerById(int $serviceId):string 
    {
        $result = TubeAPI::request('POST', '/vps/'.$serviceId.'/shutdown', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @param int $serviceId
     * @return string
     * @throws Exceptions\RequestException
     */
    public static function restartServerById(int $serviceId):string 
    {
        $result = TubeAPI::request('POST', '/vps/'.$serviceId.'/restart', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @param int $serviceId
     * @param VpsReinstall $vpsReinstall
     * @return string
     * @throws Exceptions\RequestException
     */
    public static function reinstallServerById(int $serviceId,VpsReinstall $vpsReinstall):string 
    {
        $result = TubeAPI::request('POST', '/vps/'.$serviceId.'/reinstall', $vpsReinstall->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param int $serviceId
     * @return  VPS
     * @throws Exceptions\RequestException
     */
    public static function getServerById(int $serviceId): VPS 
    {
        $result = TubeAPI::request('GET', '/vps/'.$serviceId.'', null, TubeAPI::$token);
        return  VPS::fromStdClass(json_decode($result));
    }


    /**
     * @param int $serviceId
     * @return  VpsStatus
     * @throws Exceptions\RequestException
     */
    public static function getServerStatusById(int $serviceId): VpsStatus 
    {
        $result = TubeAPI::request('GET', '/vps/'.$serviceId.'/status', null, TubeAPI::$token);
        return  VpsStatus::fromStdClass(json_decode($result));
    }


    /**
     * @param int $serviceId
     * @param string $timeFrame
     * @return array
     * @throws Exceptions\RequestException
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
     * @return array
     * @throws Exceptions\RequestException
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
     * @return array
     * @throws Exceptions\RequestException
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
