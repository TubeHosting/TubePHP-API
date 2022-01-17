<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class JWTTokenResponse
{

    private $token;

    private $userData;


    /**
     * @return ?string
     */
    public function getToken(): ?string
    {
         return $this->token;
     }

    /**
     * @return ?User
     */
    public function getUserData(): ?User
    {
         return $this->userData;
     }

    /**
     * @param string|null $token
     * @param User|null $userData
     */
    public function __construct(?string $token, ?User $userData)
    {
        $this->token = $token;
        $this->userData = $userData;
    }

    /**
     * @return array
     */
    public function getAsArr():array
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
        }else $token = null;

        if (isset($object->userData)) {
           $userData = User::fromStdClass((object)$object->userData);
        }else $userData = null;

        return new JWTTokenResponse($token, $userData);
     }
}
