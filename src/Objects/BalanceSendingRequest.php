<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class BalanceSendingRequest
{

    private $toMail;

    private $amount;

    private $description;

    private $amountObject;


    /**
     * @return ?string
     */
    public function getToMail(): ?string
    {
         return $this->toMail;
     }

    /**
     * @return ?int
     */
    public function getAmount(): ?int
    {
         return $this->amount;
     }

    /**
     * @return ?string
     */
    public function getDescription(): ?string
    {
         return $this->description;
     }

    /**
     * @return ?int
     */
    public function getAmountObject(): ?int
    {
         return $this->amountObject;
     }

    /**
     * @param string|null $toMail
     * @param int|null $amount
     * @param string|null $description
     * @param int|null $amountObject
     */
    public function __construct(?string $toMail, ?int $amount, ?string $description, ?int $amountObject)
    {
        $this->toMail = $toMail;
        $this->amount = $amount;
        $this->description = $description;
        $this->amountObject = $amountObject;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'toMail' => $this->getToMail(),
        'amount' => $this->getAmount(),
        'description' => $this->getDescription(),
        'amountObject' => $this->getAmountObject(),
        ];
    }

    /**
     * @param object $object
     * @return BalanceSendingRequest
     */
    public static function fromStdClass(object $object):BalanceSendingRequest
    {

        if (isset($object->toMail)) {
            $toMail = (string) $object->toMail;
        }else $toMail = $object->toMail=null;

        if (isset($object->amount)) {
            $amount = (int) $object->amount;
        }else $amount = $object->amount=null;

        if (isset($object->description)) {
            $description = (string) $object->description;
        }else $description = $object->description=null;

        if (isset($object->amountObject)) {
            $amountObject = (int) $object->amountObject;
        }else $amountObject = $object->amountObject=null;

        return new BalanceSendingRequest($toMail, $amount, $description, $amountObject);
     }
}
