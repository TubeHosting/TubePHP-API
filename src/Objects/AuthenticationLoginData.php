<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class AuthenticationLoginData
{

    private string $mail;

    private string $password;


    /**
     * @return string
     */
    public function getMail(): string
    {
         return $this->mail;
     }

    /**
     * @return string
     */
    public function getPassword(): string
    {
         return $this->password;
     }

    /**
     * @param string $mail
     * @param string $password
     */
    public function __construct(string $mail, string $password)
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
        $mail = (string) $object->mail;
        $password = (string) $object->password;

        return new AuthenticationLoginData($mail, $password);
     }
}
