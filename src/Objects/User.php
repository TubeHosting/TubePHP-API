<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class User
{

    private int|null $id;

    private int|null $balance;

    private string|null $mail;

    private string|null $locale;

    private string|null $role;

    private bool|null $enabled;

    private string|null $lastip;

    private string|null $regDate;

    private bool|null $verified;

    private Address|null $address;

    private SupportData|null $supportData;

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
     * @return int|null
     */
    public function getBalance(): int|null
    {
         return $this->balance;
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
    public function getLocale(): string|null
    {
         return $this->locale;
     }

    /**
     * @return string|null
     */
    public function getRole(): string|null
    {
         return $this->role;
     }

    /**
     * @return bool|null
     */
    public function getEnabled(): bool|null
    {
         return $this->enabled;
     }

    /**
     * @return string|null
     */
    public function getLastip(): string|null
    {
         return $this->lastip;
     }

    /**
     * @return string|null
     */
    public function getRegDate(): string|null
    {
         return $this->regDate;
     }

    /**
     * @return bool|null
     */
    public function getVerified(): bool|null
    {
         return $this->verified;
     }

    /**
     * @return Address|null
     */
    public function getAddress(): Address|null
    {
         return $this->address;
     }

    /**
     * @return SupportData|null
     */
    public function getSupportData(): SupportData|null
    {
         return $this->supportData;
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
     * @param int|null $balance
     * @param string|null $mail
     * @param string|null $locale
     * @param string|null $role
     * @param bool|null $enabled
     * @param string|null $lastip
     * @param string|null $regDate
     * @param bool|null $verified
     * @param Address|null $address
     * @param SupportData|null $supportData
     * @param string|null $firstname
     * @param string|null $lastname
     */
    public function __construct(int|null $id, int|null $balance, string|null $mail, string|null $locale, string|null $role, bool|null $enabled, string|null $lastip, string|null $regDate, bool|null $verified, Address|null $address, SupportData|null $supportData, string|null $firstname, string|null $lastname)
    {
        $this->id = $id;
        $this->balance = $balance;
        $this->mail = $mail;
        $this->locale = $locale;
        $this->role = $role;
        $this->enabled = $enabled;
        $this->lastip = $lastip;
        $this->regDate = $regDate;
        $this->verified = $verified;
        $this->address = $address;
        $this->supportData = $supportData;
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
        'balance' => $this->getBalance(),
        'mail' => $this->getMail(),
        'locale' => $this->getLocale(),
        'role' => $this->getRole(),
        'enabled' => $this->getEnabled(),
        'lastip' => $this->getLastip(),
        'regDate' => $this->getRegDate(),
        'verified' => $this->getVerified(),
        'address' => $this->getAddress(),
        'supportData' => $this->getSupportData(),
        'firstname' => $this->getFirstname(),
        'lastname' => $this->getLastname(),
        ];
    }

    /**
     * @param object $object
     * @return User
     */
    public static function fromStdClass(object $object):User
    {

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->balance)) {
            $balance = (int) $object->balance;
        }else $balance = $object->balance=null;

        if (isset($object->mail)) {
            $mail = (string) $object->mail;
        }else $mail = $object->mail=null;

        if (isset($object->locale)) {
            $locale = (string) $object->locale;
        }else $locale = $object->locale=null;

        if (isset($object->role)) {
            $role = (string) $object->role;
        }else $role = $object->role=null;

        if (isset($object->enabled)) {
            $enabled = (bool) $object->enabled;
        }else $enabled = $object->enabled=null;

        if (isset($object->lastip)) {
            $lastip = (string) $object->lastip;
        }else $lastip = $object->lastip=null;

        if (isset($object->regDate)) {
            $regDate = (string) $object->regDate;
        }else $regDate = $object->regDate=null;

        if (isset($object->verified)) {
            $verified = (bool) $object->verified;
        }else $verified = $object->verified=null;

        if (isset($object->address)) {
           $address = Address::fromStdClass((object)$object->address);
        }else $address = $object->address=null;

        if (isset($object->supportData)) {
           $supportData = SupportData::fromStdClass((object)$object->supportData);
        }else $supportData = $object->supportData=null;

        if (isset($object->firstname)) {
            $firstname = (string) $object->firstname;
        }else $firstname = $object->firstname=null;

        if (isset($object->lastname)) {
            $lastname = (string) $object->lastname;
        }else $lastname = $object->lastname=null;

        return new User($id, $balance, $mail, $locale, $role, $enabled, $lastip, $regDate, $verified, $address, $supportData, $firstname, $lastname);
     }


    /**
     * @param string $token
     * @param string $string
     * @return string
     * @throws Exceptions\RequestException
     */
    public static function resetPassword(string $token,string $string):string 
    {
        $result = TubeAPI::request('POST', '/resetPassword?token='.$token.'', $string->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param AuthenticationRegisterData $authenticationRegisterData
     * @return  JWTTokenResponse
     * @throws Exceptions\RequestException
     */
    public static function register(AuthenticationRegisterData $authenticationRegisterData): JWTTokenResponse 
    {
        $result = TubeAPI::request('POST', '/register', $authenticationRegisterData->getAsArr(), TubeAPI::$token);
        return  JWTTokenResponse::fromStdClass(json_decode($result));
    }


    /**
     * @param SupportData $supportData
     * @return string
     * @throws Exceptions\RequestException
     */
    public static function changeSupportData(SupportData $supportData):string 
    {
        $result = TubeAPI::request('POST', '/me/supportData', $supportData->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param UserChangePasswordObject $userChangePasswordObject
     * @return string
     * @throws Exceptions\RequestException
     */
    public static function changePassword(UserChangePasswordObject $userChangePasswordObject):string 
    {
        $result = TubeAPI::request('POST', '/me/password', $userChangePasswordObject->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param User $user
     * @return string
     * @throws Exceptions\RequestException
     */
    public static function changeNames(User $user):string 
    {
        $result = TubeAPI::request('POST', '/me/names', $user->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param User $user
     * @return string
     * @throws Exceptions\RequestException
     */
    public static function changeMail(User $user):string 
    {
        $result = TubeAPI::request('POST', '/me/mail', $user->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param RequestBodyLocale $requestBodyLocale
     * @return string
     * @throws Exceptions\RequestException
     */
    public static function changeLocale(RequestBodyLocale $requestBodyLocale):string 
    {
        $result = TubeAPI::request('POST', '/me/locale', $requestBodyLocale->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param Address $address
     * @return string
     * @throws Exceptions\RequestException
     */
    public static function changeAddress(Address $address):string 
    {
        $result = TubeAPI::request('POST', '/me/address', $address->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param AuthenticationLoginData $authenticationLoginData
     * @return  JWTTokenResponse
     * @throws Exceptions\RequestException
     */
    public static function login(AuthenticationLoginData $authenticationLoginData): JWTTokenResponse 
    {
        $result = TubeAPI::request('POST', '/login', $authenticationLoginData->getAsArr(), TubeAPI::$token);
        TubeAPI::$token = JWTTokenResponse::fromStdClass(json_decode($result))->getToken();
        return  JWTTokenResponse::fromStdClass(json_decode($result));
    }


    /**
     * @param string $email
     * @return string
     * @throws Exceptions\RequestException
     */
    public static function requestVerification(string $email):string 
    {
        $result = TubeAPI::request('GET', '/requestVerification?email='.$email.'', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @param string $email
     * @return string
     * @throws Exceptions\RequestException
     */
    public static function requestPasswordReset(string $email):string 
    {
        $result = TubeAPI::request('GET', '/requestPasswordReset?email='.$email.'', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @return  User
     * @throws Exceptions\RequestException
     */
    public static function meInfo(): User 
    {
        $result = TubeAPI::request('GET', '/me', null, TubeAPI::$token);
        return  User::fromStdClass(json_decode($result));
    }
}
