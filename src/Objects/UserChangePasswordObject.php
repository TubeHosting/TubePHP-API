<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class UserChangePasswordObject
{

    private $password;

    private $oldPassword;


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
    public function getOldPassword(): ?string
    {
         return $this->oldPassword;
     }

    /**
     * @param string|null $password
     * @param string|null $oldPassword
     */
    public function __construct(?string $password, ?string $oldPassword)
    {
        $this->password = $password;
        $this->oldPassword = $oldPassword;
    }

    /**
     * @return array
     */
    public function getAsArr():array
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
