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

    private $osType;


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
     * @return ?string
     */
    public function getOsType(): ?string
    {
         return $this->osType;
     }

    /**
     * @param int|null $osId
     * @param string|null $displayName
     * @param string|null $osType
     */
    public function __construct(?int $osId, ?string $displayName, ?string $osType)
    {
        $this->osId = $osId;
        $this->displayName = $displayName;
        $this->osType = $osType;
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
        'osType' => $this->getOsType(),
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
        }else $osId = null;

        if (isset($object->displayName)) {
            $displayName = (string) $object->displayName;
        }else $displayName = null;

        if (isset($object->osType)) {
            $osType = (string) $object->osType;
        }else $osType = null;

        return new LxcOs($osId, $displayName, $osType);
     }
}
