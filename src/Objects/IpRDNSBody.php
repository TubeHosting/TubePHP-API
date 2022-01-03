<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class IpRDNSBody
{

    private $rdns;


    /**
     * @return ?string
     */
    public function getRdns(): ?string
    {
         return $this->rdns;
     }

    /**
     * @param string|null $rdns
     */
    public function __construct(?string $rdns)
    {
        $this->rdns = $rdns;
    }

    /**
     * @return array
     */
    public function getAsArr():array
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

        if (isset($object->rdns)) {
            $rdns = (string) $object->rdns;
        }else $rdns = $object->rdns=null;

        return new IpRDNSBody($rdns);
     }
}
