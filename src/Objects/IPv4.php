<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class IPv4
{

    private $id;

    private $macBind;

    private $gateway;

    private $cidr;

    private $available;

    private $ipv4;

    private $rdns;


    /**
     * @return ?int
     */
    public function getId(): ?int
    {
         return $this->id;
     }

    /**
     * @return ?string
     */
    public function getMacBind(): ?string
    {
         return $this->macBind;
     }

    /**
     * @return ?string
     */
    public function getGateway(): ?string
    {
         return $this->gateway;
     }

    /**
     * @return ?int
     */
    public function getCidr(): ?int
    {
         return $this->cidr;
     }

    /**
     * @return ?bool
     */
    public function getAvailable(): ?bool
    {
         return $this->available;
     }

    /**
     * @return ?string
     */
    public function getIpv4(): ?string
    {
         return $this->ipv4;
     }

    /**
     * @return ?string
     */
    public function getRdns(): ?string
    {
         return $this->rdns;
     }

    /**
     * @param int|null $id
     * @param string|null $macBind
     * @param string|null $gateway
     * @param int|null $cidr
     * @param bool|null $available
     * @param string|null $ipv4
     * @param string|null $rdns
     */
    public function __construct(?int $id, ?string $macBind, ?string $gateway, ?int $cidr, ?bool $available, ?string $ipv4, ?string $rdns)
    {
        $this->id = $id;
        $this->macBind = $macBind;
        $this->gateway = $gateway;
        $this->cidr = $cidr;
        $this->available = $available;
        $this->ipv4 = $ipv4;
        $this->rdns = $rdns;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'id' => $this->getId(),
        'macBind' => $this->getMacBind(),
        'gateway' => $this->getGateway(),
        'cidr' => $this->getCidr(),
        'available' => $this->getAvailable(),
        'ipv4' => $this->getIpv4(),
        'rdns' => $this->getRdns(),
        ];
    }

    /**
     * @param object $object
     * @return IPv4
     */
    public static function fromStdClass(object $object):IPv4
    {

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->macBind)) {
            $macBind = (string) $object->macBind;
        }else $macBind = $object->macBind=null;

        if (isset($object->gateway)) {
            $gateway = (string) $object->gateway;
        }else $gateway = $object->gateway=null;

        if (isset($object->cidr)) {
            $cidr = (int) $object->cidr;
        }else $cidr = $object->cidr=null;

        if (isset($object->available)) {
            $available = (bool) $object->available;
        }else $available = $object->available=null;

        if (isset($object->ipv4)) {
            $ipv4 = (string) $object->ipv4;
        }else $ipv4 = $object->ipv4=null;

        if (isset($object->rdns)) {
            $rdns = (string) $object->rdns;
        }else $rdns = $object->rdns=null;

        return new IPv4($id, $macBind, $gateway, $cidr, $available, $ipv4, $rdns);
     }


    /**
     * @param string $ipV4
     * @param IpRDNSBody $ipRDNSBody
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function changeRDNS(string $ipV4,IpRDNSBody $ipRDNSBody):string 
    {
        $result = TubeAPI::request('PUT', '/ips/'.$ipV4.'/rdns', $ipRDNSBody->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param string $ipV4
     * @param DescriptionBody $descriptionBody
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function changeIPv4Description(string $ipV4,DescriptionBody $descriptionBody):string 
    {
        $result = TubeAPI::request('PUT', '/ips/'.$ipV4.'/description', $descriptionBody->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param string $ipV4
     * @return  CombahtonDDoSIPStatus
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getDDoSModeStatus(string $ipV4): CombahtonDDoSIPStatus 
    {
        $result = TubeAPI::request('GET', '/ips/'.$ipV4.'/ddos/status', null, TubeAPI::$token);
        return  CombahtonDDoSIPStatus::fromStdClass(json_decode($result));
    }
    /**
     * @param string $ipV4
     * @param IPDDoSStatus $iPDDoSStatus
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function changeDDoSModeStatus(string $ipV4,IPDDoSStatus $iPDDoSStatus):string 
    {
        $result = TubeAPI::request('PUT', '/ips/'.$ipV4.'/ddos/status', $iPDDoSStatus->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param string $ipV4
     * @return  LinkIPv4BundleIPv4
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getIPLinkBundle(string $ipV4): LinkIPv4BundleIPv4 
    {
        $result = TubeAPI::request('GET', '/ips/'.$ipV4.'', null, TubeAPI::$token);
        return  LinkIPv4BundleIPv4::fromStdClass(json_decode($result));
    }


    /**
     * @param string $ipV4
     * @return array
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getDDoSIncidentsOnIPv4(string $ipV4):array 
    {
        $result = TubeAPI::request('GET', '/ips/'.$ipV4.'/ddos/incidents', null, TubeAPI::$token);
        $tmpResults = json_decode($result);
        //handle objects in array
        $results = [];
        foreach ($tmpResults as $key => $result) {
            $result = CombahtonDDoSAttack::fromStdClass($result);
            $result = array($key => $result);
            $results = array_merge($results, $result);
        }
        return $results;
    }
}
