<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class SimpleUser
{

    private $id;

    private $mail;

    private $firstname;

    private $lastname;


    /**
     * @return ?int
     */
    public function getId(): ?int
    {
         return $this->id;
     }

    /**
     * @return ?string
     */
    public function getMail(): ?string
    {
         return $this->mail;
     }

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
     * @param int|null $id
     * @param string|null $mail
     * @param string|null $firstname
     * @param string|null $lastname
     */
    public function __construct(?int $id, ?string $mail, ?string $firstname, ?string $lastname)
    {
        $this->id = $id;
        $this->mail = $mail;
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
        'id' => $this->getId(),
        'mail' => $this->getMail(),
        'firstname' => $this->getFirstname(),
        'lastname' => $this->getLastname(),
        ];
    }

    /**
     * @param object $object
     * @return SimpleUser
     */
    public static function fromStdClass(object $object):SimpleUser
    {

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->mail)) {
            $mail = (string) $object->mail;
        }else $mail = $object->mail=null;

        if (isset($object->firstname)) {
            $firstname = (string) $object->firstname;
        }else $firstname = $object->firstname=null;

        if (isset($object->lastname)) {
            $lastname = (string) $object->lastname;
        }else $lastname = $object->lastname=null;

        return new SimpleUser($id, $mail, $firstname, $lastname);
     }
}
