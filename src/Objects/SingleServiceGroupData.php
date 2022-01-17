<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class SingleServiceGroupData
{

    private $id;

    private $metaData;

    private $groupData;

    private $startDate;

    private $endDate;


    /**
     * @return ?int
     */
    public function getId(): ?int
    {
         return $this->id;
     }

    /**
     * @return ?ServiceGroupMetaData
     */
    public function getMetaData(): ?ServiceGroupMetaData
    {
         return $this->metaData;
     }

    /**
     * @return ?ServiceGroupData
     */
    public function getGroupData(): ?ServiceGroupData
    {
         return $this->groupData;
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
     * @param int|null $id
     * @param ServiceGroupMetaData|null $metaData
     * @param ServiceGroupData|null $groupData
     * @param string|null $startDate
     * @param string|null $endDate
     */
    public function __construct(?int $id, ?ServiceGroupMetaData $metaData, ?ServiceGroupData $groupData, ?string $startDate, ?string $endDate)
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
    public function getAsArr():array
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
        }else $id = null;

        if (isset($object->metaData)) {
           $metaData = ServiceGroupMetaData::fromStdClass((object)$object->metaData);
        }else $metaData = null;

        if (isset($object->groupData)) {
           $groupData = ServiceGroupData::fromStdClass((object)$object->groupData);
        }else $groupData = null;

        if (isset($object->startDate)) {
            $startDate = (string) $object->startDate;
        }else $startDate = null;

        if (isset($object->endDate)) {
            $endDate = (string) $object->endDate;
        }else $endDate = null;

        return new SingleServiceGroupData($id, $metaData, $groupData, $startDate, $endDate);
     }
}
