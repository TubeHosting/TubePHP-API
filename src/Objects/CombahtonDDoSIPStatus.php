<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class CombahtonDDoSIPStatus
{

    private string|null $layer4;

    private string|null $layer7;

    private string|null $last_change;


    /**
     * @return string|null
     */
    public function getLayer4(): string|null
    {
         return $this->layer4;
     }

    /**
     * @return string|null
     */
    public function getLayer7(): string|null
    {
         return $this->layer7;
     }

    /**
     * @return string|null
     */
    public function getLast_change(): string|null
    {
         return $this->last_change;
     }

    /**
     * @param string|null $layer4
     * @param string|null $layer7
     * @param string|null $last_change
     */
    public function __construct(string|null $layer4, string|null $layer7, string|null $last_change)
    {
        $this->layer4 = $layer4;
        $this->layer7 = $layer7;
        $this->last_change = $last_change;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'layer4' => $this->getLayer4(),
        'layer7' => $this->getLayer7(),
        'last_change' => $this->getLast_change(),
        ];
    }

    /**
     * @param object $object
     * @return CombahtonDDoSIPStatus
     */
    public static function fromStdClass(object $object):CombahtonDDoSIPStatus
    {

        if (isset($object->layer4)) {
            $layer4 = (string) $object->layer4;
        }else $layer4 = $object->layer4=null;

        if (isset($object->layer7)) {
            $layer7 = (string) $object->layer7;
        }else $layer7 = $object->layer7=null;

        if (isset($object->last_change)) {
            $last_change = (string) $object->last_change;
        }else $last_change = $object->last_change=null;

        return new CombahtonDDoSIPStatus($layer4, $layer7, $last_change);
     }
}
