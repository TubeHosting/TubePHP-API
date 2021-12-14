<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class LxcOs
{

    private int $osId;

    private string $displayName;


    /**
     * @return int
     */
    public function getOsId(): int
    {
         return $this->osId;
     }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
         return $this->displayName;
     }

    /**
     * @param int $osId
     * @param string $displayName
     */
    public function __construct(int $osId, string $displayName)
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
        $osId = (int) $object->osId;
        $displayName = (string) $object->displayName;

        return new LxcOs($osId, $displayName);
     }
}
