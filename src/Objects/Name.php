<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class Name
{

    private string|null $firstname;

    private string|null $lastname;


    /**
     * @return string|null
     */
    public function getFirstname(): string|null
    {
         return $this->firstname;
     }

    /**
     * @return string|null
     */
    public function getLastname(): string|null
    {
         return $this->lastname;
     }

    /**
     * @param string|null $firstname
     * @param string|null $lastname
     */
    public function __construct(string|null $firstname, string|null $lastname)
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

        if (isset($object->firstname)) {
            $firstname = (string) $object->firstname;
        }else $firstname = $object->firstname=null;

        if (isset($object->lastname)) {
            $lastname = (string) $object->lastname;
        }else $lastname = $object->lastname=null;

        return new Name($firstname, $lastname);
     }
}
