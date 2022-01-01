<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class UserChangePasswordObject
{

    private string|null $password;

    private string|null $oldPassword;


    /**
     * @return string|null
     */
    public function getPassword(): string|null
    {
         return $this->password;
     }

    /**
     * @return string|null
     */
    public function getOldPassword(): string|null
    {
         return $this->oldPassword;
     }

    /**
     * @param string|null $password
     * @param string|null $oldPassword
     */
    public function __construct(string|null $password, string|null $oldPassword)
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

        if (isset($object->password)) {
            $password = (string) $object->password;
        }else $password = $object->password=null;

        if (isset($object->oldPassword)) {
            $oldPassword = (string) $object->oldPassword;
        }else $oldPassword = $object->oldPassword=null;

        return new UserChangePasswordObject($password, $oldPassword);
     }
}
