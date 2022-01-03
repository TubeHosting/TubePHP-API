<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class Invoice
{

    private $address;

    private $name;

    private $id;

    private $userId;

    private $oldInvoiceId;

    private $items;

    private $time;

    private $finished;

    private $paymentBundleId;

    private $taxPercentFormatted;


    /**
     * @return ?Address
     */
    public function getAddress(): ?Address
    {
         return $this->address;
     }

    /**
     * @return ?Name
     */
    public function getName(): ?Name
    {
         return $this->name;
     }

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
    public function getUserId(): ?int
    {
         return $this->userId;
     }

    /**
     * @return ?string
     */
    public function getOldInvoiceId(): ?string
    {
         return $this->oldInvoiceId;
     }

    /**
     * @return ?array
     */
    public function getItems(): ?array
    {
         return $this->items;
     }

    /**
     * @return ?string
     */
    public function getTime(): ?string
    {
         return $this->time;
     }

    /**
     * @return ?bool
     */
    public function getFinished(): ?bool
    {
         return $this->finished;
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
    public function getTaxPercentFormatted(): ?string
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
    public function __construct(?Address $address, ?Name $name, ?int $id, ?int $userId, ?string $oldInvoiceId, ?array $items, ?string $time, ?bool $finished, ?int $paymentBundleId, ?string $taxPercentFormatted)
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
    public function getAsArr():array
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
