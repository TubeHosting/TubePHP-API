<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class BalanceSendingRequest
{

    private string $toMail;

    private int $amount;

    private string $description;

    private int $amountObject;


    /**
     * @return string
     */
    public function getToMail(): string
    {
         return $this->toMail;
     }

    /**
     * @return int
     */
    public function getAmount(): int
    {
         return $this->amount;
     }

    /**
     * @return string
     */
    public function getDescription(): string
    {
         return $this->description;
     }

    /**
     * @return int
     */
    public function getAmountObject(): int
    {
         return $this->amountObject;
     }

    /**
     * @param string $toMail
     * @param int $amount
     * @param string $description
     * @param int $amountObject
     */
    public function __construct(string $toMail, int $amount, string $description, int $amountObject)
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
        $toMail = (string) $object->toMail;
        $amount = (int) $object->amount;
        $description = (string) $object->description;
        $amountObject = (int) $object->amountObject;

        return new BalanceSendingRequest($toMail, $amount, $description, $amountObject);
     }
}
