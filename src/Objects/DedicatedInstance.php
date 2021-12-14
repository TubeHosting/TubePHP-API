<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class DedicatedInstance
{

    private User $creator;

    private int $id;

    private int $configurationId;

    private DedicatedConfiguration $configuration;

    private string $caseType;

    private string $startDate;

    private string $endDate;

    private int $labelId;

    private bool $available;

    private array $interfaces;

    private array $aggregatedInterfaces;

    private array $disks;

    private ServerPosition $position;

    private array $allInterfaces;


    /**
     * @return User
     */
    public function getCreator(): User
    {
         return $this->creator;
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
    public function getConfigurationId(): int
    {
         return $this->configurationId;
     }

    /**
     * @return DedicatedConfiguration
     */
    public function getConfiguration(): DedicatedConfiguration
    {
         return $this->configuration;
     }

    /**
     * @return string
     */
    public function getCaseType(): string
    {
         return $this->caseType;
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
    public function getLabelId(): int
    {
         return $this->labelId;
     }

    /**
     * @return bool
     */
    public function getAvailable(): bool
    {
         return $this->available;
     }

    /**
     * @return array
     */
    public function getInterfaces(): array
    {
         return $this->interfaces;
     }

    /**
     * @return array
     */
    public function getAggregatedInterfaces(): array
    {
         return $this->aggregatedInterfaces;
     }

    /**
     * @return array
     */
    public function getDisks(): array
    {
         return $this->disks;
     }

    /**
     * @return ServerPosition
     */
    public function getPosition(): ServerPosition
    {
         return $this->position;
     }

    /**
     * @return array
     */
    public function getAllInterfaces(): array
    {
         return $this->allInterfaces;
     }

    /**
     * @param User $creator
     * @param int $id
     * @param int $configurationId
     * @param DedicatedConfiguration $configuration
     * @param string $caseType
     * @param string $startDate
     * @param string $endDate
     * @param int $labelId
     * @param bool $available
     * @param array $interfaces
     * @param array $aggregatedInterfaces
     * @param array $disks
     * @param ServerPosition $position
     * @param array $allInterfaces
     */
    public function __construct(User $creator, int $id, int $configurationId, DedicatedConfiguration $configuration, string $caseType, string $startDate, string $endDate, int $labelId, bool $available, array $interfaces, array $aggregatedInterfaces, array $disks, ServerPosition $position, array $allInterfaces)
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
        $creator = User::fromStdClass((object)$object->creator);
        $id = (int) $object->id;
        $configurationId = (int) $object->configurationId;
        $configuration = DedicatedConfiguration::fromStdClass((object)$object->configuration);
        $caseType = (string) $object->caseType;
        $startDate = (string) $object->startDate;
        $endDate = (string) $object->endDate;
        $labelId = (int) $object->labelId;
        $available = (bool) $object->available;
        $interfaces = (array) $object->interfaces;
        $aggregatedInterfaces = (array) $object->aggregatedInterfaces;
        $disks = (array) $object->disks;
        $position = ServerPosition::fromStdClass((object)$object->position);
        $allInterfaces = (array) $object->allInterfaces;

        return new DedicatedInstance($creator, $id, $configurationId, $configuration, $caseType, $startDate, $endDate, $labelId, $available, $interfaces, $aggregatedInterfaces, $disks, $position, $allInterfaces);
     }
}
