<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class ServiceGroupMetaData
{

    private $id;

    private $status;

    private $deletionDate;

    private $deactivationDate;

    private $runtime;

    private $startDate;

    private $owner;

    private $endDate;

    private $position;


    /**
     * @return ?int
     */
    public function getId(): ?int
    {
         return $this->id;
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
    public function __construct(?int $id, ?string $status, ?string $deletionDate, ?string $deactivationDate, ?string $runtime, ?string $startDate, ?SimpleUser $owner, ?string $endDate, ?int $position)
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
    public function getAsArr():array
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
