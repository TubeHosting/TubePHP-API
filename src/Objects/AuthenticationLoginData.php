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
     * @param string|null $mail
     * @param string|null $password
     */
    public function __construct(?string $mail, ?string $password)
    {
        $this->mail = $mail;
        $this->password = $password;
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
        }else $mail = $object->mail=null;

        if (isset($object->password)) {
            $password = (string) $object->password;
        }else $password = $object->password=null;

        return new AuthenticationLoginData($mail, $password);
     }
}
