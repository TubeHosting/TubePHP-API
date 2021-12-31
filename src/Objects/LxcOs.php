<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class LxcOs
{

    private int|null $osId;

    private string|null $displayName;


    /**
     * @return int|null
     */
    public function getOsId(): int|null
    {
         return $this->osId;
     }

    /**
     * @return string|null
     */
    public function getDisplayName(): string|null
    {
         return $this->displayName;
     }

    /**
     * @param int|null $osId
     * @param string|null $displayName
     */
    public function __construct(int|null $osId, string|null $displayName)
    {
        $this->osId = $osId;
        $this->displayName = $displayName;
    }

    /**
     * @return array
     */
    public function getAsArr()
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
