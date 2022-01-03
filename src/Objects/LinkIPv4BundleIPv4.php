<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class LinkIPv4BundleIPv4
{

    private $serviceId;

    private $type;

    private $description;

    private $ipv4;


    /**
     * @return ?int
     */
    public function getServiceId(): ?int
    {
         return $this->serviceId;
     }

    /**
     * @return ?string
     */
    public function getType(): ?string
    {
         return $this->type;
     }

    /**
     * @return ?string
     */
    public function getDescription(): ?string
    {
         return $this->description;
     }

    /**
     * @return ?IPv4
     */
    public function getIpv4(): ?IPv4
    {
         return $this->ipv4;
     }

    /**
     * @param int|null $serviceId
     * @param string|null $type
     * @param string|null $description
     * @param IPv4|null $ipv4
     */
    public function __construct(?int $serviceId, ?string $type, ?string $description, ?IPv4 $ipv4)
    {
        $this->serviceId = $serviceId;
        $this->type = $type;
        $this->description = $description;
        $this->ipv4 = $ipv4;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'serviceId' => $this->getServiceId(),
        'type' => $this->getType(),
        'description' => $this->getDescription(),
        'ipv4' => $this->getIpv4(),
        ];
    }

    /**
     * @param object $object
     * @return LinkIPv4BundleIPv4
     */
    public static function fromStdClass(object $object):LinkIPv4BundleIPv4
    {

        if (isset($object->serviceId)) {
            $serviceId = (int) $object->serviceId;
        }else $serviceId = $object->serviceId=null;

        if (isset($object->type)) {
            $type = (string) $object->type;
        }else $type = $object->type=null;

        if (isset($object->description)) {
            $description = (string) $object->description;
        }else $description = $object->description=null;

        if (isset($object->ipv4)) {
           $ipv4 = IPv4::fromStdClass((object)$object->ipv4);
        }else $ipv4 = $object->ipv4=null;

        return new LinkIPv4BundleIPv4($serviceId, $type, $description, $ipv4);
     }
}
