<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class Address
{

    private $company;

    private $city;

    private $street;

    private $streetNumber;

    private $numberAdditive;

    private $country;

    private $postalCode;


    /**
     * @return ?string
     */
    public function getCompany(): ?string
    {
         return $this->company;
     }

    /**
     * @return ?string
     */
    public function getCity(): ?string
    {
         return $this->city;
     }

    /**
     * @return ?string
     */
    public function getStreet(): ?string
    {
         return $this->street;
     }

    /**
     * @return ?string
     */
    public function getStreetNumber(): ?string
    {
         return $this->streetNumber;
     }

    /**
     * @return ?string
     */
    public function getNumberAdditive(): ?string
    {
         return $this->numberAdditive;
     }

    /**
     * @return ?string
     */
    public function getCountry(): ?string
    {
         return $this->country;
     }

    /**
     * @return ?string
     */
    public function getPostalCode(): ?string
    {
         return $this->postalCode;
     }

    /**
     * @param string|null $company
     * @param string|null $city
     * @param string|null $street
     * @param string|null $streetNumber
     * @param string|null $numberAdditive
     * @param string|null $country
     * @param string|null $postalCode
     */
    public function __construct(?string $company, ?string $city, ?string $street, ?string $streetNumber, ?string $numberAdditive, ?string $country, ?string $postalCode)
    {
        $this->company = $company;
        $this->city = $city;
        $this->street = $street;
        $this->streetNumber = $streetNumber;
        $this->numberAdditive = $numberAdditive;
        $this->country = $country;
        $this->postalCode = $postalCode;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'company' => $this->getCompany(),
        'city' => $this->getCity(),
        'street' => $this->getStreet(),
        'streetNumber' => $this->getStreetNumber(),
        'numberAdditive' => $this->getNumberAdditive(),
        'country' => $this->getCountry(),
        'postalCode' => $this->getPostalCode(),
        ];
    }

    /**
     * @param object $object
     * @return Address
     */
    public static function fromStdClass(object $object):Address
    {

        if (isset($object->company)) {
            $company = (string) $object->company;
        }else $company = $object->company=null;

        if (isset($object->city)) {
            $city = (string) $object->city;
        }else $city = $object->city=null;

        if (isset($object->street)) {
            $street = (string) $object->street;
        }else $street = $object->street=null;

        if (isset($object->streetNumber)) {
            $streetNumber = (string) $object->streetNumber;
        }else $streetNumber = $object->streetNumber=null;

        if (isset($object->numberAdditive)) {
            $numberAdditive = (string) $object->numberAdditive;
        }else $numberAdditive = $object->numberAdditive=null;

        if (isset($object->country)) {
            $country = (string) $object->country;
        }else $country = $object->country=null;

        if (isset($object->postalCode)) {
            $postalCode = (string) $object->postalCode;
        }else $postalCode = $object->postalCode=null;

        return new Address($company, $city, $street, $streetNumber, $numberAdditive, $country, $postalCode);
     }
}
