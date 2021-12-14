<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class JWTTokenResponse
{

    private string $token;

    private User $userData;


    /**
     * @return string
     */
    public function getToken(): string
    {
         return $this->token;
     }

    /**
     * @return User
     */
    public function getUserData(): User
    {
         return $this->userData;
     }

    /**
     * @param string $token
     * @param User $userData
     */
    public function __construct(string $token, User $userData)
    {
        $this->token = $token;
        $this->userData = $userData;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'token' => $this->getToken(),
        'userData' => $this->getUserData(),
        ];
    }

    /**
     * @param object $object
     * @return JWTTokenResponse
     */
    public static function fromStdClass(object $object):JWTTokenResponse
    {
        $token = (string) $object->token;
        $userData = User::fromStdClass((object)$object->userData);

        return new JWTTokenResponse($token, $userData);
     }
}
