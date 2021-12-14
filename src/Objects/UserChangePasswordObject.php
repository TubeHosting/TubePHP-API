<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class UserChangePasswordObject
{

    private string $password;

    private string $oldPassword;


    /**
     * @return string
     */
    public function getPassword(): string
    {
         return $this->password;
     }

    /**
     * @return string
     */
    public function getOldPassword(): string
    {
         return $this->oldPassword;
     }

    /**
     * @param string $password
     * @param string $oldPassword
     */
    public function __construct(string $password, string $oldPassword)
    {
        $this->password = $password;
        $this->oldPassword = $oldPassword;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'password' => $this->getPassword(),
        'oldPassword' => $this->getOldPassword(),
        ];
    }

    /**
     * @param object $object
     * @return UserChangePasswordObject
     */
    public static function fromStdClass(object $object):UserChangePasswordObject
    {
        $password = (string) $object->password;
        $oldPassword = (string) $object->oldPassword;

        return new UserChangePasswordObject($password, $oldPassword);
     }
}
