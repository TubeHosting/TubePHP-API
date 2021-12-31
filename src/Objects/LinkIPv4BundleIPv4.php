<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class LinkIPv4BundleIPv4
{

    private int|null $serviceId;

    private string|null $type;

    private string|null $description;

    private IPv4|null $ipv4;


    /**
     * @return int|null
     */
    public function getServiceId(): int|null
    {
         return $this->serviceId;
     }

    /**
     * @return string|null
     */
    public function getType(): string|null
    {
         return $this->type;
     }

    /**
     * @return string|null
     */
    public function getDescription(): string|null
    {
         return $this->description;
     }

    /**
     * @return IPv4|null
     */
    public function getIpv4(): IPv4|null
    {
         return $this->ipv4;
     }

    /**
     * @param int|null $serviceId
     * @param string|null $type
     * @param string|null $description
     * @param IPv4|null $ipv4
     */
    public function __construct(int|null $serviceId, string|null $type, string|null $description, IPv4|null $ipv4)
    {
        $this->serviceId = $serviceId;
        $this->type = $type;
        $this->description = $description;
        $this->ipv4 = $ipv4;
    }

    /**
     * @return array
     */
    public function getAsArr()
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
