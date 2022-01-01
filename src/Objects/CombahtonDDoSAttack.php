<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class CombahtonDDoSAttack
{

    private string|null $time;

    private string|null $ip;

    private string|null $id;

    private int|null $packets;

    private string|null $type;

    private int|null $traffic;

    private string|null $avg_pktsize;

    private string|null $analyzer;


    /**
     * @return string|null
     */
    public function getTime(): string|null
    {
         return $this->time;
     }

    /**
     * @return string|null
     */
    public function getIp(): string|null
    {
         return $this->ip;
     }

    /**
     * @return string|null
     */
    public function getId(): string|null
    {
         return $this->id;
     }

    /**
     * @return int|null
     */
    public function getPackets(): int|null
    {
         return $this->packets;
     }

    /**
     * @return string|null
     */
    public function getType(): string|null
    {
         return $this->type;
     }

    /**
     * @return int|null
     */
    public function getTraffic(): int|null
    {
         return $this->traffic;
     }

    /**
     * @return string|null
     */
    public function getAvg_pktsize(): string|null
    {
         return $this->avg_pktsize;
     }

    /**
     * @return string|null
     */
    public function getAnalyzer(): string|null
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
    public function __construct(string|null $time, string|null $ip, string|null $id, int|null $packets, string|null $type, int|null $traffic, string|null $avg_pktsize, string|null $analyzer)
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
    public function getAsArr()
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
