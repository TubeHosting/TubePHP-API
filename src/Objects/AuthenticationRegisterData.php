<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class AuthenticationRegisterData
{

    private string $firstname;

    private string $lastname;

    private string $mail;

    private string $password;

    private string $locale;

    private object $localeAsObject;


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
     * @return string
     */
    public function getMail(): string
    {
         return $this->mail;
     }

    /**
     * @return string
     */
    public function getPassword(): string
    {
         return $this->password;
     }

    /**
     * @return string
     */
    public function getLocale(): string
    {
         return $this->locale;
     }

    /**
     * @return object
     */
    public function getLocaleAsObject(): object
    {
         return $this->localeAsObject;
     }

    /**
     * @param string $firstname
     * @param string $lastname
     * @param string $mail
     * @param string $password
     * @param string $locale
     * @param object $localeAsObject
     */
    public function __construct(string $firstname, string $lastname, string $mail, string $password, string $locale, object $localeAsObject)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->mail = $mail;
        $this->password = $password;
        $this->locale = $locale;
        $this->localeAsObject = $localeAsObject;
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
        'mail' => $this->getMail(),
        'password' => $this->getPassword(),
        'locale' => $this->getLocale(),
        'localeAsObject' => $this->getLocaleAsObject(),
        ];
    }

    /**
     * @param object $object
     * @return AuthenticationRegisterData
     */
    public static function fromStdClass(object $object):AuthenticationRegisterData
    {
        $firstname = (string) $object->firstname;
        $lastname = (string) $object->lastname;
        $mail = (string) $object->mail;
        $password = (string) $object->password;
        $locale = (string) $object->locale;
        $localeAsObject = object::fromStdClass((object)$object->localeAsObject);

        return new AuthenticationRegisterData($firstname, $lastname, $mail, $password, $locale, $localeAsObject);
     }
}
