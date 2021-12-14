<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class CombahtonDDoSIPStatus
{

    private string $layer4;

    private string $layer7;

    private string $last_change;


    /**
     * @return string
     */
    public function getLayer4(): string
    {
         return $this->layer4;
     }

    /**
     * @return string
     */
    public function getLayer7(): string
    {
         return $this->layer7;
     }

    /**
     * @return string
     */
    public function getLast_change(): string
    {
         return $this->last_change;
     }

    /**
     * @param string $layer4
     * @param string $layer7
     * @param string $last_change
     */
    public function __construct(string $layer4, string $layer7, string $last_change)
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
        $layer4 = (string) $object->layer4;
        $layer7 = (string) $object->layer7;
        $last_change = (string) $object->last_change;

        return new CombahtonDDoSIPStatus($layer4, $layer7, $last_change);
     }
}
