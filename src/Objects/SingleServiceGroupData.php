<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class SingleServiceGroupData
{

    private int|null $id;

    private ServiceGroupMetaData|null $metaData;

    private ServiceGroupData|null $groupData;

    private string|null $startDate;

    private string|null $endDate;


    /**
     * @return int|null
     */
    public function getId(): int|null
    {
         return $this->id;
     }

    /**
     * @return ServiceGroupMetaData|null
     */
    public function getMetaData(): ServiceGroupMetaData|null
    {
         return $this->metaData;
     }

    /**
     * @return ServiceGroupData|null
     */
    public function getGroupData(): ServiceGroupData|null
    {
         return $this->groupData;
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
     * @param int|null $id
     * @param ServiceGroupMetaData|null $metaData
     * @param ServiceGroupData|null $groupData
     * @param string|null $startDate
     * @param string|null $endDate
     */
    public function __construct(int|null $id, ServiceGroupMetaData|null $metaData, ServiceGroupData|null $groupData, string|null $startDate, string|null $endDate)
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

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->metaData)) {
           $metaData = ServiceGroupMetaData::fromStdClass((object)$object->metaData);
        }else $metaData = $object->metaData=null;

        if (isset($object->groupData)) {
           $groupData = ServiceGroupData::fromStdClass((object)$object->groupData);
        }else $groupData = $object->groupData=null;

        if (isset($object->startDate)) {
            $startDate = (string) $object->startDate;
        }else $startDate = $object->startDate=null;

        if (isset($object->endDate)) {
            $endDate = (string) $object->endDate;
        }else $endDate = $object->endDate=null;

        return new SingleServiceGroupData($id, $metaData, $groupData, $startDate, $endDate);
     }
}
