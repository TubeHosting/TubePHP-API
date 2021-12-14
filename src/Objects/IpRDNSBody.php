<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class IpRDNSBody
{

    private string $rdns;


    /**
     * @return string
     */
    public function getRdns(): string
    {
         return $this->rdns;
     }

    /**
     * @param string $rdns
     */
    public function __construct(string $rdns)
    {
        $this->rdns = $rdns;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'rdns' => $this->getRdns(),
        ];
    }

    /**
     * @param object $object
     * @return IpRDNSBody
     */
    public static function fromStdClass(object $object):IpRDNSBody
    {
        $rdns = (string) $object->rdns;

        return new IpRDNSBody($rdns);
     }
}
