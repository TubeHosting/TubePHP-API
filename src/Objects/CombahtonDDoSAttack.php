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

    private $analyzer;


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
    public function getAnalyzer(): ?string
    {
         return $this->analyzer;
     }

    /**
     * @param string|null $time
     * @param string|null $ip
     * @param string|null $id
     * @param int|null $packets
     * @param string|null $type
     * @param int|null $traffic
     * @param string|null $avg_pktsize
     * @param string|null $analyzer
     */
    public function __construct(?string $time, ?string $ip, ?string $id, ?int $packets, ?string $type, ?int $traffic, ?string $avg_pktsize, ?string $analyzer)
    {
        $this->time = $time;
        $this->ip = $ip;
        $this->id = $id;
        $this->packets = $packets;
        $this->type = $type;
        $this->traffic = $traffic;
        $this->avg_pktsize = $avg_pktsize;
        $this->analyzer = $analyzer;
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
        'analyzer' => $this->getAnalyzer(),
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
        }else $time = $object->time=null;

        if (isset($object->ip)) {
            $ip = (string) $object->ip;
        }else $ip = $object->ip=null;

        if (isset($object->id)) {
            $id = (string) $object->id;
        }else $id = $object->id=null;

        if (isset($object->packets)) {
            $packets = (int) $object->packets;
        }else $packets = $object->packets=null;

        if (isset($object->type)) {
            $type = (string) $object->type;
        }else $type = $object->type=null;

        if (isset($object->traffic)) {
            $traffic = (int) $object->traffic;
        }else $traffic = $object->traffic=null;

        if (isset($object->avg_pktsize)) {
            $avg_pktsize = (string) $object->avg_pktsize;
        }else $avg_pktsize = $object->avg_pktsize=null;

        if (isset($object->analyzer)) {
            $analyzer = (string) $object->analyzer;
        }else $analyzer = $object->analyzer=null;

        return new CombahtonDDoSAttack($time, $ip, $id, $packets, $type, $traffic, $avg_pktsize, $analyzer);
     }
}
