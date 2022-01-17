<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DedicatedInstance
{

    private $creator;

    private $id;

    private $configurationId;

    private $configuration;

    private $caseType;

    private $startDate;

    private $endDate;

    private $labelId;

    private $available;

    private $interfaces;

    private $aggregatedInterfaces;

    private $disks;

    private $position;


    /**
     * @return ?User
     */
    public function getCreator(): ?User
    {
         return $this->creator;
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
    public function getConfigurationId(): ?int
    {
         return $this->configurationId;
     }

    /**
     * @return ?DedicatedConfiguration
     */
    public function getConfiguration(): ?DedicatedConfiguration
    {
         return $this->configuration;
     }

    /**
     * @return ?string
     */
    public function getCaseType(): ?string
    {
         return $this->caseType;
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
    public function getLabelId(): ?int
    {
         return $this->labelId;
     }

    /**
     * @return ?bool
     */
    public function getAvailable(): ?bool
    {
         return $this->available;
     }

    /**
     * @return ?array
     */
    public function getInterfaces(): ?array
    {
         return $this->interfaces;
     }

    /**
     * @return ?array
     */
    public function getAggregatedInterfaces(): ?array
    {
         return $this->aggregatedInterfaces;
     }

    /**
     * @return ?array
     */
    public function getDisks(): ?array
    {
         return $this->disks;
     }

    /**
     * @return ?ServerPosition
     */
    public function getPosition(): ?ServerPosition
    {
         return $this->position;
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
     */
    public function __construct(?User $creator, ?int $id, ?int $configurationId, ?DedicatedConfiguration $configuration, ?string $caseType, ?string $startDate, ?string $endDate, ?int $labelId, ?bool $available, ?array $interfaces, ?array $aggregatedInterfaces, ?array $disks, ?ServerPosition $position)
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
        if($tmpInterfaces!==null){
            foreach ($tmpInterfaces as $key => $item) {
                $item = SimpleDedicatedInterface::fromStdClass($item);
                $singleItem = array($key => $item);
                $interfaces = array_merge($interfaces, $singleItem);
            }
        }
        $this->interfaces = $interfaces;

        //handle objects in array
        $tmpAggregatedInterfaces = $aggregatedInterfaces;
        $aggregatedInterfaces = [];
        if($tmpAggregatedInterfaces!==null){
            foreach ($tmpAggregatedInterfaces as $key => $item) {
                $item = DedicatedInterfacesAggregated::fromStdClass($item);
                $singleItem = array($key => $item);
                $aggregatedInterfaces = array_merge($aggregatedInterfaces, $singleItem);
            }
        }
        $this->aggregatedInterfaces = $aggregatedInterfaces;

        //handle objects in array
        $tmpDisks = $disks;
        $disks = [];
        if($tmpDisks!==null){
            foreach ($tmpDisks as $key => $item) {
                $item = DedicatedInstanceDiskLink::fromStdClass($item);
                $singleItem = array($key => $item);
                $disks = array_merge($disks, $singleItem);
            }
        }
        $this->disks = $disks;
        $this->position = $position;
    }

    /**
     * @return array
     */
    public function getAsArr():array
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
        }else $creator = null;

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = null;

        if (isset($object->configurationId)) {
            $configurationId = (int) $object->configurationId;
        }else $configurationId = null;

        if (isset($object->configuration)) {
           $configuration = DedicatedConfiguration::fromStdClass((object)$object->configuration);
        }else $configuration = null;

        if (isset($object->caseType)) {
            $caseType = (string) $object->caseType;
        }else $caseType = null;

        if (isset($object->startDate)) {
            $startDate = (string) $object->startDate;
        }else $startDate = null;

        if (isset($object->endDate)) {
            $endDate = (string) $object->endDate;
        }else $endDate = null;

        if (isset($object->labelId)) {
            $labelId = (int) $object->labelId;
        }else $labelId = null;

        if (isset($object->available)) {
            $available = (bool) $object->available;
        }else $available = null;

        if (isset($object->interfaces)) {
            $interfaces = (array) $object->interfaces;
        }else $interfaces = null;

        if (isset($object->aggregatedInterfaces)) {
            $aggregatedInterfaces = (array) $object->aggregatedInterfaces;
        }else $aggregatedInterfaces = null;

        if (isset($object->disks)) {
            $disks = (array) $object->disks;
        }else $disks = null;

        if (isset($object->position)) {
           $position = ServerPosition::fromStdClass((object)$object->position);
        }else $position = null;

        return new DedicatedInstance($creator, $id, $configurationId, $configuration, $caseType, $startDate, $endDate, $labelId, $available, $interfaces, $aggregatedInterfaces, $disks, $position);
     }
}
