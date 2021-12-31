<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class Invoice
{

    private Address|null $address;

    private Name|null $name;

    private int|null $id;

    private int|null $userId;

    private string|null $oldInvoiceId;

    private array|null $items;

    private string|null $time;

    private bool|null $finished;

    private int|null $paymentBundleId;

    private string|null $taxPercentFormatted;


    /**
     * @return Address|null
     */
    public function getAddress(): Address|null
    {
         return $this->address;
     }

    /**
     * @return Name|null
     */
    public function getName(): Name|null
    {
         return $this->name;
     }

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
    public function getUserId(): int|null
    {
         return $this->userId;
     }

    /**
     * @return string|null
     */
    public function getOldInvoiceId(): string|null
    {
         return $this->oldInvoiceId;
     }

    /**
     * @return array|null
     */
    public function getItems(): array|null
    {
         return $this->items;
     }

    /**
     * @return string|null
     */
    public function getTime(): string|null
    {
         return $this->time;
     }

    /**
     * @return bool|null
     */
    public function getFinished(): bool|null
    {
         return $this->finished;
     }

    /**
     * @return int|null
     */
    public function getPaymentBundleId(): int|null
    {
         return $this->paymentBundleId;
     }

    /**
     * @return string|null
     */
    public function getTaxPercentFormatted(): string|null
    {
         return $this->taxPercentFormatted;
     }

    /**
     * @param Address|null $address
     * @param Name|null $name
     * @param int|null $id
     * @param int|null $userId
     * @param string|null $oldInvoiceId
     * @param array|null $items
     * @param string|null $time
     * @param bool|null $finished
     * @param int|null $paymentBundleId
     * @param string|null $taxPercentFormatted
     */
    public function __construct(Address|null $address, Name|null $name, int|null $id, int|null $userId, string|null $oldInvoiceId, array|null $items, string|null $time, bool|null $finished, int|null $paymentBundleId, string|null $taxPercentFormatted)
    {
        $this->address = $address;
        $this->name = $name;
        $this->id = $id;
        $this->userId = $userId;
        $this->oldInvoiceId = $oldInvoiceId;

        //handle objects in array
        $tmpItems = $items;
        $items = [];
        foreach ($tmpItems as $key => $item) {
            $item = PaymentBundle::fromStdClass($item);
            $singleItem = array($key => $item);
            $items = array_merge($items, $singleItem);
        }
        $this->items = $items;
        $this->time = $time;
        $this->finished = $finished;
        $this->paymentBundleId = $paymentBundleId;
        $this->taxPercentFormatted = $taxPercentFormatted;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'address' => $this->getAddress(),
        'name' => $this->getName(),
        'id' => $this->getId(),
        'userId' => $this->getUserId(),
        'oldInvoiceId' => $this->getOldInvoiceId(),
        'items' => $this->getItems(),
        'time' => $this->getTime(),
        'finished' => $this->getFinished(),
        'paymentBundleId' => $this->getPaymentBundleId(),
        'taxPercentFormatted' => $this->getTaxPercentFormatted(),
        ];
    }

    /**
     * @param object $object
     * @return Invoice
     */
    public static function fromStdClass(object $object):Invoice
    {

        if (isset($object->address)) {
           $address = Address::fromStdClass((object)$object->address);
        }else $address = $object->address=null;

        if (isset($object->name)) {
           $name = Name::fromStdClass((object)$object->name);
        }else $name = $object->name=null;

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->userId)) {
            $userId = (int) $object->userId;
        }else $userId = $object->userId=null;

        if (isset($object->oldInvoiceId)) {
            $oldInvoiceId = (string) $object->oldInvoiceId;
        }else $oldInvoiceId = $object->oldInvoiceId=null;

        if (isset($object->items)) {
            $items = (array) $object->items;
        }else $items = $object->items=null;

        if (isset($object->time)) {
            $time = (string) $object->time;
        }else $time = $object->time=null;

        if (isset($object->finished)) {
            $finished = (bool) $object->finished;
        }else $finished = $object->finished=null;

        if (isset($object->paymentBundleId)) {
            $paymentBundleId = (int) $object->paymentBundleId;
        }else $paymentBundleId = $object->paymentBundleId=null;

        if (isset($object->taxPercentFormatted)) {
            $taxPercentFormatted = (string) $object->taxPercentFormatted;
        }else $taxPercentFormatted = $object->taxPercentFormatted=null;

        return new Invoice($address, $name, $id, $userId, $oldInvoiceId, $items, $time, $finished, $paymentBundleId, $taxPercentFormatted);
     }
}
