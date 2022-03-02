<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DDoSSample
{

    private $time;

    private $bytes;

    private $dstIP;

    private $srcIP;

    private $dstPort;

    private $srcPort;

    private $icmpCode;

    private $icmpType;

    private $ipTTL;

    private $ipProtocol;

    private $dstVlan;

    private $srcVlan;

    private $tcpFlags;


    /**
     * @return ?string
     */
    public function getTime(): ?string
    {
         return $this->time;
     }

    /**
     * @return ?int
     */
    public function getBytes(): ?int
    {
         return $this->bytes;
     }

    /**
     * @return ?string
     */
    public function getDstIP(): ?string
    {
         return $this->dstIP;
     }

    /**
     * @return ?string
     */
    public function getSrcIP(): ?string
    {
         return $this->srcIP;
     }

    /**
     * @return ?int
     */
    public function getDstPort(): ?int
    {
         return $this->dstPort;
     }

    /**
     * @return ?int
     */
    public function getSrcPort(): ?int
    {
         return $this->srcPort;
     }

    /**
     * @return ?int
     */
    public function getIcmpCode(): ?int
    {
         return $this->icmpCode;
     }

    /**
     * @return ?int
     */
    public function getIcmpType(): ?int
    {
         return $this->icmpType;
     }

    /**
     * @return ?int
     */
    public function getIpTTL(): ?int
    {
         return $this->ipTTL;
     }

    /**
     * @return ?int
     */
    public function getIpProtocol(): ?int
    {
         return $this->ipProtocol;
     }

    /**
     * @return ?int
     */
    public function getDstVlan(): ?int
    {
         return $this->dstVlan;
     }

    /**
     * @return ?int
     */
    public function getSrcVlan(): ?int
    {
         return $this->srcVlan;
     }

    /**
     * @return ?int
     */
    public function getTcpFlags(): ?int
    {
         return $this->tcpFlags;
     }

    /**
     * @param string|null $time
     * @param int|null $bytes
     * @param string|null $dstIP
     * @param string|null $srcIP
     * @param int|null $dstPort
     * @param int|null $srcPort
     * @param int|null $icmpCode
     * @param int|null $icmpType
     * @param int|null $ipTTL
     * @param int|null $ipProtocol
     * @param int|null $dstVlan
     * @param int|null $srcVlan
     * @param int|null $tcpFlags
     */
    public function __construct(?string $time, ?int $bytes, ?string $dstIP, ?string $srcIP, ?int $dstPort, ?int $srcPort, ?int $icmpCode, ?int $icmpType, ?int $ipTTL, ?int $ipProtocol, ?int $dstVlan, ?int $srcVlan, ?int $tcpFlags)
    {
        $this->time = $time;
        $this->bytes = $bytes;
        $this->dstIP = $dstIP;
        $this->srcIP = $srcIP;
        $this->dstPort = $dstPort;
        $this->srcPort = $srcPort;
        $this->icmpCode = $icmpCode;
        $this->icmpType = $icmpType;
        $this->ipTTL = $ipTTL;
        $this->ipProtocol = $ipProtocol;
        $this->dstVlan = $dstVlan;
        $this->srcVlan = $srcVlan;
        $this->tcpFlags = $tcpFlags;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'time' => $this->getTime(),
        'bytes' => $this->getBytes(),
        'dstIP' => $this->getDstIP(),
        'srcIP' => $this->getSrcIP(),
        'dstPort' => $this->getDstPort(),
        'srcPort' => $this->getSrcPort(),
        'icmpCode' => $this->getIcmpCode(),
        'icmpType' => $this->getIcmpType(),
        'ipTTL' => $this->getIpTTL(),
        'ipProtocol' => $this->getIpProtocol(),
        'dstVlan' => $this->getDstVlan(),
        'srcVlan' => $this->getSrcVlan(),
        'tcpFlags' => $this->getTcpFlags(),
        ];
    }

    /**
     * @param object $object
     * @return DDoSSample
     */
    public static function fromStdClass(object $object):DDoSSample
    {

        if (isset($object->time)) {
            $time = (string) $object->time;
        }else $time = null;

        if (isset($object->bytes)) {
            $bytes = (int) $object->bytes;
        }else $bytes = null;

        if (isset($object->dstIP)) {
            $dstIP = (string) $object->dstIP;
        }else $dstIP = null;

        if (isset($object->srcIP)) {
            $srcIP = (string) $object->srcIP;
        }else $srcIP = null;

        if (isset($object->dstPort)) {
            $dstPort = (int) $object->dstPort;
        }else $dstPort = null;

        if (isset($object->srcPort)) {
            $srcPort = (int) $object->srcPort;
        }else $srcPort = null;

        if (isset($object->icmpCode)) {
            $icmpCode = (int) $object->icmpCode;
        }else $icmpCode = null;

        if (isset($object->icmpType)) {
            $icmpType = (int) $object->icmpType;
        }else $icmpType = null;

        if (isset($object->ipTTL)) {
            $ipTTL = (int) $object->ipTTL;
        }else $ipTTL = null;

        if (isset($object->ipProtocol)) {
            $ipProtocol = (int) $object->ipProtocol;
        }else $ipProtocol = null;

        if (isset($object->dstVlan)) {
            $dstVlan = (int) $object->dstVlan;
        }else $dstVlan = null;

        if (isset($object->srcVlan)) {
            $srcVlan = (int) $object->srcVlan;
        }else $srcVlan = null;

        if (isset($object->tcpFlags)) {
            $tcpFlags = (int) $object->tcpFlags;
        }else $tcpFlags = null;

        return new DDoSSample($time, $bytes, $dstIP, $srcIP, $dstPort, $srcPort, $icmpCode, $icmpType, $ipTTL, $ipProtocol, $dstVlan, $srcVlan, $tcpFlags);
     }
}
