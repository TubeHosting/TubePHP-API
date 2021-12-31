<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class PaymentBundle
{

    private int|null $id;

    private BalanceChange|null $balanceChange;

    private Payment|null $payment;

    private Invoice|null $invoice;

    private string|null $time;

    private int|null $amount;

    private int|null $userId;


    /**
     * @return int|null
     */
    public function getId(): int|null
    {
         return $this->id;
     }

    /**
     * @return BalanceChange|null
     */
    public function getBalanceChange(): BalanceChange|null
    {
         return $this->balanceChange;
     }

    /**
     * @return Payment|null
     */
    public function getPayment(): Payment|null
    {
         return $this->payment;
     }

    /**
     * @return Invoice|null
     */
    public function getInvoice(): Invoice|null
    {
         return $this->invoice;
     }

    /**
     * @return string|null
     */
    public function getTime(): string|null
    {
         return $this->time;
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
    public function getUserId(): int|null
    {
         return $this->userId;
     }

    /**
     * @param int|null $id
     * @param BalanceChange|null $balanceChange
     * @param Payment|null $payment
     * @param Invoice|null $invoice
     * @param string|null $time
     * @param int|null $amount
     * @param int|null $userId
     */
    public function __construct(int|null $id, BalanceChange|null $balanceChange, Payment|null $payment, Invoice|null $invoice, string|null $time, int|null $amount, int|null $userId)
    {
        $this->id = $id;
        $this->balanceChange = $balanceChange;
        $this->payment = $payment;
        $this->invoice = $invoice;
        $this->time = $time;
        $this->amount = $amount;
        $this->userId = $userId;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'id' => $this->getId(),
        'balanceChange' => $this->getBalanceChange(),
        'payment' => $this->getPayment(),
        'invoice' => $this->getInvoice(),
        'time' => $this->getTime(),
        'amount' => $this->getAmount(),
        'userId' => $this->getUserId(),
        ];
    }

    /**
     * @param object $object
     * @return PaymentBundle
     */
    public static function fromStdClass(object $object):PaymentBundle
    {

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->balanceChange)) {
           $balanceChange = BalanceChange::fromStdClass((object)$object->balanceChange);
        }else $balanceChange = $object->balanceChange=null;

        if (isset($object->payment)) {
           $payment = Payment::fromStdClass((object)$object->payment);
        }else $payment = $object->payment=null;

        if (isset($object->invoice)) {
           $invoice = Invoice::fromStdClass((object)$object->invoice);
        }else $invoice = $object->invoice=null;

        if (isset($object->time)) {
            $time = (string) $object->time;
        }else $time = $object->time=null;

        if (isset($object->amount)) {
            $amount = (int) $object->amount;
        }else $amount = $object->amount=null;

        if (isset($object->userId)) {
            $userId = (int) $object->userId;
        }else $userId = $object->userId=null;

        return new PaymentBundle($id, $balanceChange, $payment, $invoice, $time, $amount, $userId);
     }
}
