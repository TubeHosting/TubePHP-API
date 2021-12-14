<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class InvoiceItem
{

    private bool $order;

    private string $newServiceGroupRuntime;

    private string $title;

    private int $position;

    private int $unitPrice;

    private int $quantity;

    private string $description;

    private string $priceType;

    private int $invoiceId;

    private int $serviceGroupId;


    /**
     * @return bool
     */
    public function getOrder(): bool
    {
         return $this->order;
     }

    /**
     * @return string
     */
    public function getNewServiceGroupRuntime(): string
    {
         return $this->newServiceGroupRuntime;
     }

    /**
     * @return string
     */
    public function getTitle(): string
    {
         return $this->title;
     }

    /**
     * @return int
     */
    public function getPosition(): int
    {
         return $this->position;
     }

    /**
     * @return int
     */
    public function getUnitPrice(): int
    {
         return $this->unitPrice;
     }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
         return $this->quantity;
     }

    /**
     * @return string
     */
    public function getDescription(): string
    {
         return $this->description;
     }

    /**
     * @return string
     */
    public function getPriceType(): string
    {
         return $this->priceType;
     }

    /**
     * @return int
     */
    public function getInvoiceId(): int
    {
         return $this->invoiceId;
     }

    /**
     * @return int
     */
    public function getServiceGroupId(): int
    {
         return $this->serviceGroupId;
     }

    /**
     * @param bool $order
     * @param string $newServiceGroupRuntime
     * @param string $title
     * @param int $position
     * @param int $unitPrice
     * @param int $quantity
     * @param string $description
     * @param string $priceType
     * @param int $invoiceId
     * @param int $serviceGroupId
     */
    public function __construct(bool $order, string $newServiceGroupRuntime, string $title, int $position, int $unitPrice, int $quantity, string $description, string $priceType, int $invoiceId, int $serviceGroupId)
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
        $order = (bool) $object->order;
        $newServiceGroupRuntime = (string) $object->newServiceGroupRuntime;
        $title = (string) $object->title;
        $position = (int) $object->position;
        $unitPrice = (int) $object->unitPrice;
        $quantity = (int) $object->quantity;
        $description = (string) $object->description;
        $priceType = (string) $object->priceType;
        $invoiceId = (int) $object->invoiceId;
        $serviceGroupId = (int) $object->serviceGroupId;

        return new InvoiceItem($order, $newServiceGroupRuntime, $title, $position, $unitPrice, $quantity, $description, $priceType, $invoiceId, $serviceGroupId);
     }
}
