<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class AuthenticationLoginData
{

    private string|null $mail;

    private string|null $password;


    /**
     * @return string|null
     */
    public function getMail(): string|null
    {
         return $this->mail;
     }

    /**
     * @return string|null
     */
    public function getPassword(): string|null
    {
         return $this->password;
     }

    /**
     * @param string|null $mail
     * @param string|null $password
     */
    public function __construct(string|null $mail, string|null $password)
    {
        $this->mail = $mail;
        $this->password = $password;
    }

    /**
     * @return array
     */
    public function getAsArr()
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
