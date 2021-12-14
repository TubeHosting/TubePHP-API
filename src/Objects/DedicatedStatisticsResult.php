<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class DedicatedStatisticsResult
{

    private object $bundled;

    private object $interfaces;


    /**
     * @return object
     */
    public function getBundled(): object
    {
         return $this->bundled;
     }

    /**
     * @return object
     */
    public function getInterfaces(): object
    {
         return $this->interfaces;
     }

    /**
     * @param object $bundled
     * @param object $interfaces
     */
    public function __construct(object $bundled, object $interfaces)
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
        $bundled = object::fromStdClass((object)$object->bundled);
        $interfaces = object::fromStdClass((object)$object->interfaces);

        return new DedicatedStatisticsResult($bundled, $interfaces);
     }
}
