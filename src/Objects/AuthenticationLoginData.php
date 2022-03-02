<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class AuthenticationLoginData
{

    private $mail;

    private $password;

    private $token;


    /**
     * @return ?string
     */
    public function getMail(): ?string
    {
         return $this->mail;
     }

    /**
     * @return ?string
     */
    public function getPassword(): ?string
    {
         return $this->password;
     }

    /**
     * @return ?string
     */
    public function getToken(): ?string
    {
         return $this->token;
     }

    /**
     * @param string|null $mail
     * @param string|null $password
     * @param string|null $token
     */
    public function __construct(?string $mail, ?string $password, ?string $token)
    {
        $this->mail = $mail;
        $this->password = $password;
        $this->token = $token;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'mail' => $this->getMail(),
        'password' => $this->getPassword(),
        'token' => $this->getToken(),
        ];
    }

    /**
     * @param object $object
     * @return AuthenticationLoginData
     */
    public static function fromStdClass(object $object):AuthenticationLoginData
    {

        if (isset($object->mail)) {
            $mail = (string) $object->mail;
        }else $mail = null;

        if (isset($object->password)) {
            $password = (string) $object->password;
        }else $password = null;

        if (isset($object->token)) {
            $token = (string) $object->token;
        }else $token = null;

        return new AuthenticationLoginData($mail, $password, $token);
     }
}
