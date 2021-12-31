<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class InvoiceItem
{

    private bool|null $order;

    private string|null $newServiceGroupRuntime;

    private string|null $title;

    private int|null $position;

    private int|null $unitPrice;

    private int|null $quantity;

    private string|null $description;

    private string|null $priceType;

    private int|null $invoiceId;

    private int|null $serviceGroupId;


    /**
     * @return bool|null
     */
    public function getOrder(): bool|null
    {
         return $this->order;
     }

    /**
     * @return string|null
     */
    public function getNewServiceGroupRuntime(): string|null
    {
         return $this->newServiceGroupRuntime;
     }

    /**
     * @return string|null
     */
    public function getTitle(): string|null
    {
         return $this->title;
     }

    /**
     * @return int|null
     */
    public function getPosition(): int|null
    {
         return $this->position;
     }

    /**
     * @return int|null
     */
    public function getUnitPrice(): int|null
    {
         return $this->unitPrice;
     }

    /**
     * @return int|null
     */
    public function getQuantity(): int|null
    {
         return $this->quantity;
     }

    /**
     * @return string|null
     */
    public function getDescription(): string|null
    {
         return $this->description;
     }

    /**
     * @return string|null
     */
    public function getPriceType(): string|null
    {
         return $this->priceType;
     }

    /**
     * @return int|null
     */
    public function getInvoiceId(): int|null
    {
         return $this->invoiceId;
     }

    /**
     * @return int|null
     */
    public function getServiceGroupId(): int|null
    {
         return $this->serviceGroupId;
     }

    /**
     * @param bool|null $order
     * @param string|null $newServiceGroupRuntime
     * @param string|null $title
     * @param int|null $position
     * @param int|null $unitPrice
     * @param int|null $quantity
     * @param string|null $description
     * @param string|null $priceType
     * @param int|null $invoiceId
     * @param int|null $serviceGroupId
     */
    public function __construct(bool|null $order, string|null $newServiceGroupRuntime, string|null $title, int|null $position, int|null $unitPrice, int|null $quantity, string|null $description, string|null $priceType, int|null $invoiceId, int|null $serviceGroupId)
    {
        $this->order = $order;
        $this->newServiceGroupRuntime = $newServiceGroupRuntime;
        $this->title = $title;
        $this->position = $position;
        $this->unitPrice = $unitPrice;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->priceType = $priceType;
        $this->invoiceId = $invoiceId;
        $this->serviceGroupId = $serviceGroupId;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'order' => $this->getOrder(),
        'newServiceGroupRuntime' => $this->getNewServiceGroupRuntime(),
        'title' => $this->getTitle(),
        'position' => $this->getPosition(),
        'unitPrice' => $this->getUnitPrice(),
        'quantity' => $this->getQuantity(),
        'description' => $this->getDescription(),
        'priceType' => $this->getPriceType(),
        'invoiceId' => $this->getInvoiceId(),
        'serviceGroupId' => $this->getServiceGroupId(),
        ];
    }

    /**
     * @param object $object
     * @return InvoiceItem
     */
    public static function fromStdClass(object $object):InvoiceItem
    {

        if (isset($object->order)) {
            $order = (bool) $object->order;
        }else $order = $object->order=null;

        if (isset($object->newServiceGroupRuntime)) {
            $newServiceGroupRuntime = (string) $object->newServiceGroupRuntime;
        }else $newServiceGroupRuntime = $object->newServiceGroupRuntime=null;

        if (isset($object->title)) {
            $title = (string) $object->title;
        }else $title = $object->title=null;

        if (isset($object->position)) {
            $position = (int) $object->position;
        }else $position = $object->position=null;

        if (isset($object->unitPrice)) {
            $unitPrice = (int) $object->unitPrice;
        }else $unitPrice = $object->unitPrice=null;

        if (isset($object->quantity)) {
            $quantity = (int) $object->quantity;
        }else $quantity = $object->quantity=null;

        if (isset($object->description)) {
            $description = (string) $object->description;
        }else $description = $object->description=null;

        if (isset($object->priceType)) {
            $priceType = (string) $object->priceType;
        }else $priceType = $object->priceType=null;

        if (isset($object->invoiceId)) {
            $invoiceId = (int) $object->invoiceId;
        }else $invoiceId = $object->invoiceId=null;

        if (isset($object->serviceGroupId)) {
            $serviceGroupId = (int) $object->serviceGroupId;
        }else $serviceGroupId = $object->serviceGroupId=null;

        return new InvoiceItem($order, $newServiceGroupRuntime, $title, $position, $unitPrice, $quantity, $description, $priceType, $invoiceId, $serviceGroupId);
     }
}
