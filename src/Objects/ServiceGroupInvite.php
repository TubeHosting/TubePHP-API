<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class ServiceGroupInvite
{

    private $serviceGroupId;

    private $serviceGroupName;

    private $owner;


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
    public function getServiceGroupName(): ?string
    {
         return $this->serviceGroupName;
     }

    /**
     * @return ?SimpleUser
     */
    public function getOwner(): ?SimpleUser
    {
         return $this->owner;
     }

    /**
     * @param int|null $serviceGroupId
     * @param string|null $serviceGroupName
     * @param SimpleUser|null $owner
     */
    public function __construct(?int $serviceGroupId, ?string $serviceGroupName, ?SimpleUser $owner)
    {
        $this->serviceGroupId = $serviceGroupId;
        $this->serviceGroupName = $serviceGroupName;
        $this->owner = $owner;
    }

    /**
     * @return array
     */
    public function getAsArr():array
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
        }else $serviceGroupId = null;

        if (isset($object->serviceGroupName)) {
            $serviceGroupName = (string) $object->serviceGroupName;
        }else $serviceGroupName = null;

        if (isset($object->owner)) {
           $owner = SimpleUser::fromStdClass((object)$object->owner);
        }else $owner = null;

        return new ServiceGroupInvite($serviceGroupId, $serviceGroupName, $owner);
     }
}
