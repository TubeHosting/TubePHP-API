<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class VpsReinstall
{

    private int|null $osId;

    private string|null $password;

    private string|null $hostname;


    /**
     * @return int|null
     */
    public function getOsId(): int|null
    {
         return $this->osId;
     }

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
    public function getHostname(): string|null
    {
         return $this->hostname;
     }

    /**
     * @param int|null $osId
     * @param string|null $password
     * @param string|null $hostname
     */
    public function __construct(int|null $osId, string|null $password, string|null $hostname)
    {
        $this->osId = $osId;
        $this->password = $password;
        $this->hostname = $hostname;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'osId' => $this->getOsId(),
        'password' => $this->getPassword(),
        'hostname' => $this->getHostname(),
        ];
    }

    /**
     * @param object $object
     * @return VpsReinstall
     */
    public static function fromStdClass(object $object):VpsReinstall
    {

        if (isset($object->osId)) {
            $osId = (int) $object->osId;
        }else $osId = $object->osId=null;

        if (isset($object->password)) {
            $password = (string) $object->password;
        }else $password = $object->password=null;

        if (isset($object->hostname)) {
            $hostname = (string) $object->hostname;
        }else $hostname = $object->hostname=null;

        return new VpsReinstall($osId, $password, $hostname);
     }
}
