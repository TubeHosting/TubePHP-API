<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class SimpleUser
{

    private int $id;

    private string $mail;

    private string $firstname;

    private string $lastname;


    /**
     * @return int
     */
    public function getId(): int
    {
         return $this->id;
     }

    /**
     * @return string
     */
    public function getMail(): string
    {
         return $this->mail;
     }

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
     * @param int $id
     * @param string $mail
     * @param string $firstname
     * @param string $lastname
     */
    public function __construct(int $id, string $mail, string $firstname, string $lastname)
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
        $id = (int) $object->id;
        $mail = (string) $object->mail;
        $firstname = (string) $object->firstname;
        $lastname = (string) $object->lastname;

        return new SimpleUser($id, $mail, $firstname, $lastname);
     }
}
