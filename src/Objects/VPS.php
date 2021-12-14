<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

require_once __DIR__ . '/Service.php';

class VPS extends Service
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

    private int $vpsId;

    private string $vpsType;

    private int $coreCount;

    private int $memory;

    private int $diskSpace;

    private string $diskType;

    private int $nodeId;

    private string $lastInstalledSystem;

    private LinkIPv4BundleIPv4 $primaryIPv4;

    private string $osDisplayName;


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
     * @return int
     */
    public function getVpsId(): int
    {
         return $this->vpsId;
     }

    /**
     * @return string
     */
    public function getVpsType(): string
    {
         return $this->vpsType;
     }

    /**
     * @return int
     */
    public function getCoreCount(): int
    {
         return $this->coreCount;
     }

    /**
     * @return int
     */
    public function getMemory(): int
    {
         return $this->memory;
     }

    /**
     * @return int
     */
    public function getDiskSpace(): int
    {
         return $this->diskSpace;
     }

    /**
     * @return string
     */
    public function getDiskType(): string
    {
         return $this->diskType;
     }

    /**
     * @return int
     */
    public function getNodeId(): int
    {
         return $this->nodeId;
     }

    /**
     * @return string
     */
    public function getLastInstalledSystem(): string
    {
         return $this->lastInstalledSystem;
     }

    /**
     * @return LinkIPv4BundleIPv4
     */
    public function getPrimaryIPv4(): LinkIPv4BundleIPv4
    {
         return $this->primaryIPv4;
     }

    /**
     * @return string
     */
    public function getOsDisplayName(): string
    {
         return $this->osDisplayName;
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
     * @param int $vpsId
     * @param string $vpsType
     * @param int $coreCount
     * @param int $memory
     * @param int $diskSpace
     * @param string $diskType
     * @param int $nodeId
     * @param string $lastInstalledSystem
     * @param LinkIPv4BundleIPv4 $primaryIPv4
     * @param string $osDisplayName
     */
    public function __construct(int $dataId, int $id, string $startDate, string $endDate, int $price, string $priceType, string $deactivatedOn, string $description, string $runtime, string $name, string $type, int $priceObject, int $serviceGroupId, int $templateId, int $vpsId, string $vpsType, int $coreCount, int $memory, int $diskSpace, string $diskType, int $nodeId, string $lastInstalledSystem, LinkIPv4BundleIPv4 $primaryIPv4, string $osDisplayName)
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
        $vpsId = (int) $object->vpsId;
        $vpsType = (string) $object->vpsType;
        $coreCount = (int) $object->coreCount;
        $memory = (int) $object->memory;
        $diskSpace = (int) $object->diskSpace;
        $diskType = (string) $object->diskType;
        $nodeId = (int) $object->nodeId;
        $lastInstalledSystem = (string) $object->lastInstalledSystem;
        $primaryIPv4 = LinkIPv4BundleIPv4::fromStdClass((object)$object->primaryIPv4);
        $osDisplayName = (string) $object->osDisplayName;

        return new VPS($dataId, $id, $startDate, $endDate, $price, $priceType, $deactivatedOn, $description, $runtime, $name, $type, $priceObject, $serviceGroupId, $templateId, $vpsId, $vpsType, $coreCount, $memory, $diskSpace, $diskType, $nodeId, $lastInstalledSystem, $primaryIPv4, $osDisplayName);
     }


    /**
     * @param int $serviceId
     * @return string
     * @throws \Exception
     */
    public static function stopServerById(int $serviceId):string 
    {
        $result = TubeAPI::request('POST', '/vps/'.$serviceId.'/stop', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @param int $serviceId
     * @return string
     * @throws \Exception
     */
    public static function startServerById(int $serviceId):string 
    {
        $result = TubeAPI::request('POST', '/vps/'.$serviceId.'/start', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @param int $serviceId
     * @return string
     * @throws \Exception
     */
    public static function shutdownServerById(int $serviceId):string 
    {
        $result = TubeAPI::request('POST', '/vps/'.$serviceId.'/shutdown', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @param int $serviceId
     * @return string
     * @throws \Exception
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
     * @throws \Exception
     */
    public static function reinstallServerById(int $serviceId,VpsReinstall $vpsReinstall):string 
    {
        $result = TubeAPI::request('POST', '/vps/'.$serviceId.'/reinstall', $vpsReinstall->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param int $serviceId
     * @return  VPS
     * @throws \Exception
     */
    public static function getServerById(int $serviceId): VPS 
    {
        $result = TubeAPI::request('GET', '/vps/'.$serviceId.'', null, TubeAPI::$token);
        return  VPS::fromStdClass(json_decode($result));
    }


    /**
     * @param int $serviceId
     * @return  VpsStatus
     * @throws \Exception
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
     * @throws \Exception
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
     * @throws \Exception
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
     * @throws \Exception
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
