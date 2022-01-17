<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class AuthenticationRegisterData
{

    private $firstname;

    private $lastname;

    private $mail;

    private $password;

    private $locale;

    private $localeAsObject;


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
     * @return ?string
     */
    public function getMail(): ?string
    {
         return $this->mail;
     }

    /**
     * @return ?string
     */
    public function getPassword(): ?string
    {
         return $this->password;
     }

    /**
     * @return ?string
     */
    public function getLocale(): ?string
    {
         return $this->locale;
     }

    /**
     * @return ?object
     */
    public function getLocaleAsObject(): ?object
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
    public function __construct(?string $firstname, ?string $lastname, ?string $mail, ?string $password, ?string $locale, ?object $localeAsObject)
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
    public function getAsArr():array
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
        }else $firstname = null;

        if (isset($object->lastname)) {
            $lastname = (string) $object->lastname;
        }else $lastname = null;

        if (isset($object->mail)) {
            $mail = (string) $object->mail;
        }else $mail = null;

        if (isset($object->password)) {
            $password = (string) $object->password;
        }else $password = null;

        if (isset($object->locale)) {
            $locale = (string) $object->locale;
        }else $locale = null;

        if (isset($object->localeAsObject)) {
            $localeAsObject = (object) $object->localeAsObject;
        }else $localeAsObject = null;

        return new AuthenticationRegisterData($firstname, $lastname, $mail, $password, $locale, $localeAsObject);
     }
}
