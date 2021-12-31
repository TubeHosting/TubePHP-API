<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class BalanceChange
{

    private int|null $id;

    private int|null $amount;

    private int|null $startBalance;

    private string|null $time;

    private string|null $type;

    private string|null $description;

    private int|null $userId;

    private int|null $paymentBundleId;

    private bool|null $successful;

    private SimpleUser|null $other;


    /**
     * @return int|null
     */
    public function getId(): int|null
    {
         return $this->id;
     }

    /**
     * @return int|null
     */
    public function getAmount(): int|null
    {
         return $this->amount;
     }

    /**
     * @return int|null
     */
    public function getStartBalance(): int|null
    {
         return $this->startBalance;
     }

    /**
     * @return string|null
     */
    public function getTime(): string|null
    {
         return $this->time;
     }

    /**
     * @return string|null
     */
    public function getType(): string|null
    {
         return $this->type;
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
    public function getUserId(): int|null
    {
         return $this->userId;
     }

    /**
     * @return int|null
     */
    public function getPaymentBundleId(): int|null
    {
         return $this->paymentBundleId;
     }

    /**
     * @return bool|null
     */
    public function getSuccessful(): bool|null
    {
         return $this->successful;
     }

    /**
     * @return SimpleUser|null
     */
    public function getOther(): SimpleUser|null
    {
         return $this->other;
     }

    /**
     * @param int|null $id
     * @param int|null $amount
     * @param int|null $startBalance
     * @param string|null $time
     * @param string|null $type
     * @param string|null $description
     * @param int|null $userId
     * @param int|null $paymentBundleId
     * @param bool|null $successful
     * @param SimpleUser|null $other
     */
    public function __construct(int|null $id, int|null $amount, int|null $startBalance, string|null $time, string|null $type, string|null $description, int|null $userId, int|null $paymentBundleId, bool|null $successful, SimpleUser|null $other)
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

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->amount)) {
            $amount = (int) $object->amount;
        }else $amount = $object->amount=null;

        if (isset($object->startBalance)) {
            $startBalance = (int) $object->startBalance;
        }else $startBalance = $object->startBalance=null;

        if (isset($object->time)) {
            $time = (string) $object->time;
        }else $time = $object->time=null;

        if (isset($object->type)) {
            $type = (string) $object->type;
        }else $type = $object->type=null;

        if (isset($object->description)) {
            $description = (string) $object->description;
        }else $description = $object->description=null;

        if (isset($object->userId)) {
            $userId = (int) $object->userId;
        }else $userId = $object->userId=null;

        if (isset($object->paymentBundleId)) {
            $paymentBundleId = (int) $object->paymentBundleId;
        }else $paymentBundleId = $object->paymentBundleId=null;

        if (isset($object->successful)) {
            $successful = (bool) $object->successful;
        }else $successful = $object->successful=null;

        if (isset($object->other)) {
           $other = SimpleUser::fromStdClass((object)$object->other);
        }else $other = $object->other=null;

        return new BalanceChange($id, $amount, $startBalance, $time, $type, $description, $userId, $paymentBundleId, $successful, $other);
     }
}
