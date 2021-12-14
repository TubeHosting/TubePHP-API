<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class BalanceChargeRequestBody
{

    private int $amount;

    private string $method;


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
    public function getMethod(): string
    {
         return $this->method;
     }

    /**
     * @param int $amount
     * @param string $method
     */
    public function __construct(int $amount, string $method)
    {
        $this->amount = $amount;
        $this->method = $method;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'amount' => $this->getAmount(),
        'method' => $this->getMethod(),
        ];
    }

    /**
     * @param object $object
     * @return BalanceChargeRequestBody
     */
    public static function fromStdClass(object $object):BalanceChargeRequestBody
    {
        $amount = (int) $object->amount;
        $method = (string) $object->method;

        return new BalanceChargeRequestBody($amount, $method);
     }
}
