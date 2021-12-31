<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class DedicatedInstance
{

    private User|null $creator;

    private int|null $id;

    private int|null $configurationId;

    private DedicatedConfiguration|null $configuration;

    private string|null $caseType;

    private string|null $startDate;

    private string|null $endDate;

    private int|null $labelId;

    private bool|null $available;

    private array|null $interfaces;

    private array|null $aggregatedInterfaces;

    private array|null $disks;

    private ServerPosition|null $position;

    private array|null $allInterfaces;


    /**
     * @return User|null
     */
    public function getCreator(): User|null
    {
         return $this->creator;
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
    public function getConfigurationId(): int|null
    {
         return $this->configurationId;
     }

    /**
     * @return DedicatedConfiguration|null
     */
    public function getConfiguration(): DedicatedConfiguration|null
    {
         return $this->configuration;
     }

    /**
     * @return string|null
     */
    public function getCaseType(): string|null
    {
         return $this->caseType;
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
    public function getLabelId(): int|null
    {
         return $this->labelId;
     }

    /**
     * @return bool|null
     */
    public function getAvailable(): bool|null
    {
         return $this->available;
     }

    /**
     * @return array|null
     */
    public function getInterfaces(): array|null
    {
         return $this->interfaces;
     }

    /**
     * @return array|null
     */
    public function getAggregatedInterfaces(): array|null
    {
         return $this->aggregatedInterfaces;
     }

    /**
     * @return array|null
     */
    public function getDisks(): array|null
    {
         return $this->disks;
     }

    /**
     * @return ServerPosition|null
     */
    public function getPosition(): ServerPosition|null
    {
         return $this->position;
     }

    /**
     * @return array|null
     */
    public function getAllInterfaces(): array|null
    {
         return $this->allInterfaces;
     }

    /**
     * @param User|null $creator
     * @param int|null $id
     * @param int|null $configurationId
     * @param DedicatedConfiguration|null $configuration
     * @param string|null $caseType
     * @param string|null $startDate
     * @param string|null $endDate
     * @param int|null $labelId
     * @param bool|null $available
     * @param array|null $interfaces
     * @param array|null $aggregatedInterfaces
     * @param array|null $disks
     * @param ServerPosition|null $position
     * @param array|null $allInterfaces
     */
    public function __construct(User|null $creator, int|null $id, int|null $configurationId, DedicatedConfiguration|null $configuration, string|null $caseType, string|null $startDate, string|null $endDate, int|null $labelId, bool|null $available, array|null $interfaces, array|null $aggregatedInterfaces, array|null $disks, ServerPosition|null $position, array|null $allInterfaces)
    {
        $this->creator = $creator;
        $this->id = $id;
        $this->configurationId = $configurationId;
        $this->configuration = $configuration;
        $this->caseType = $caseType;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->labelId = $labelId;
        $this->available = $available;

        //handle objects in array
        $tmpInterfaces = $interfaces;
        $interfaces = [];
        foreach ($tmpInterfaces as $key => $item) {
            $item = PaymentBundle::fromStdClass($item);
            $singleItem = array($key => $item);
            $interfaces = array_merge($interfaces, $singleItem);
        }
        $this->interfaces = $interfaces;

        //handle objects in array
        $tmpAggregatedInterfaces = $aggregatedInterfaces;
        $aggregatedInterfaces = [];
        foreach ($tmpAggregatedInterfaces as $key => $item) {
            $item = PaymentBundle::fromStdClass($item);
            $singleItem = array($key => $item);
            $aggregatedInterfaces = array_merge($aggregatedInterfaces, $singleItem);
        }
        $this->aggregatedInterfaces = $aggregatedInterfaces;

        //handle objects in array
        $tmpDisks = $disks;
        $disks = [];
        foreach ($tmpDisks as $key => $item) {
            $item = PaymentBundle::fromStdClass($item);
            $singleItem = array($key => $item);
            $disks = array_merge($disks, $singleItem);
        }
        $this->disks = $disks;
        $this->position = $position;

        //handle objects in array
        $tmpAllInterfaces = $allInterfaces;
        $allInterfaces = [];
        foreach ($tmpAllInterfaces as $key => $item) {
            $item = PaymentBundle::fromStdClass($item);
            $singleItem = array($key => $item);
            $allInterfaces = array_merge($allInterfaces, $singleItem);
        }
        $this->allInterfaces = $allInterfaces;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'creator' => $this->getCreator(),
        'id' => $this->getId(),
        'configurationId' => $this->getConfigurationId(),
        'configuration' => $this->getConfiguration(),
        'caseType' => $this->getCaseType(),
        'startDate' => $this->getStartDate(),
        'endDate' => $this->getEndDate(),
        'labelId' => $this->getLabelId(),
        'available' => $this->getAvailable(),
        'interfaces' => $this->getInterfaces(),
        'aggregatedInterfaces' => $this->getAggregatedInterfaces(),
        'disks' => $this->getDisks(),
        'position' => $this->getPosition(),
        'allInterfaces' => $this->getAllInterfaces(),
        ];
    }

    /**
     * @param object $object
     * @return DedicatedInstance
     */
    public static function fromStdClass(object $object):DedicatedInstance
    {

        if (isset($object->creator)) {
           $creator = User::fromStdClass((object)$object->creator);
        }else $creator = $object->creator=null;

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->configurationId)) {
            $configurationId = (int) $object->configurationId;
        }else $configurationId = $object->configurationId=null;

        if (isset($object->configuration)) {
           $configuration = DedicatedConfiguration::fromStdClass((object)$object->configuration);
        }else $configuration = $object->configuration=null;

        if (isset($object->caseType)) {
            $caseType = (string) $object->caseType;
        }else $caseType = $object->caseType=null;

        if (isset($object->startDate)) {
            $startDate = (string) $object->startDate;
        }else $startDate = $object->startDate=null;

        if (isset($object->endDate)) {
            $endDate = (string) $object->endDate;
        }else $endDate = $object->endDate=null;

        if (isset($object->labelId)) {
            $labelId = (int) $object->labelId;
        }else $labelId = $object->labelId=null;

        if (isset($object->available)) {
            $available = (bool) $object->available;
        }else $available = $object->available=null;

        if (isset($object->interfaces)) {
            $interfaces = (array) $object->interfaces;
        }else $interfaces = $object->interfaces=null;

        if (isset($object->aggregatedInterfaces)) {
            $aggregatedInterfaces = (array) $object->aggregatedInterfaces;
        }else $aggregatedInterfaces = $object->aggregatedInterfaces=null;

        if (isset($object->disks)) {
            $disks = (array) $object->disks;
        }else $disks = $object->disks=null;

        if (isset($object->position)) {
           $position = ServerPosition::fromStdClass((object)$object->position);
        }else $position = $object->position=null;

        if (isset($object->allInterfaces)) {
            $allInterfaces = (array) $object->allInterfaces;
        }else $allInterfaces = $object->allInterfaces=null;

        return new DedicatedInstance($creator, $id, $configurationId, $configuration, $caseType, $startDate, $endDate, $labelId, $available, $interfaces, $aggregatedInterfaces, $disks, $position, $allInterfaces);
     }
}
