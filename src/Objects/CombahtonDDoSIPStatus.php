<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class CombahtonDDoSIPStatus
{

    private $layer4;

    private $layer7;

    private $last_change;


    /**
     * @return ?string
     */
    public function getLayer4(): ?string
    {
         return $this->layer4;
     }

    /**
     * @return ?string
     */
    public function getLayer7(): ?string
    {
         return $this->layer7;
     }

    /**
     * @return ?string
     */
    public function getLast_change(): ?string
    {
         return $this->last_change;
     }

    /**
     * @param string|null $layer4
     * @param string|null $layer7
     * @param string|null $last_change
     */
    public function __construct(?string $layer4, ?string $layer7, ?string $last_change)
    {
        $this->layer4 = $layer4;
        $this->layer7 = $layer7;
        $this->last_change = $last_change;
    }

    /**
     * @return array
     */
    public function getAsArr():array
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
        }else $layer4 = null;

        if (isset($object->layer7)) {
            $layer7 = (string) $object->layer7;
        }else $layer7 = null;

        if (isset($object->last_change)) {
            $last_change = (string) $object->last_change;
        }else $last_change = null;

        return new CombahtonDDoSIPStatus($layer4, $layer7, $last_change);
     }
}
