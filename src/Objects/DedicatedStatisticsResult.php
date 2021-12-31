<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class DedicatedStatisticsResult
{

    private object|null $bundled;

    private object|null $interfaces;


    /**
     * @return object|null
     */
    public function getBundled(): object|null
    {
         return $this->bundled;
     }

    /**
     * @return object|null
     */
    public function getInterfaces(): object|null
    {
         return $this->interfaces;
     }

    /**
     * @param object|null $bundled
     * @param object|null $interfaces
     */
    public function __construct(object|null $bundled, object|null $interfaces)
    {
        $this->bundled = $bundled;
        $this->interfaces = $interfaces;
    }

    /**
     * @return array
     */
    public function getAsArr()
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
