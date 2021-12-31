<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class SimpleUser
{

    private int|null $id;

    private string|null $mail;

    private string|null $firstname;

    private string|null $lastname;


    /**
     * @return int|null
     */
    public function getId(): int|null
    {
         return $this->id;
     }

    /**
     * @return string|null
     */
    public function getMail(): string|null
    {
         return $this->mail;
     }

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
     * @param int|null $id
     * @param string|null $mail
     * @param string|null $firstname
     * @param string|null $lastname
     */
    public function __construct(int|null $id, string|null $mail, string|null $firstname, string|null $lastname)
    {
        $this->id = $id;
        $this->mail = $mail;
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
