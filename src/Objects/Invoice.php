<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class Invoice
{

    private Address $address;

    private Name $name;

    private int $id;

    private int $userId;

    private string $oldInvoiceId;

    private array $items;

    private string $time;

    private bool $finished;

    private int $paymentBundleId;

    private string $taxPercentFormatted;


    /**
     * @return Address
     */
    public function getAddress(): Address
    {
         return $this->address;
     }

    /**
     * @return Name
     */
    public function getName(): Name
    {
         return $this->name;
     }

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
    public function getUserId(): int
    {
         return $this->userId;
     }

    /**
     * @return string
     */
    public function getOldInvoiceId(): string
    {
         return $this->oldInvoiceId;
     }

    /**
     * @return array
     */
    public function getItems(): array
    {
         return $this->items;
     }

    /**
     * @return string
     */
    public function getTime(): string
    {
         return $this->time;
     }

    /**
     * @return bool
     */
    public function getFinished(): bool
    {
         return $this->finished;
     }

    /**
     * @return int
     */
    public function getPaymentBundleId(): int
    {
         return $this->paymentBundleId;
     }

    /**
     * @return string
     */
    public function getTaxPercentFormatted(): string
    {
         return $this->taxPercentFormatted;
     }

    /**
     * @param Address $address
     * @param Name $name
     * @param int $id
     * @param int $userId
     * @param string $oldInvoiceId
     * @param array $items
     * @param string $time
     * @param bool $finished
     * @param int $paymentBundleId
     * @param string $taxPercentFormatted
     */
    public function __construct(Address $address, Name $name, int $id, int $userId, string $oldInvoiceId, array $items, string $time, bool $finished, int $paymentBundleId, string $taxPercentFormatted)
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
        $address = Address::fromStdClass((object)$object->address);
        $name = Name::fromStdClass((object)$object->name);
        $id = (int) $object->id;
        $userId = (int) $object->userId;
        $oldInvoiceId = (string) $object->oldInvoiceId;
        $items = (array) $object->items;
        $time = (string) $object->time;
        $finished = (bool) $object->finished;
        $paymentBundleId = (int) $object->paymentBundleId;
        $taxPercentFormatted = (string) $object->taxPercentFormatted;

        return new Invoice($address, $name, $id, $userId, $oldInvoiceId, $items, $time, $finished, $paymentBundleId, $taxPercentFormatted);
     }
}
