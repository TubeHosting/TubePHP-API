<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class Address
{

    private string|null $company;

    private string|null $city;

    private string|null $street;

    private string|null $streetNumber;

    private string|null $numberAdditive;

    private string|null $country;

    private string|null $postalCode;


    /**
     * @return string|null
     */
    public function getCompany(): string|null
    {
         return $this->company;
     }

    /**
     * @return string|null
     */
    public function getCity(): string|null
    {
         return $this->city;
     }

    /**
     * @return string|null
     */
    public function getStreet(): string|null
    {
         return $this->street;
     }

    /**
     * @return string|null
     */
    public function getStreetNumber(): string|null
    {
         return $this->streetNumber;
     }

    /**
     * @return string|null
     */
    public function getNumberAdditive(): string|null
    {
         return $this->numberAdditive;
     }

    /**
     * @return string|null
     */
    public function getCountry(): string|null
    {
         return $this->country;
     }

    /**
     * @return string|null
     */
    public function getPostalCode(): string|null
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
    public function __construct(string|null $company, string|null $city, string|null $street, string|null $streetNumber, string|null $numberAdditive, string|null $country, string|null $postalCode)
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
    public function getAsArr()
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
