<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class JWTTokenResponse
{

    private string|null $token;

    private User|null $userData;


    /**
     * @return string|null
     */
    public function getToken(): string|null
    {
         return $this->token;
     }

    /**
     * @return User|null
     */
    public function getUserData(): User|null
    {
         return $this->userData;
     }

    /**
     * @param string|null $token
     * @param User|null $userData
     */
    public function __construct(string|null $token, User|null $userData)
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

        if (isset($object->token)) {
            $token = (string) $object->token;
        }else $token = $object->token=null;

        if (isset($object->userData)) {
           $userData = User::fromStdClass((object)$object->userData);
        }else $userData = $object->userData=null;

        return new JWTTokenResponse($token, $userData);
     }
}
