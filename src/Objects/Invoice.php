<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class Invoice
{

    private $address;

    private $paymentInfo;

    private $name;

    private $id;

    private $userId;

    private $oldInvoiceId;

    private $items;

    private $time;

    private $paymentBundleId;

    private $priceType;

    private $finished;

    private $taxPercentFormatted;


    /**
     * @return ?Address
     */
    public function getAddress(): ?Address
    {
         return $this->address;
     }

    /**
     * @return ?UserPaymentInfo
     */
    public function getPaymentInfo(): ?UserPaymentInfo
    {
         return $this->paymentInfo;
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
     * @return ?int
     */
    public function getPaymentBundleId(): ?int
    {
         return $this->paymentBundleId;
     }

    /**
     * @return ?string
     */
    public function getPriceType(): ?string
    {
         return $this->priceType;
     }

    /**
     * @return ?bool
     */
    public function getFinished(): ?bool
    {
         return $this->finished;
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
     * @param UserPaymentInfo|null $paymentInfo
     * @param Name|null $name
     * @param int|null $id
     * @param int|null $userId
     * @param string|null $oldInvoiceId
     * @param array|null $items
     * @param string|null $time
     * @param int|null $paymentBundleId
     * @param string|null $priceType
     * @param bool|null $finished
     * @param string|null $taxPercentFormatted
     */
    public function __construct(?Address $address, ?UserPaymentInfo $paymentInfo, ?Name $name, ?int $id, ?int $userId, ?string $oldInvoiceId, ?array $items, ?string $time, ?int $paymentBundleId, ?string $priceType, ?bool $finished, ?string $taxPercentFormatted)
    {
        $this->address = $address;
        $this->paymentInfo = $paymentInfo;
        $this->name = $name;
        $this->id = $id;
        $this->userId = $userId;
        $this->oldInvoiceId = $oldInvoiceId;

        //handle objects in array
        $tmpItems = $items;
        $items = [];
        if($tmpItems!==null){
            foreach ($tmpItems as $key => $item) {
                $item = InvoiceItem::fromStdClass($item);
                $singleItem = array($key => $item);
                $items = array_merge($items, $singleItem);
            }
        }
        $this->items = $items;
        $this->time = $time;
        $this->paymentBundleId = $paymentBundleId;
        $this->priceType = $priceType;
        $this->finished = $finished;
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
        'paymentInfo' => $this->getPaymentInfo(),
        'name' => $this->getName(),
        'id' => $this->getId(),
        'userId' => $this->getUserId(),
        'oldInvoiceId' => $this->getOldInvoiceId(),
        'items' => $this->getItems(),
        'time' => $this->getTime(),
        'paymentBundleId' => $this->getPaymentBundleId(),
        'priceType' => $this->getPriceType(),
        'finished' => $this->getFinished(),
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
        }else $address = null;

        if (isset($object->paymentInfo)) {
           $paymentInfo = UserPaymentInfo::fromStdClass((object)$object->paymentInfo);
        }else $paymentInfo = null;

        if (isset($object->name)) {
           $name = Name::fromStdClass((object)$object->name);
        }else $name = null;

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = null;

        if (isset($object->userId)) {
            $userId = (int) $object->userId;
        }else $userId = null;

        if (isset($object->oldInvoiceId)) {
            $oldInvoiceId = (string) $object->oldInvoiceId;
        }else $oldInvoiceId = null;

        if (isset($object->items)) {
            $items = (array) $object->items;
        }else $items = null;

        if (isset($object->time)) {
            $time = (string) $object->time;
        }else $time = null;

        if (isset($object->paymentBundleId)) {
            $paymentBundleId = (int) $object->paymentBundleId;
        }else $paymentBundleId = null;

        if (isset($object->priceType)) {
            $priceType = (string) $object->priceType;
        }else $priceType = null;

        if (isset($object->finished)) {
            $finished = (bool) $object->finished;
        }else $finished = null;

        if (isset($object->taxPercentFormatted)) {
            $taxPercentFormatted = (string) $object->taxPercentFormatted;
        }else $taxPercentFormatted = null;

        return new Invoice($address, $paymentInfo, $name, $id, $userId, $oldInvoiceId, $items, $time, $paymentBundleId, $priceType, $finished, $taxPercentFormatted);
     }
}
