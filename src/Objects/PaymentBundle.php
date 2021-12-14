<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class PaymentBundle
{

    private int $id;

    private BalanceChange $balanceChange;

    private Payment $payment;

    private Invoice $invoice;

    private string $time;

    private int $amount;

    private int $userId;


    /**
     * @return int
     */
    public function getId(): int
    {
         return $this->id;
     }

    /**
     * @return BalanceChange
     */
    public function getBalanceChange(): BalanceChange
    {
         return $this->balanceChange;
     }

    /**
     * @return Payment
     */
    public function getPayment(): Payment
    {
         return $this->payment;
     }

    /**
     * @return Invoice
     */
    public function getInvoice(): Invoice
    {
         return $this->invoice;
     }

    /**
     * @return string
     */
    public function getTime(): string
    {
         return $this->time;
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
    public function getUserId(): int
    {
         return $this->userId;
     }

    /**
     * @param int $id
     * @param BalanceChange $balanceChange
     * @param Payment $payment
     * @param Invoice $invoice
     * @param string $time
     * @param int $amount
     * @param int $userId
     */
    public function __construct(int $id, BalanceChange $balanceChange, Payment $payment, Invoice $invoice, string $time, int $amount, int $userId)
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
        $id = (int) $object->id;
        $balanceChange = BalanceChange::fromStdClass((object)$object->balanceChange);
        $payment = Payment::fromStdClass((object)$object->payment);
        $invoice = Invoice::fromStdClass((object)$object->invoice);
        $time = (string) $object->time;
        $amount = (int) $object->amount;
        $userId = (int) $object->userId;

        return new PaymentBundle($id, $balanceChange, $payment, $invoice, $time, $amount, $userId);
     }
}
