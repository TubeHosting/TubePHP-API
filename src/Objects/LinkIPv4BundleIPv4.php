<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class LinkIPv4BundleIPv4
{

    private int $serviceId;

    private string $type;

    private string $description;

    private IPv4 $ipv4;


    /**
     * @return int
     */
    public function getServiceId(): int
    {
         return $this->serviceId;
     }

    /**
     * @return string
     */
    public function getType(): string
    {
         return $this->type;
     }

    /**
     * @return string
     */
    public function getDescription(): string
    {
         return $this->description;
     }

    /**
     * @return IPv4
     */
    public function getIpv4(): IPv4
    {
         return $this->ipv4;
     }

    /**
     * @param int $serviceId
     * @param string $type
     * @param string $description
     * @param IPv4 $ipv4
     */
    public function __construct(int $serviceId, string $type, string $description, IPv4 $ipv4)
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
        $serviceId = (int) $object->serviceId;
        $type = (string) $object->type;
        $description = (string) $object->description;
        $ipv4 = IPv4::fromStdClass((object)$object->ipv4);

        return new LinkIPv4BundleIPv4($serviceId, $type, $description, $ipv4);
     }
}
