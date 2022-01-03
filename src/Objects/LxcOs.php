<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class LxcOs
{

    private $osId;

    private $displayName;


    /**
     * @return ?int
     */
    public function getOsId(): ?int
    {
         return $this->osId;
     }

    /**
     * @return ?string
     */
    public function getDisplayName(): ?string
    {
         return $this->displayName;
     }

    /**
     * @param int|null $osId
     * @param string|null $displayName
     */
    public function __construct(?int $osId, ?string $displayName)
    {
        $this->osId = $osId;
        $this->displayName = $displayName;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'osId' => $this->getOsId(),
        'displayName' => $this->getDisplayName(),
        ];
    }

    /**
     * @param object $object
     * @return LxcOs
     */
    public static function fromStdClass(object $object):LxcOs
    {

        if (isset($object->osId)) {
            $osId = (int) $object->osId;
        }else $osId = $object->osId=null;

        if (isset($object->displayName)) {
            $displayName = (string) $object->displayName;
        }else $displayName = $object->displayName=null;

        return new LxcOs($osId, $displayName);
     }
}
