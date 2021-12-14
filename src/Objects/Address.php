<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class Address
{

    private string $company;

    private string $city;

    private string $street;

    private string $streetNumber;

    private string $numberAdditive;

    private string $country;

    private string $postalCode;


    /**
     * @return string
     */
    public function getCompany(): string
    {
         return $this->company;
     }

    /**
     * @return string
     */
    public function getCity(): string
    {
         return $this->city;
     }

    /**
     * @return string
     */
    public function getStreet(): string
    {
         return $this->street;
     }

    /**
     * @return string
     */
    public function getStreetNumber(): string
    {
         return $this->streetNumber;
     }

    /**
     * @return string
     */
    public function getNumberAdditive(): string
    {
         return $this->numberAdditive;
     }

    /**
     * @return string
     */
    public function getCountry(): string
    {
         return $this->country;
     }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
         return $this->postalCode;
     }

    /**
     * @param string $company
     * @param string $city
     * @param string $street
     * @param string $streetNumber
     * @param string $numberAdditive
     * @param string $country
     * @param string $postalCode
     */
    public function __construct(string $company, string $city, string $street, string $streetNumber, string $numberAdditive, string $country, string $postalCode)
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
        $company = (string) $object->company;
        $city = (string) $object->city;
        $street = (string) $object->street;
        $streetNumber = (string) $object->streetNumber;
        $numberAdditive = (string) $object->numberAdditive;
        $country = (string) $object->country;
        $postalCode = (string) $object->postalCode;

        return new Address($company, $city, $street, $streetNumber, $numberAdditive, $country, $postalCode);
     }
}
