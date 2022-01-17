<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class PasswordChange
{

    private $password;


    /**
     * @return ?string
     */
    public function getPassword(): ?string
    {
         return $this->password;
     }

    /**
     * @param string|null $password
     */
    public function __construct(?string $password)
    {
        $this->password = $password;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'password' => $this->getPassword(),
        ];
    }

    /**
     * @param object $object
     * @return PasswordChange
     */
    public static function fromStdClass(object $object):PasswordChange
    {

        if (isset($object->password)) {
            $password = (string) $object->password;
        }else $password = null;

        return new PasswordChange($password);
     }
}
