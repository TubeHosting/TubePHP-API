<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class UserPaymentInfo
{

    private $id;

    private $vatNumber;

    private $reverseCharge;

    private $startDate;

    private $priceType;


    /**
     * @return ?int
     */
    public function getId(): ?int
    {
         return $this->id;
     }

    /**
     * @return ?string
     */
    public function getVatNumber(): ?string
    {
         return $this->vatNumber;
     }

    /**
     * @return ?bool
     */
    public function getReverseCharge(): ?bool
    {
         return $this->reverseCharge;
     }

    /**
     * @return ?string
     */
    public function getStartDate(): ?string
    {
         return $this->startDate;
     }

    /**
     * @return ?string
     */
    public function getPriceType(): ?string
    {
         return $this->priceType;
     }

    /**
     * @param int|null $id
     * @param string|null $vatNumber
     * @param bool|null $reverseCharge
     * @param string|null $startDate
     * @param string|null $priceType
     */
    public function __construct(?int $id, ?string $vatNumber, ?bool $reverseCharge, ?string $startDate, ?string $priceType)
    {
        $this->id = $id;
        $this->vatNumber = $vatNumber;
        $this->reverseCharge = $reverseCharge;
        $this->startDate = $startDate;
        $this->priceType = $priceType;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'id' => $this->getId(),
        'vatNumber' => $this->getVatNumber(),
        'reverseCharge' => $this->getReverseCharge(),
        'startDate' => $this->getStartDate(),
        'priceType' => $this->getPriceType(),
        ];
    }

    /**
     * @param object $object
     * @return UserPaymentInfo
     */
    public static function fromStdClass(object $object):UserPaymentInfo
    {

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = null;

        if (isset($object->vatNumber)) {
            $vatNumber = (string) $object->vatNumber;
        }else $vatNumber = null;

        if (isset($object->reverseCharge)) {
            $reverseCharge = (bool) $object->reverseCharge;
        }else $reverseCharge = null;

        if (isset($object->startDate)) {
            $startDate = (string) $object->startDate;
        }else $startDate = null;

        if (isset($object->priceType)) {
            $priceType = (string) $object->priceType;
        }else $priceType = null;

        return new UserPaymentInfo($id, $vatNumber, $reverseCharge, $startDate, $priceType);
     }
}
