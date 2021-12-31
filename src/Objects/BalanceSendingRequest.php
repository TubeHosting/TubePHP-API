<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class BalanceSendingRequest
{

    private string|null $toMail;

    private int|null $amount;

    private string|null $description;

    private int|null $amountObject;


    /**
     * @return string|null
     */
    public function getToMail(): string|null
    {
         return $this->toMail;
     }

    /**
     * @return int|null
     */
    public function getAmount(): int|null
    {
         return $this->amount;
     }

    /**
     * @return string|null
     */
    public function getDescription(): string|null
    {
         return $this->description;
     }

    /**
     * @return int|null
     */
    public function getAmountObject(): int|null
    {
         return $this->amountObject;
     }

    /**
     * @param string|null $toMail
     * @param int|null $amount
     * @param string|null $description
     * @param int|null $amountObject
     */
    public function __construct(string|null $toMail, int|null $amount, string|null $description, int|null $amountObject)
    {
        $this->toMail = $toMail;
        $this->amount = $amount;
        $this->description = $description;
        $this->amountObject = $amountObject;
    }

    /**
     * @return array
     */
    public function getAsArr()
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
