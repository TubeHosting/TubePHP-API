<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class SupportData
{

    private $discordName;

    private $skypeName;

    private $phoneNumber;


    /**
     * @return ?string
     */
    public function getDiscordName(): ?string
    {
         return $this->discordName;
     }

    /**
     * @return ?string
     */
    public function getSkypeName(): ?string
    {
         return $this->skypeName;
     }

    /**
     * @return ?string
     */
    public function getPhoneNumber(): ?string
    {
         return $this->phoneNumber;
     }

    /**
     * @param string|null $discordName
     * @param string|null $skypeName
     * @param string|null $phoneNumber
     */
    public function __construct(?string $discordName, ?string $skypeName, ?string $phoneNumber)
    {
        $this->discordName = $discordName;
        $this->skypeName = $skypeName;
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'discordName' => $this->getDiscordName(),
        'skypeName' => $this->getSkypeName(),
        'phoneNumber' => $this->getPhoneNumber(),
        ];
    }

    /**
     * @param object $object
     * @return SupportData
     */
    public static function fromStdClass(object $object):SupportData
    {

        if (isset($object->discordName)) {
            $discordName = (string) $object->discordName;
        }else $discordName = $object->discordName=null;

        if (isset($object->skypeName)) {
            $skypeName = (string) $object->skypeName;
        }else $skypeName = $object->skypeName=null;

        if (isset($object->phoneNumber)) {
            $phoneNumber = (string) $object->phoneNumber;
        }else $phoneNumber = $object->phoneNumber=null;

        return new SupportData($discordName, $skypeName, $phoneNumber);
     }
}
