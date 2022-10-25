<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class Price
{

    private $net;

    private $gross;


    /**
     * @return ?int
     */
    public function getNet(): ?int
    {
         return $this->net;
     }

    /**
     * @return ?int
     */
    public function getGross(): ?int
    {
         return $this->gross;
     }

    /**
     * @param int|null $net
     * @param int|null $gross
     */
    public function __construct(?int $net, ?int $gross)
    {
        $this->net = $net;
        $this->gross = $gross;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'net' => $this->getNet(),
        'gross' => $this->getGross(),
        ];
    }

    /**
     * @param object $object
     * @return Price
     */
    public static function fromStdClass(object $object):Price
    {

        if (isset($object->net)) {
            $net = (int) $object->net;
        }else $net = null;

        if (isset($object->gross)) {
            $gross = (int) $object->gross;
        }else $gross = null;

        return new Price($net, $gross);
     }
}
