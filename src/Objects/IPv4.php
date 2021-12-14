<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class IPv4
{

    private int $id;

    private string $macBind;

    private string $gateway;

    private int $cidr;

    private bool $available;

    private string $ipv4;

    private string $rdns;


    /**
     * @return int
     */
    public function getId(): int
    {
         return $this->id;
     }

    /**
     * @return string
     */
    public function getMacBind(): string
    {
         return $this->macBind;
     }

    /**
     * @return string
     */
    public function getGateway(): string
    {
         return $this->gateway;
     }

    /**
     * @return int
     */
    public function getCidr(): int
    {
         return $this->cidr;
     }

    /**
     * @return bool
     */
    public function getAvailable(): bool
    {
         return $this->available;
     }

    /**
     * @return string
     */
    public function getIpv4(): string
    {
         return $this->ipv4;
     }

    /**
     * @return string
     */
    public function getRdns(): string
    {
         return $this->rdns;
     }

    /**
     * @param int $id
     * @param string $macBind
     * @param string $gateway
     * @param int $cidr
     * @param bool $available
     * @param string $ipv4
     * @param string $rdns
     */
    public function __construct(int $id, string $macBind, string $gateway, int $cidr, bool $available, string $ipv4, string $rdns)
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
    public function getAsArr()
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
        $id = (int) $object->id;
        $macBind = (string) $object->macBind;
        $gateway = (string) $object->gateway;
        $cidr = (int) $object->cidr;
        $available = (bool) $object->available;
        $ipv4 = (string) $object->ipv4;
        $rdns = (string) $object->rdns;

        return new IPv4($id, $macBind, $gateway, $cidr, $available, $ipv4, $rdns);
     }


    /**
     * @param string $ipV4
     * @param IpRDNSBody $ipRDNSBody
     * @return string
     * @throws \Exception
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
     * @throws \Exception
     */
    public static function changeIPv4Description(string $ipV4,DescriptionBody $descriptionBody):string 
    {
        $result = TubeAPI::request('PUT', '/ips/'.$ipV4.'/description', $descriptionBody->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param string $ipV4
     * @return  CombahtonDDoSIPStatus
     * @throws \Exception
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
     * @throws \Exception
     */
    public static function changeDDoSModeStatus(string $ipV4,IPDDoSStatus $iPDDoSStatus):string 
    {
        $result = TubeAPI::request('PUT', '/ips/'.$ipV4.'/ddos/status', $iPDDoSStatus->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param string $ipV4
     * @return  LinkIPv4BundleIPv4
     * @throws \Exception
     */
    public static function getIPLinkBundle(string $ipV4): LinkIPv4BundleIPv4 
    {
        $result = TubeAPI::request('GET', '/ips/'.$ipV4.'', null, TubeAPI::$token);
        return  LinkIPv4BundleIPv4::fromStdClass(json_decode($result));
    }


    /**
     * @param string $ipV4
     * @return array
     * @throws \Exception
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
