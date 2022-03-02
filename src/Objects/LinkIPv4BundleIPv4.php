<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class LinkIPv4BundleIPv4
{

    private $startTime;

    private $serviceId;

    private $type;

    private $description;

    private $ipv4;

    private $bundleId;


    /**
     * @return ?string
     */
    public function getStartTime(): ?string
    {
         return $this->startTime;
     }

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
     * @return ?int
     */
    public function getBundleId(): ?int
    {
         return $this->bundleId;
     }

    /**
     * @param string|null $startTime
     * @param int|null $serviceId
     * @param string|null $type
     * @param string|null $description
     * @param IPv4|null $ipv4
     * @param int|null $bundleId
     */
    public function __construct(?string $startTime, ?int $serviceId, ?string $type, ?string $description, ?IPv4 $ipv4, ?int $bundleId)
    {
        $this->startTime = $startTime;
        $this->serviceId = $serviceId;
        $this->type = $type;
        $this->description = $description;
        $this->ipv4 = $ipv4;
        $this->bundleId = $bundleId;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'startTime' => $this->getStartTime(),
        'serviceId' => $this->getServiceId(),
        'type' => $this->getType(),
        'description' => $this->getDescription(),
        'ipv4' => $this->getIpv4(),
        'bundleId' => $this->getBundleId(),
        ];
    }

    /**
     * @param object $object
     * @return LinkIPv4BundleIPv4
     */
    public static function fromStdClass(object $object):LinkIPv4BundleIPv4
    {

        if (isset($object->startTime)) {
            $startTime = (string) $object->startTime;
        }else $startTime = null;

        if (isset($object->serviceId)) {
            $serviceId = (int) $object->serviceId;
        }else $serviceId = null;

        if (isset($object->type)) {
            $type = (string) $object->type;
        }else $type = null;

        if (isset($object->description)) {
            $description = (string) $object->description;
        }else $description = null;

        if (isset($object->ipv4)) {
           $ipv4 = IPv4::fromStdClass((object)$object->ipv4);
        }else $ipv4 = null;

        if (isset($object->bundleId)) {
            $bundleId = (int) $object->bundleId;
        }else $bundleId = null;

        return new LinkIPv4BundleIPv4($startTime, $serviceId, $type, $description, $ipv4, $bundleId);
     }
}
