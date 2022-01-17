<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class VpsReinstall
{

    private $osId;

    private $password;

    private $hostname;


    /**
     * @return ?int
     */
    public function getOsId(): ?int
    {
         return $this->osId;
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
    public function getHostname(): ?string
    {
         return $this->hostname;
     }

    /**
     * @param int|null $osId
     * @param string|null $password
     * @param string|null $hostname
     */
    public function __construct(?int $osId, ?string $password, ?string $hostname)
    {
        $this->osId = $osId;
        $this->password = $password;
        $this->hostname = $hostname;
    }

    /**
     * @return array
     */
    public function getAsArr():array
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
        }else $osId = null;

        if (isset($object->password)) {
            $password = (string) $object->password;
        }else $password = null;

        if (isset($object->hostname)) {
            $hostname = (string) $object->hostname;
        }else $hostname = null;

        return new VpsReinstall($osId, $password, $hostname);
     }
}
