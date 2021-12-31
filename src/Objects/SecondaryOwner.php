<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class SecondaryOwner
{

    private int|null $userId;

    private int|null $serviceGroupId;

    private bool|null $accepted;

    private SimpleUser|null $user;


    /**
     * @return int|null
     */
    public function getUserId(): int|null
    {
         return $this->userId;
     }

    /**
     * @return int|null
     */
    public function getServiceGroupId(): int|null
    {
         return $this->serviceGroupId;
     }

    /**
     * @return bool|null
     */
    public function getAccepted(): bool|null
    {
         return $this->accepted;
     }

    /**
     * @return SimpleUser|null
     */
    public function getUser(): SimpleUser|null
    {
         return $this->user;
     }

    /**
     * @param int|null $userId
     * @param int|null $serviceGroupId
     * @param bool|null $accepted
     * @param SimpleUser|null $user
     */
    public function __construct(int|null $userId, int|null $serviceGroupId, bool|null $accepted, SimpleUser|null $user)
    {
        $this->userId = $userId;
        $this->serviceGroupId = $serviceGroupId;
        $this->accepted = $accepted;
        $this->user = $user;
    }

    /**
     * @return array
     */
    public function getAsArr()
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
