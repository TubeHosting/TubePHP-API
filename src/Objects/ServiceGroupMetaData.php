<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class ServiceGroupMetaData
{

    private int $id;

    private string $status;

    private string $deletionDate;

    private string $deactivationDate;

    private string $runtime;

    private string $startDate;

    private SimpleUser $owner;

    private string $endDate;

    private int $position;


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
    public function getStatus(): string
    {
         return $this->status;
     }

    /**
     * @return string
     */
    public function getDeletionDate(): string
    {
         return $this->deletionDate;
     }

    /**
     * @return string
     */
    public function getDeactivationDate(): string
    {
         return $this->deactivationDate;
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
    public function getStartDate(): string
    {
         return $this->startDate;
     }

    /**
     * @return SimpleUser
     */
    public function getOwner(): SimpleUser
    {
         return $this->owner;
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
    public function getPosition(): int
    {
         return $this->position;
     }

    /**
     * @param int $id
     * @param string $status
     * @param string $deletionDate
     * @param string $deactivationDate
     * @param string $runtime
     * @param string $startDate
     * @param SimpleUser $owner
     * @param string $endDate
     * @param int $position
     */
    public function __construct(int $id, string $status, string $deletionDate, string $deactivationDate, string $runtime, string $startDate, SimpleUser $owner, string $endDate, int $position)
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
        $id = (int) $object->id;
        $status = (string) $object->status;
        $deletionDate = (string) $object->deletionDate;
        $deactivationDate = (string) $object->deactivationDate;
        $runtime = (string) $object->runtime;
        $startDate = (string) $object->startDate;
        $owner = SimpleUser::fromStdClass((object)$object->owner);
        $endDate = (string) $object->endDate;
        $position = (int) $object->position;

        return new ServiceGroupMetaData($id, $status, $deletionDate, $deactivationDate, $runtime, $startDate, $owner, $endDate, $position);
     }
}
