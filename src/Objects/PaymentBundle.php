<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class PaymentBundle
{

    private $id;

    private $balanceChange;

    private $payment;

    private $invoice;

    private $time;

    private $amount;

    private $userId;


    /**
     * @return ?int
     */
    public function getId(): ?int
    {
         return $this->id;
     }

    /**
     * @return ?BalanceChange
     */
    public function getBalanceChange(): ?BalanceChange
    {
         return $this->balanceChange;
     }

    /**
     * @return ?Payment
     */
    public function getPayment(): ?Payment
    {
         return $this->payment;
     }

    /**
     * @return ?Invoice
     */
    public function getInvoice(): ?Invoice
    {
         return $this->invoice;
     }

    /**
     * @return ?string
     */
    public function getTime(): ?string
    {
         return $this->time;
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
    public function getUserId(): ?int
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
    public function __construct(?int $id, ?BalanceChange $balanceChange, ?Payment $payment, ?Invoice $invoice, ?string $time, ?int $amount, ?int $userId)
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
    public function getAsArr():array
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
