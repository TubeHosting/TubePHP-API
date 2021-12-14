<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class CombahtonDDoSAttack
{

    private string $time;

    private string $ip;

    private string $id;

    private int $packets;

    private string $type;

    private int $traffic;

    private string $avg_pktsize;

    private string $analyzer;


    /**
     * @return string
     */
    public function getTime(): string
    {
         return $this->time;
     }

    /**
     * @return string
     */
    public function getIp(): string
    {
         return $this->ip;
     }

    /**
     * @return string
     */
    public function getId(): string
    {
         return $this->id;
     }

    /**
     * @return int
     */
    public function getPackets(): int
    {
         return $this->packets;
     }

    /**
     * @return string
     */
    public function getType(): string
    {
         return $this->type;
     }

    /**
     * @return int
     */
    public function getTraffic(): int
    {
         return $this->traffic;
     }

    /**
     * @return string
     */
    public function getAvg_pktsize(): string
    {
         return $this->avg_pktsize;
     }

    /**
     * @return string
     */
    public function getAnalyzer(): string
    {
         return $this->analyzer;
     }

    /**
     * @param string $time
     * @param string $ip
     * @param string $id
     * @param int $packets
     * @param string $type
     * @param int $traffic
     * @param string $avg_pktsize
     * @param string $analyzer
     */
    public function __construct(string $time, string $ip, string $id, int $packets, string $type, int $traffic, string $avg_pktsize, string $analyzer)
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
        $time = (string) $object->time;
        $ip = (string) $object->ip;
        $id = (string) $object->id;
        $packets = (int) $object->packets;
        $type = (string) $object->type;
        $traffic = (int) $object->traffic;
        $avg_pktsize = (string) $object->avg_pktsize;
        $analyzer = (string) $object->analyzer;

        return new CombahtonDDoSAttack($time, $ip, $id, $packets, $type, $traffic, $avg_pktsize, $analyzer);
     }
}
