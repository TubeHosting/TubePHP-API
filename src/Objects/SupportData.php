<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class SupportData
{

    private string $discordName;

    private string $skypeName;

    private string $phoneNumber;


    /**
     * @return string
     */
    public function getDiscordName(): string
    {
         return $this->discordName;
     }

    /**
     * @return string
     */
    public function getSkypeName(): string
    {
         return $this->skypeName;
     }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
         return $this->phoneNumber;
     }

    /**
     * @param string $discordName
     * @param string $skypeName
     * @param string $phoneNumber
     */
    public function __construct(string $discordName, string $skypeName, string $phoneNumber)
    {
        $this->discordName = $discordName;
        $this->skypeName = $skypeName;
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return array
     */
    public function getAsArr()
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
        $discordName = (string) $object->discordName;
        $skypeName = (string) $object->skypeName;
        $phoneNumber = (string) $object->phoneNumber;

        return new SupportData($discordName, $skypeName, $phoneNumber);
     }
}
