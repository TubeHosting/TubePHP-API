<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class VpsReinstall
{

    private int $osId;

    private string $password;

    private string $hostname;


    /**
     * @return int
     */
    public function getOsId(): int
    {
         return $this->osId;
     }

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
    public function getHostname(): string
    {
         return $this->hostname;
     }

    /**
     * @param int $osId
     * @param string $password
     * @param string $hostname
     */
    public function __construct(int $osId, string $password, string $hostname)
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
        $osId = (int) $object->osId;
        $password = (string) $object->password;
        $hostname = (string) $object->hostname;

        return new VpsReinstall($osId, $password, $hostname);
     }
}
