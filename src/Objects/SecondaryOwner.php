<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class SecondaryOwner
{

    private int $userId;

    private int $serviceGroupId;

    private bool $accepted;

    private SimpleUser $user;


    /**
     * @return int
     */
    public function getUserId(): int
    {
         return $this->userId;
     }

    /**
     * @return int
     */
    public function getServiceGroupId(): int
    {
         return $this->serviceGroupId;
     }

    /**
     * @return bool
     */
    public function getAccepted(): bool
    {
         return $this->accepted;
     }

    /**
     * @return SimpleUser
     */
    public function getUser(): SimpleUser
    {
         return $this->user;
     }

    /**
     * @param int $userId
     * @param int $serviceGroupId
     * @param bool $accepted
     * @param SimpleUser $user
     */
    public function __construct(int $userId, int $serviceGroupId, bool $accepted, SimpleUser $user)
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
        $userId = (int) $object->userId;
        $serviceGroupId = (int) $object->serviceGroupId;
        $accepted = (bool) $object->accepted;
        $user = SimpleUser::fromStdClass((object)$object->user);

        return new SecondaryOwner($userId, $serviceGroupId, $accepted, $user);
     }
}
