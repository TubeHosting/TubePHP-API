<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class User
{

    private $id;

    private $balance;

    private $mail;

    private $locale;

    private $role;

    private $enabled;

    private $lastip;

    private $regDate;

    private $verified;

    private $address;

    private $debuggingEnabled;

    private $paymentInfo;

    private $ipWhitelist;

    private $supportData;

    private $priceType;

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
     * @return ?int
     */
    public function getBalance(): ?int
    {
         return $this->balance;
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
    public function getLocale(): ?string
    {
         return $this->locale;
     }

    /**
     * @return ?string
     */
    public function getRole(): ?string
    {
         return $this->role;
     }

    /**
     * @return ?bool
     */
    public function getEnabled(): ?bool
    {
         return $this->enabled;
     }

    /**
     * @return ?string
     */
    public function getLastip(): ?string
    {
         return $this->lastip;
     }

    /**
     * @return ?string
     */
    public function getRegDate(): ?string
    {
         return $this->regDate;
     }

    /**
     * @return ?bool
     */
    public function getVerified(): ?bool
    {
         return $this->verified;
     }

    /**
     * @return ?Address
     */
    public function getAddress(): ?Address
    {
         return $this->address;
     }

    /**
     * @return ?bool
     */
    public function getDebuggingEnabled(): ?bool
    {
         return $this->debuggingEnabled;
     }

    /**
     * @return ?UserPaymentInfo
     */
    public function getPaymentInfo(): ?UserPaymentInfo
    {
         return $this->paymentInfo;
     }

    /**
     * @return ?array
     */
    public function getIpWhitelist(): ?array
    {
         return $this->ipWhitelist;
     }

    /**
     * @return ?SupportData
     */
    public function getSupportData(): ?SupportData
    {
         return $this->supportData;
     }

    /**
     * @return ?string
     */
    public function getPriceType(): ?string
    {
         return $this->priceType;
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
     * @param int|null $balance
     * @param string|null $mail
     * @param string|null $locale
     * @param string|null $role
     * @param bool|null $enabled
     * @param string|null $lastip
     * @param string|null $regDate
     * @param bool|null $verified
     * @param Address|null $address
     * @param bool|null $debuggingEnabled
     * @param UserPaymentInfo|null $paymentInfo
     * @param array|null $ipWhitelist
     * @param SupportData|null $supportData
     * @param string|null $priceType
     * @param string|null $firstname
     * @param string|null $lastname
     */
    public function __construct(?int $id, ?int $balance, ?string $mail, ?string $locale, ?string $role, ?bool $enabled, ?string $lastip, ?string $regDate, ?bool $verified, ?Address $address, ?bool $debuggingEnabled, ?UserPaymentInfo $paymentInfo, ?array $ipWhitelist, ?SupportData $supportData, ?string $priceType, ?string $firstname, ?string $lastname)
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
        $this->debuggingEnabled = $debuggingEnabled;
        $this->paymentInfo = $paymentInfo;

        //handle stuff in array
        $tmpIpWhitelist = $ipWhitelist;
        $ipWhitelist = [];
        if($tmpIpWhitelist!==null){
             foreach ($tmpIpWhitelist as $key => $item) {
                 $singleItem = array($key => $item);
                 $ipWhitelist = array_merge($ipWhitelist, $singleItem);
            }
        }
        $this->ipWhitelist = $ipWhitelist;
        $this->supportData = $supportData;
        $this->priceType = $priceType;
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
        'balance' => $this->getBalance(),
        'mail' => $this->getMail(),
        'locale' => $this->getLocale(),
        'role' => $this->getRole(),
        'enabled' => $this->getEnabled(),
        'lastip' => $this->getLastip(),
        'regDate' => $this->getRegDate(),
        'verified' => $this->getVerified(),
        'address' => $this->getAddress(),
        'debuggingEnabled' => $this->getDebuggingEnabled(),
        'paymentInfo' => $this->getPaymentInfo(),
        'ipWhitelist' => $this->getIpWhitelist(),
        'supportData' => $this->getSupportData(),
        'priceType' => $this->getPriceType(),
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
        }else $id = null;

        if (isset($object->balance)) {
            $balance = (int) $object->balance;
        }else $balance = null;

        if (isset($object->mail)) {
            $mail = (string) $object->mail;
        }else $mail = null;

        if (isset($object->locale)) {
            $locale = (string) $object->locale;
        }else $locale = null;

        if (isset($object->role)) {
            $role = (string) $object->role;
        }else $role = null;

        if (isset($object->enabled)) {
            $enabled = (bool) $object->enabled;
        }else $enabled = null;

        if (isset($object->lastip)) {
            $lastip = (string) $object->lastip;
        }else $lastip = null;

        if (isset($object->regDate)) {
            $regDate = (string) $object->regDate;
        }else $regDate = null;

        if (isset($object->verified)) {
            $verified = (bool) $object->verified;
        }else $verified = null;

        if (isset($object->address)) {
           $address = Address::fromStdClass((object)$object->address);
        }else $address = null;

        if (isset($object->debuggingEnabled)) {
            $debuggingEnabled = (bool) $object->debuggingEnabled;
        }else $debuggingEnabled = null;

        if (isset($object->paymentInfo)) {
           $paymentInfo = UserPaymentInfo::fromStdClass((object)$object->paymentInfo);
        }else $paymentInfo = null;

        if (isset($object->ipWhitelist)) {
            $ipWhitelist = (array) $object->ipWhitelist;
        }else $ipWhitelist = null;

        if (isset($object->supportData)) {
           $supportData = SupportData::fromStdClass((object)$object->supportData);
        }else $supportData = null;

        if (isset($object->priceType)) {
            $priceType = (string) $object->priceType;
        }else $priceType = null;

        if (isset($object->firstname)) {
            $firstname = (string) $object->firstname;
        }else $firstname = null;

        if (isset($object->lastname)) {
            $lastname = (string) $object->lastname;
        }else $lastname = null;

        return new User($id, $balance, $mail, $locale, $role, $enabled, $lastip, $regDate, $verified, $address, $debuggingEnabled, $paymentInfo, $ipWhitelist, $supportData, $priceType, $firstname, $lastname);
     }


    /**
     * @link https://doc.api.tube-hosting.com/#/authentication-controller/resetPassword
     * @param string $token
     * @param string $string
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function resetPassword(string $token,string $string):string 
    {
        $result = TubeAPI::request('POST', '/resetPassword?token='.$token.'', $string, TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/authentication-controller/register
     * @param AuthenticationRegisterData $authenticationRegisterData
     * @return  JWTTokenResponse
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function register(AuthenticationRegisterData $authenticationRegisterData): JWTTokenResponse 
    {
        $result = TubeAPI::request('POST', '/register', $authenticationRegisterData->getAsArr(), TubeAPI::$token);
        return  JWTTokenResponse::fromStdClass(json_decode($result));
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/me-controller/changeSupportData
     * @param SupportData $supportData
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function changeSupportData(SupportData $supportData):string 
    {
        $result = TubeAPI::request('POST', '/me/supportData', $supportData->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/me-controller/changePassword
     * @param UserChangePasswordObject $userChangePasswordObject
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function changePassword(UserChangePasswordObject $userChangePasswordObject):string 
    {
        $result = TubeAPI::request('POST', '/me/password', $userChangePasswordObject->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/me-controller/changeNames
     * @param User $user
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function changeNames(User $user):string 
    {
        $result = TubeAPI::request('POST', '/me/names', $user->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/me-controller/changeLocale
     * @param RequestBodyLocale $requestBodyLocale
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function changeLocale(RequestBodyLocale $requestBodyLocale):string 
    {
        $result = TubeAPI::request('POST', '/me/locale', $requestBodyLocale->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/me-controller/changeAddress
     * @param Address $address
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function changeAddress(Address $address):string 
    {
        $result = TubeAPI::request('POST', '/me/address', $address->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/authentication-controller/logout
     * @param string $Authorization
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function logout(string $Authorization):string 
    {
        $result = TubeAPI::request('POST', '/logout?Authorization='.$Authorization.'', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/authentication-controller/login
     * @param AuthenticationLoginData $authenticationLoginData
     * @return  JWTTokenResponse
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function login(AuthenticationLoginData $authenticationLoginData): JWTTokenResponse 
    {
        $result = TubeAPI::request('POST', '/login', $authenticationLoginData->getAsArr(), TubeAPI::$token);
        TubeAPI::$token = JWTTokenResponse::fromStdClass(json_decode($result))->getToken();
        return  JWTTokenResponse::fromStdClass(json_decode($result));
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/authentication-controller/requestVerification
     * @param string $email
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function requestVerification(string $email):string 
    {
        $result = TubeAPI::request('GET', '/requestVerification?email='.$email.'', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/authentication-controller/requestPasswordReset
     * @param string $email
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function requestPasswordReset(string $email):string 
    {
        $result = TubeAPI::request('GET', '/requestPasswordReset?email='.$email.'', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/me-controller/meInfo
     * @return  User
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function meInfo(): User 
    {
        $result = TubeAPI::request('GET', '/me', null, TubeAPI::$token);
        return  User::fromStdClass(json_decode($result));
    }
}
