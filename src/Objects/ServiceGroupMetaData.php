<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class ServiceGroupMetaData
{

    private $id;

    private $serviceGroupId;

    private $status;

    private $deletionDate;

    private $deactivationDate;

    private $runtime;

    private $startDate;

    private $owner;

    private $ownerId;

    private $endDate;

    private $position;

    private $name;


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
    public function getServiceGroupId(): ?int
    {
         return $this->serviceGroupId;
     }

    /**
     * @return ?string
     */
    public function getStatus(): ?string
    {
         return $this->status;
     }

    /**
     * @return ?string
     */
    public function getDeletionDate(): ?string
    {
         return $this->deletionDate;
     }

    /**
     * @return ?string
     */
    public function getDeactivationDate(): ?string
    {
         return $this->deactivationDate;
     }

    /**
     * @return ?string
     */
    public function getRuntime(): ?string
    {
         return $this->runtime;
     }

    /**
     * @return ?string
     */
    public function getStartDate(): ?string
    {
         return $this->startDate;
     }

    /**
     * @return ?SimpleUser
     */
    public function getOwner(): ?SimpleUser
    {
         return $this->owner;
     }

    /**
     * @return ?int
     */
    public function getOwnerId(): ?int
    {
         return $this->ownerId;
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
    public function getPosition(): ?int
    {
         return $this->position;
     }

    /**
     * @return ?string
     */
    public function getName(): ?string
    {
         return $this->name;
     }

    /**
     * @param int|null $id
     * @param int|null $serviceGroupId
     * @param string|null $status
     * @param string|null $deletionDate
     * @param string|null $deactivationDate
     * @param string|null $runtime
     * @param string|null $startDate
     * @param SimpleUser|null $owner
     * @param int|null $ownerId
     * @param string|null $endDate
     * @param int|null $position
     * @param string|null $name
     */
    public function __construct(?int $id, ?int $serviceGroupId, ?string $status, ?string $deletionDate, ?string $deactivationDate, ?string $runtime, ?string $startDate, ?SimpleUser $owner, ?int $ownerId, ?string $endDate, ?int $position, ?string $name)
    {
        $this->id = $id;
        $this->serviceGroupId = $serviceGroupId;
        $this->status = $status;
        $this->deletionDate = $deletionDate;
        $this->deactivationDate = $deactivationDate;
        $this->runtime = $runtime;
        $this->startDate = $startDate;
        $this->owner = $owner;
        $this->ownerId = $ownerId;
        $this->endDate = $endDate;
        $this->position = $position;
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'id' => $this->getId(),
        'serviceGroupId' => $this->getServiceGroupId(),
        'status' => $this->getStatus(),
        'deletionDate' => $this->getDeletionDate(),
        'deactivationDate' => $this->getDeactivationDate(),
        'runtime' => $this->getRuntime(),
        'startDate' => $this->getStartDate(),
        'owner' => $this->getOwner(),
        'ownerId' => $this->getOwnerId(),
        'endDate' => $this->getEndDate(),
        'position' => $this->getPosition(),
        'name' => $this->getName(),
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
        }else $id = null;

        if (isset($object->serviceGroupId)) {
            $serviceGroupId = (int) $object->serviceGroupId;
        }else $serviceGroupId = null;

        if (isset($object->status)) {
            $status = (string) $object->status;
        }else $status = null;

        if (isset($object->deletionDate)) {
            $deletionDate = (string) $object->deletionDate;
        }else $deletionDate = null;

        if (isset($object->deactivationDate)) {
            $deactivationDate = (string) $object->deactivationDate;
        }else $deactivationDate = null;

        if (isset($object->runtime)) {
            $runtime = (string) $object->runtime;
        }else $runtime = null;

        if (isset($object->startDate)) {
            $startDate = (string) $object->startDate;
        }else $startDate = null;

        if (isset($object->owner)) {
           $owner = SimpleUser::fromStdClass((object)$object->owner);
        }else $owner = null;

        if (isset($object->ownerId)) {
            $ownerId = (int) $object->ownerId;
        }else $ownerId = null;

        if (isset($object->endDate)) {
            $endDate = (string) $object->endDate;
        }else $endDate = null;

        if (isset($object->position)) {
            $position = (int) $object->position;
        }else $position = null;

        if (isset($object->name)) {
            $name = (string) $object->name;
        }else $name = null;

        return new ServiceGroupMetaData($id, $serviceGroupId, $status, $deletionDate, $deactivationDate, $runtime, $startDate, $owner, $ownerId, $endDate, $position, $name);
     }
}
