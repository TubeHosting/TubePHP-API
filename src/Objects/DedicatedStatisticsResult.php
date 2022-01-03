<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DedicatedStatisticsResult
{

    private $bundled;

    private $interfaces;


    /**
     * @return ?object
     */
    public function getBundled(): ?object
    {
         return $this->bundled;
     }

    /**
     * @return ?object
     */
    public function getInterfaces(): ?object
    {
         return $this->interfaces;
     }

    /**
     * @param object|null $bundled
     * @param object|null $interfaces
     */
    public function __construct(?object $bundled, ?object $interfaces)
    {
        $this->bundled = $bundled;
        $this->interfaces = $interfaces;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'bundled' => $this->getBundled(),
        'interfaces' => $this->getInterfaces(),
        ];
    }

    /**
     * @param object $object
     * @return DedicatedStatisticsResult
     */
    public static function fromStdClass(object $object):DedicatedStatisticsResult
    {

        if (isset($object->bundled)) {
           $bundled = object::fromStdClass((object)$object->bundled);
        }else $bundled = $object->bundled=null;

        if (isset($object->interfaces)) {
           $interfaces = object::fromStdClass((object)$object->interfaces);
        }else $interfaces = $object->interfaces=null;

        return new DedicatedStatisticsResult($bundled, $interfaces);
     }
}
