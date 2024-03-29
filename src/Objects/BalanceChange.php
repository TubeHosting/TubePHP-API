<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class BalanceChange
{

    private $id;

    private $amount;

    private $startBalance;

    private $time;

    private $type;

    private $paymentBundleId;

    private $description;

    private $userId;

    private $successful;

    private $other;


    /**
     * @return ?int
     */
    public function getId(): ?int
    {
         return $this->id;
     }

    /**
     * @return ?int
     */
    public function getAmount(): ?int
    {
         return $this->amount;
     }

    /**
     * @return ?int
     */
    public function getStartBalance(): ?int
    {
         return $this->startBalance;
     }

    /**
     * @return ?string
     */
    public function getTime(): ?string
    {
         return $this->time;
     }

    /**
     * @return ?string
     */
    public function getType(): ?string
    {
         return $this->type;
     }

    /**
     * @return ?int
     */
    public function getPaymentBundleId(): ?int
    {
         return $this->paymentBundleId;
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
    public function getUserId(): ?int
    {
         return $this->userId;
     }

    /**
     * @return ?bool
     */
    public function getSuccessful(): ?bool
    {
         return $this->successful;
     }

    /**
     * @return ?SimpleUser
     */
    public function getOther(): ?SimpleUser
    {
         return $this->other;
     }

    /**
     * @param int|null $id
     * @param int|null $amount
     * @param int|null $startBalance
     * @param string|null $time
     * @param string|null $type
     * @param int|null $paymentBundleId
     * @param string|null $description
     * @param int|null $userId
     * @param bool|null $successful
     * @param SimpleUser|null $other
     */
    public function __construct(?int $id, ?int $amount, ?int $startBalance, ?string $time, ?string $type, ?int $paymentBundleId, ?string $description, ?int $userId, ?bool $successful, ?SimpleUser $other)
    {
        $this->id = $id;
        $this->amount = $amount;
        $this->startBalance = $startBalance;
        $this->time = $time;
        $this->type = $type;
        $this->paymentBundleId = $paymentBundleId;
        $this->description = $description;
        $this->userId = $userId;
        $this->successful = $successful;
        $this->other = $other;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'id' => $this->getId(),
        'amount' => $this->getAmount(),
        'startBalance' => $this->getStartBalance(),
        'time' => $this->getTime(),
        'type' => $this->getType(),
        'paymentBundleId' => $this->getPaymentBundleId(),
        'description' => $this->getDescription(),
        'userId' => $this->getUserId(),
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
        }else $id = null;

        if (isset($object->amount)) {
            $amount = (int) $object->amount;
        }else $amount = null;

        if (isset($object->startBalance)) {
            $startBalance = (int) $object->startBalance;
        }else $startBalance = null;

        if (isset($object->time)) {
            $time = (string) $object->time;
        }else $time = null;

        if (isset($object->type)) {
            $type = (string) $object->type;
        }else $type = null;

        if (isset($object->paymentBundleId)) {
            $paymentBundleId = (int) $object->paymentBundleId;
        }else $paymentBundleId = null;

        if (isset($object->description)) {
            $description = (string) $object->description;
        }else $description = null;

        if (isset($object->userId)) {
            $userId = (int) $object->userId;
        }else $userId = null;

        if (isset($object->successful)) {
            $successful = (bool) $object->successful;
        }else $successful = null;

        if (isset($object->other)) {
           $other = SimpleUser::fromStdClass((object)$object->other);
        }else $other = null;

        return new BalanceChange($id, $amount, $startBalance, $time, $type, $paymentBundleId, $description, $userId, $successful, $other);
     }
}
