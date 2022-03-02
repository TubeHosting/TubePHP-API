<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DDoSAttack
{

    private $time;

    private $ip;

    private $id;

    private $packets;

    private $type;

    private $pps;

    private $traffic;

    private $avgPacketSize;

    private $samples;


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
    public function getPps(): ?int
    {
         return $this->pps;
     }

    /**
     * @return ?int
     */
    public function getTraffic(): ?int
    {
         return $this->traffic;
     }

    /**
     * @return ?int
     */
    public function getAvgPacketSize(): ?int
    {
         return $this->avgPacketSize;
     }

    /**
     * @return ?array
     */
    public function getSamples(): ?array
    {
         return $this->samples;
     }

    /**
     * @param string|null $time
     * @param string|null $ip
     * @param string|null $id
     * @param int|null $packets
     * @param string|null $type
     * @param int|null $pps
     * @param int|null $traffic
     * @param int|null $avgPacketSize
     * @param array|null $samples
     */
    public function __construct(?string $time, ?string $ip, ?string $id, ?int $packets, ?string $type, ?int $pps, ?int $traffic, ?int $avgPacketSize, ?array $samples)
    {
        $this->time = $time;
        $this->ip = $ip;
        $this->id = $id;
        $this->packets = $packets;
        $this->type = $type;
        $this->pps = $pps;
        $this->traffic = $traffic;
        $this->avgPacketSize = $avgPacketSize;

        //handle objects in array
        $tmpSamples = $samples;
        $samples = [];
        if($tmpSamples!==null){
            foreach ($tmpSamples as $key => $item) {
                $item = DDoSSample::fromStdClass($item);
                $singleItem = array($key => $item);
                $samples = array_merge($samples, $singleItem);
            }
        }
        $this->samples = $samples;
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
        'pps' => $this->getPps(),
        'traffic' => $this->getTraffic(),
        'avgPacketSize' => $this->getAvgPacketSize(),
        'samples' => $this->getSamples(),
        ];
    }

    /**
     * @param object $object
     * @return DDoSAttack
     */
    public static function fromStdClass(object $object):DDoSAttack
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

        if (isset($object->pps)) {
            $pps = (int) $object->pps;
        }else $pps = null;

        if (isset($object->traffic)) {
            $traffic = (int) $object->traffic;
        }else $traffic = null;

        if (isset($object->avgPacketSize)) {
            $avgPacketSize = (int) $object->avgPacketSize;
        }else $avgPacketSize = null;

        if (isset($object->samples)) {
            $samples = (array) $object->samples;
        }else $samples = null;

        return new DDoSAttack($time, $ip, $id, $packets, $type, $pps, $traffic, $avgPacketSize, $samples);
     }
}
