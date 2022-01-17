<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class Name
{

    private $firstname;

    private $lastname;


    /**
     * @return ?string
     */
    public function getFirstname(): ?string
    {
         return $this->firstname;
     }

    /**
     * @return ?string
     */
    public function getLastname(): ?string
    {
         return $this->lastname;
     }

    /**
     * @param string|null $firstname
     * @param string|null $lastname
     */
    public function __construct(?string $firstname, ?string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    /**
     * @return array
     */
    public function getAsArr():array
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
        }else $firstname = null;

        if (isset($object->lastname)) {
            $lastname = (string) $object->lastname;
        }else $lastname = null;

        return new Name($firstname, $lastname);
     }
}
