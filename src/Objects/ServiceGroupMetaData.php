<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class ServiceGroupMetaData
{

    private int|null $id;

    private string|null $status;

    private string|null $deletionDate;

    private string|null $deactivationDate;

    private string|null $runtime;

    private string|null $startDate;

    private SimpleUser|null $owner;

    private string|null $endDate;

    private int|null $position;


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
    public function getStatus(): string|null
    {
         return $this->status;
     }

    /**
     * @return string|null
     */
    public function getDeletionDate(): string|null
    {
         return $this->deletionDate;
     }

    /**
     * @return string|null
     */
    public function getDeactivationDate(): string|null
    {
         return $this->deactivationDate;
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
    public function getStartDate(): string|null
    {
         return $this->startDate;
     }

    /**
     * @return SimpleUser|null
     */
    public function getOwner(): SimpleUser|null
    {
         return $this->owner;
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
    public function getPosition(): int|null
    {
         return $this->position;
     }

    /**
     * @param int|null $id
     * @param string|null $status
     * @param string|null $deletionDate
     * @param string|null $deactivationDate
     * @param string|null $runtime
     * @param string|null $startDate
     * @param SimpleUser|null $owner
     * @param string|null $endDate
     * @param int|null $position
     */
    public function __construct(int|null $id, string|null $status, string|null $deletionDate, string|null $deactivationDate, string|null $runtime, string|null $startDate, SimpleUser|null $owner, string|null $endDate, int|null $position)
    {
        $this->id = $id;
        $this->status = $status;
        $this->deletionDate = $deletionDate;
        $this->deactivationDate = $deactivationDate;
        $this->runtime = $runtime;
        $this->startDate = $startDate;
        $this->owner = $owner;
        $this->endDate = $endDate;
        $this->position = $position;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'id' => $this->getId(),
        'status' => $this->getStatus(),
        'deletionDate' => $this->getDeletionDate(),
        'deactivationDate' => $this->getDeactivationDate(),
        'runtime' => $this->getRuntime(),
        'startDate' => $this->getStartDate(),
        'owner' => $this->getOwner(),
        'endDate' => $this->getEndDate(),
        'position' => $this->getPosition(),
        ];
    }

    /**
     * @param object $object
     * @return ServiceGroupMetaData
     */
    public static function fromStdClass(object $object):ServiceGroupMetaData
    {

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->status)) {
            $status = (string) $object->status;
        }else $status = $object->status=null;

        if (isset($object->deletionDate)) {
            $deletionDate = (string) $object->deletionDate;
        }else $deletionDate = $object->deletionDate=null;

        if (isset($object->deactivationDate)) {
            $deactivationDate = (string) $object->deactivationDate;
        }else $deactivationDate = $object->deactivationDate=null;

        if (isset($object->runtime)) {
            $runtime = (string) $object->runtime;
        }else $runtime = $object->runtime=null;

        if (isset($object->startDate)) {
            $startDate = (string) $object->startDate;
        }else $startDate = $object->startDate=null;

        if (isset($object->owner)) {
           $owner = SimpleUser::fromStdClass((object)$object->owner);
        }else $owner = $object->owner=null;

        if (isset($object->endDate)) {
            $endDate = (string) $object->endDate;
        }else $endDate = $object->endDate=null;

        if (isset($object->position)) {
            $position = (int) $object->position;
        }else $position = $object->position=null;

        return new ServiceGroupMetaData($id, $status, $deletionDate, $deactivationDate, $runtime, $startDate, $owner, $endDate, $position);
     }
}
