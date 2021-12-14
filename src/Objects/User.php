<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class User
{

    private int $id;

    private int $balance;

    private string $mail;

    private string $locale;

    private string $role;

    private bool $enabled;

    private string $lastip;

    private string $regDate;

    private bool $verified;

    private Address $address;

    private SupportData $supportData;

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
     * @return int
     */
    public function getBalance(): int
    {
         return $this->balance;
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
    public function getLocale(): string
    {
         return $this->locale;
     }

    /**
     * @return string
     */
    public function getRole(): string
    {
         return $this->role;
     }

    /**
     * @return bool
     */
    public function getEnabled(): bool
    {
         return $this->enabled;
     }

    /**
     * @return string
     */
    public function getLastip(): string
    {
         return $this->lastip;
     }

    /**
     * @return string
     */
    public function getRegDate(): string
    {
         return $this->regDate;
     }

    /**
     * @return bool
     */
    public function getVerified(): bool
    {
         return $this->verified;
     }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
         return $this->address;
     }

    /**
     * @return SupportData
     */
    public function getSupportData(): SupportData
    {
         return $this->supportData;
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
     * @param int $balance
     * @param string $mail
     * @param string $locale
     * @param string $role
     * @param bool $enabled
     * @param string $lastip
     * @param string $regDate
     * @param bool $verified
     * @param Address $address
     * @param SupportData $supportData
     * @param string $firstname
     * @param string $lastname
     */
    public function __construct(int $id, int $balance, string $mail, string $locale, string $role, bool $enabled, string $lastip, string $regDate, bool $verified, Address $address, SupportData $supportData, string $firstname, string $lastname)
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
        $id = (int) $object->id;
        $balance = (int) $object->balance;
        $mail = (string) $object->mail;
        $locale = (string) $object->locale;
        $role = (string) $object->role;
        $enabled = (bool) $object->enabled;
        $lastip = (string) $object->lastip;
        $regDate = (string) $object->regDate;
        $verified = (bool) $object->verified;
        $address = Address::fromStdClass((object)$object->address);
        $supportData = SupportData::fromStdClass((object)$object->supportData);
        $firstname = (string) $object->firstname;
        $lastname = (string) $object->lastname;

        return new User($id, $balance, $mail, $locale, $role, $enabled, $lastip, $regDate, $verified, $address, $supportData, $firstname, $lastname);
     }


    /**
     * @param string $token
     * @param string $string
     * @return string
     * @throws \Exception
     */
    public static function resetPassword(string $token,string $string):string 
    {
        $result = TubeAPI::request('POST', '/resetPassword?token='.$token.'', $string->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param AuthenticationRegisterData $authenticationRegisterData
     * @return  JWTTokenResponse
     * @throws \Exception
     */
    public static function register(AuthenticationRegisterData $authenticationRegisterData): JWTTokenResponse 
    {
        $result = TubeAPI::request('POST', '/register', $authenticationRegisterData->getAsArr(), TubeAPI::$token);
        return  JWTTokenResponse::fromStdClass(json_decode($result));
    }


    /**
     * @param SupportData $supportData
     * @return string
     * @throws \Exception
     */
    public static function changeSupportData(SupportData $supportData):string 
    {
        $result = TubeAPI::request('POST', '/me/supportData', $supportData->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param UserChangePasswordObject $userChangePasswordObject
     * @return string
     * @throws \Exception
     */
    public static function changePassword(UserChangePasswordObject $userChangePasswordObject):string 
    {
        $result = TubeAPI::request('POST', '/me/password', $userChangePasswordObject->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param User $user
     * @return string
     * @throws \Exception
     */
    public static function changeNames(User $user):string 
    {
        $result = TubeAPI::request('POST', '/me/names', $user->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param User $user
     * @return string
     * @throws \Exception
     */
    public static function changeMail(User $user):string 
    {
        $result = TubeAPI::request('POST', '/me/mail', $user->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param RequestBodyLocale $requestBodyLocale
     * @return string
     * @throws \Exception
     */
    public static function changeLocale(RequestBodyLocale $requestBodyLocale):string 
    {
        $result = TubeAPI::request('POST', '/me/locale', $requestBodyLocale->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param Address $address
     * @return string
     * @throws \Exception
     */
    public static function changeAddress(Address $address):string 
    {
        $result = TubeAPI::request('POST', '/me/address', $address->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param AuthenticationLoginData $authenticationLoginData
     * @return  JWTTokenResponse
     * @throws \Exception
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
     * @throws \Exception
     */
    public static function requestVerification(string $email):string 
    {
        $result = TubeAPI::request('GET', '/requestVerification?email='.$email.'', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @param string $email
     * @return string
     * @throws \Exception
     */
    public static function requestPasswordReset(string $email):string 
    {
        $result = TubeAPI::request('GET', '/requestPasswordReset?email='.$email.'', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @return  User
     * @throws \Exception
     */
    public static function meInfo(): User 
    {
        $result = TubeAPI::request('GET', '/me', null, TubeAPI::$token);
        return  User::fromStdClass(json_decode($result));
    }
}
