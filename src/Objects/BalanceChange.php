<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class BalanceChange
{

    private int $id;

    private int $amount;

    private int $startBalance;

    private string $time;

    private string $type;

    private string $description;

    private int $userId;

    private int $paymentBundleId;

    private bool $successful;

    private SimpleUser $other;


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
    public function getAmount(): int
    {
         return $this->amount;
     }

    /**
     * @return int
     */
    public function getStartBalance(): int
    {
         return $this->startBalance;
     }

    /**
     * @return string
     */
    public function getTime(): string
    {
         return $this->time;
     }

    /**
     * @return string
     */
    public function getType(): string
    {
         return $this->type;
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
    public function getUserId(): int
    {
         return $this->userId;
     }

    /**
     * @return int
     */
    public function getPaymentBundleId(): int
    {
         return $this->paymentBundleId;
     }

    /**
     * @return bool
     */
    public function getSuccessful(): bool
    {
         return $this->successful;
     }

    /**
     * @return SimpleUser
     */
    public function getOther(): SimpleUser
    {
         return $this->other;
     }

    /**
     * @param int $id
     * @param int $amount
     * @param int $startBalance
     * @param string $time
     * @param string $type
     * @param string $description
     * @param int $userId
     * @param int $paymentBundleId
     * @param bool $successful
     * @param SimpleUser $other
     */
    public function __construct(int $id, int $amount, int $startBalance, string $time, string $type, string $description, int $userId, int $paymentBundleId, bool $successful, SimpleUser $other)
    {
        $this->id = $id;
        $this->amount = $amount;
        $this->startBalance = $startBalance;
        $this->time = $time;
        $this->type = $type;
        $this->description = $description;
        $this->userId = $userId;
        $this->paymentBundleId = $paymentBundleId;
        $this->successful = $successful;
        $this->other = $other;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'id' => $this->getId(),
        'amount' => $this->getAmount(),
        'startBalance' => $this->getStartBalance(),
        'time' => $this->getTime(),
        'type' => $this->getType(),
        'description' => $this->getDescription(),
        'userId' => $this->getUserId(),
        'paymentBundleId' => $this->getPaymentBundleId(),
        'successful' => $this->getSuccessful(),
        'other' => $this->getOther(),
        ];
    }

    /**
     * @param object $object
     * @return BalanceChange
     */
    public static function fromStdClass(object $object):BalanceChange
    {
        $id = (int) $object->id;
        $amount = (int) $object->amount;
        $startBalance = (int) $object->startBalance;
        $time = (string) $object->time;
        $type = (string) $object->type;
        $description = (string) $object->description;
        $userId = (int) $object->userId;
        $paymentBundleId = (int) $object->paymentBundleId;
        $successful = (bool) $object->successful;
        $other = SimpleUser::fromStdClass((object)$object->other);

        return new BalanceChange($id, $amount, $startBalance, $time, $type, $description, $userId, $paymentBundleId, $successful, $other);
     }
}
