<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class CombahtonDDoSAttack
{

    private $time;

    private $ip;

    private $id;

    private $packets;

    private $type;

    private $traffic;

    private $avg_pktsize;

    private $timestamp;


    /**
     * @return ?string
     */
    public function getTime(): ?string
    {
         return $this->time;
     }

    /**
     * @return ?string
     */
    public function getIp(): ?string
    {
         return $this->ip;
     }

    /**
     * @return ?string
     */
    public function getId(): ?string
    {
         return $this->id;
     }

    /**
     * @return ?int
     */
    public function getPackets(): ?int
    {
         return $this->packets;
     }

    /**
     * @return ?string
     */
    public function getType(): ?string
    {
         return $this->type;
     }

    /**
     * @return ?int
     */
    public function getTraffic(): ?int
    {
         return $this->traffic;
     }

    /**
     * @return ?string
     */
    public function getAvg_pktsize(): ?string
    {
         return $this->avg_pktsize;
     }

    /**
     * @return ?string
     */
    public function getTimestamp(): ?string
    {
         return $this->timestamp;
     }

    /**
     * @param string|null $time
     * @param string|null $ip
     * @param string|null $id
     * @param int|null $packets
     * @param string|null $type
     * @param int|null $traffic
     * @param string|null $avg_pktsize
     * @param string|null $timestamp
     */
    public function __construct(?string $time, ?string $ip, ?string $id, ?int $packets, ?string $type, ?int $traffic, ?string $avg_pktsize, ?string $timestamp)
    {
        $this->time = $time;
        $this->ip = $ip;
        $this->id = $id;
        $this->packets = $packets;
        $this->type = $type;
        $this->traffic = $traffic;
        $this->avg_pktsize = $avg_pktsize;
        $this->timestamp = $timestamp;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'time' => $this->getTime(),
        'ip' => $this->getIp(),
        'id' => $this->getId(),
        'packets' => $this->getPackets(),
        'type' => $this->getType(),
        'traffic' => $this->getTraffic(),
        'avg_pktsize' => $this->getAvg_pktsize(),
        'timestamp' => $this->getTimestamp(),
        ];
    }

    /**
     * @param object $object
     * @return CombahtonDDoSAttack
     */
    public static function fromStdClass(object $object):CombahtonDDoSAttack
    {

        if (isset($object->time)) {
            $time = (string) $object->time;
        }else $time = null;

        if (isset($object->ip)) {
            $ip = (string) $object->ip;
        }else $ip = null;

        if (isset($object->id)) {
            $id = (string) $object->id;
        }else $id = null;

        if (isset($object->packets)) {
            $packets = (int) $object->packets;
        }else $packets = null;

        if (isset($object->type)) {
            $type = (string) $object->type;
        }else $type = null;

        if (isset($object->traffic)) {
            $traffic = (int) $object->traffic;
        }else $traffic = null;

        if (isset($object->avg_pktsize)) {
            $avg_pktsize = (string) $object->avg_pktsize;
        }else $avg_pktsize = null;

        if (isset($object->timestamp)) {
            $timestamp = (string) $object->timestamp;
        }else $timestamp = null;

        return new CombahtonDDoSAttack($time, $ip, $id, $packets, $type, $traffic, $avg_pktsize, $timestamp);
     }
}
