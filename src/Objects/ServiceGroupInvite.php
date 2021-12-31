<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class ServiceGroupInvite
{

    private int|null $serviceGroupId;

    private string|null $serviceGroupName;

    private SimpleUser|null $owner;


    /**
     * @return int|null
     */
    public function getServiceGroupId(): int|null
    {
         return $this->serviceGroupId;
     }

    /**
     * @return string|null
     */
    public function getServiceGroupName(): string|null
    {
         return $this->serviceGroupName;
     }

    /**
     * @return SimpleUser|null
     */
    public function getOwner(): SimpleUser|null
    {
         return $this->owner;
     }

    /**
     * @param int|null $serviceGroupId
     * @param string|null $serviceGroupName
     * @param SimpleUser|null $owner
     */
    public function __construct(int|null $serviceGroupId, string|null $serviceGroupName, SimpleUser|null $owner)
    {
        $this->serviceGroupId = $serviceGroupId;
        $this->serviceGroupName = $serviceGroupName;
        $this->owner = $owner;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'serviceGroupId' => $this->getServiceGroupId(),
        'serviceGroupName' => $this->getServiceGroupName(),
        'owner' => $this->getOwner(),
        ];
    }

    /**
     * @param object $object
     * @return ServiceGroupInvite
     */
    public static function fromStdClass(object $object):ServiceGroupInvite
    {

        if (isset($object->serviceGroupId)) {
            $serviceGroupId = (int) $object->serviceGroupId;
        }else $serviceGroupId = $object->serviceGroupId=null;

        if (isset($object->serviceGroupName)) {
            $serviceGroupName = (string) $object->serviceGroupName;
        }else $serviceGroupName = $object->serviceGroupName=null;

        if (isset($object->owner)) {
           $owner = SimpleUser::fromStdClass((object)$object->owner);
        }else $owner = $object->owner=null;

        return new ServiceGroupInvite($serviceGroupId, $serviceGroupName, $owner);
     }
}
