<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class SingleServiceGroupData
{

    private int $id;

    private ServiceGroupMetaData $metaData;

    private ServiceGroupData $groupData;

    private string $startDate;

    private string $endDate;


    /**
     * @return int
     */
    public function getId(): int
    {
         return $this->id;
     }

    /**
     * @return ServiceGroupMetaData
     */
    public function getMetaData(): ServiceGroupMetaData
    {
         return $this->metaData;
     }

    /**
     * @return ServiceGroupData
     */
    public function getGroupData(): ServiceGroupData
    {
         return $this->groupData;
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
     * @param int $id
     * @param ServiceGroupMetaData $metaData
     * @param ServiceGroupData $groupData
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct(int $id, ServiceGroupMetaData $metaData, ServiceGroupData $groupData, string $startDate, string $endDate)
    {
        $this->id = $id;
        $this->metaData = $metaData;
        $this->groupData = $groupData;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'id' => $this->getId(),
        'metaData' => $this->getMetaData(),
        'groupData' => $this->getGroupData(),
        'startDate' => $this->getStartDate(),
        'endDate' => $this->getEndDate(),
        ];
    }

    /**
     * @param object $object
     * @return SingleServiceGroupData
     */
    public static function fromStdClass(object $object):SingleServiceGroupData
    {
        $id = (int) $object->id;
        $metaData = ServiceGroupMetaData::fromStdClass((object)$object->metaData);
        $groupData = ServiceGroupData::fromStdClass((object)$object->groupData);
        $startDate = (string) $object->startDate;
        $endDate = (string) $object->endDate;

        return new SingleServiceGroupData($id, $metaData, $groupData, $startDate, $endDate);
     }
}
