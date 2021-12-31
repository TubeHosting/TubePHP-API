<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class AuthenticationRegisterData
{

    private string|null $firstname;

    private string|null $lastname;

    private string|null $mail;

    private string|null $password;

    private string|null $locale;

    private object|null $localeAsObject;


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
     * @return string|null
     */
    public function getMail(): string|null
    {
         return $this->mail;
     }

    /**
     * @return string|null
     */
    public function getPassword(): string|null
    {
         return $this->password;
     }

    /**
     * @return string|null
     */
    public function getLocale(): string|null
    {
         return $this->locale;
     }

    /**
     * @return object|null
     */
    public function getLocaleAsObject(): object|null
    {
         return $this->localeAsObject;
     }

    /**
     * @param string|null $firstname
     * @param string|null $lastname
     * @param string|null $mail
     * @param string|null $password
     * @param string|null $locale
     * @param object|null $localeAsObject
     */
    public function __construct(string|null $firstname, string|null $lastname, string|null $mail, string|null $password, string|null $locale, object|null $localeAsObject)
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

        if (isset($object->firstname)) {
            $firstname = (string) $object->firstname;
        }else $firstname = $object->firstname=null;

        if (isset($object->lastname)) {
            $lastname = (string) $object->lastname;
        }else $lastname = $object->lastname=null;

        if (isset($object->mail)) {
            $mail = (string) $object->mail;
        }else $mail = $object->mail=null;

        if (isset($object->password)) {
            $password = (string) $object->password;
        }else $password = $object->password=null;

        if (isset($object->locale)) {
            $locale = (string) $object->locale;
        }else $locale = $object->locale=null;

        if (isset($object->localeAsObject)) {
           $localeAsObject = object::fromStdClass((object)$object->localeAsObject);
        }else $localeAsObject = $object->localeAsObject=null;

        return new AuthenticationRegisterData($firstname, $lastname, $mail, $password, $locale, $localeAsObject);
     }
}
