<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class ServiceGroupInvite
{

    private int $serviceGroupId;

    private string $serviceGroupName;

    private SimpleUser $owner;


    /**
     * @return int
     */
    public function getServiceGroupId(): int
    {
         return $this->serviceGroupId;
     }

    /**
     * @return string
     */
    public function getServiceGroupName(): string
    {
         return $this->serviceGroupName;
     }

    /**
     * @return SimpleUser
     */
    public function getOwner(): SimpleUser
    {
         return $this->owner;
     }

    /**
     * @param int $serviceGroupId
     * @param string $serviceGroupName
     * @param SimpleUser $owner
     */
    public function __construct(int $serviceGroupId, string $serviceGroupName, SimpleUser $owner)
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
        $serviceGroupId = (int) $object->serviceGroupId;
        $serviceGroupName = (string) $object->serviceGroupName;
        $owner = SimpleUser::fromStdClass((object)$object->owner);

        return new ServiceGroupInvite($serviceGroupId, $serviceGroupName, $owner);
     }
}
