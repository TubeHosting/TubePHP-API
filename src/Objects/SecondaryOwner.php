<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class SecondaryOwner
{

    private $userId;

    private $serviceGroupId;

    private $accepted;

    private $user;


    /**
     * @return ?int
     */
    public function getUserId(): ?int
    {
         return $this->userId;
     }

    /**
     * @return ?int
     */
    public function getServiceGroupId(): ?int
    {
         return $this->serviceGroupId;
     }

    /**
     * @return ?bool
     */
    public function getAccepted(): ?bool
    {
         return $this->accepted;
     }

    /**
     * @return ?SimpleUser
     */
    public function getUser(): ?SimpleUser
    {
         return $this->user;
     }

    /**
     * @param int|null $userId
     * @param int|null $serviceGroupId
     * @param bool|null $accepted
     * @param SimpleUser|null $user
     */
    public function __construct(?int $userId, ?int $serviceGroupId, ?bool $accepted, ?SimpleUser $user)
    {
        $this->userId = $userId;
        $this->serviceGroupId = $serviceGroupId;
        $this->accepted = $accepted;
        $this->user = $user;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'userId' => $this->getUserId(),
        'serviceGroupId' => $this->getServiceGroupId(),
        'accepted' => $this->getAccepted(),
        'user' => $this->getUser(),
        ];
    }

    /**
     * @param object $object
     * @return SecondaryOwner
     */
    public static function fromStdClass(object $object):SecondaryOwner
    {

        if (isset($object->userId)) {
            $userId = (int) $object->userId;
        }else $userId = $object->userId=null;

        if (isset($object->serviceGroupId)) {
            $serviceGroupId = (int) $object->serviceGroupId;
        }else $serviceGroupId = $object->serviceGroupId=null;

        if (isset($object->accepted)) {
            $accepted = (bool) $object->accepted;
        }else $accepted = $object->accepted=null;

        if (isset($object->user)) {
           $user = SimpleUser::fromStdClass((object)$object->user);
        }else $user = $object->user=null;

        return new SecondaryOwner($userId, $serviceGroupId, $accepted, $user);
     }
}
