<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class Name
{

    private string $firstname;

    private string $lastname;


    /**
     * @return string
     */
    public function getFirstname(): string
    {
         return $this->firstname;
     }

    /**
     * @return string
     */
    public function getLastname(): string
    {
         return $this->lastname;
     }

    /**
     * @param string $firstname
     * @param string $lastname
     */
    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'firstname' => $this->getFirstname(),
        'lastname' => $this->getLastname(),
        ];
    }

    /**
     * @param object $object
     * @return Name
     */
    public static function fromStdClass(object $object):Name
    {
        $firstname = (string) $object->firstname;
        $lastname = (string) $object->lastname;

        return new Name($firstname, $lastname);
     }
}
