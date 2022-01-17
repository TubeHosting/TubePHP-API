<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class InvoiceItem
{

    private $order;

    private $newServiceGroupRuntime;

    private $title;

    private $position;

    private $unitPrice;

    private $quantity;

    private $description;

    private $priceType;

    private $invoiceId;

    private $serviceGroupId;


    /**
     * @return ?bool
     */
    public function getOrder(): ?bool
    {
         return $this->order;
     }

    /**
     * @return ?string
     */
    public function getNewServiceGroupRuntime(): ?string
    {
         return $this->newServiceGroupRuntime;
     }

    /**
     * @return ?string
     */
    public function getTitle(): ?string
    {
         return $this->title;
     }

    /**
     * @return ?int
     */
    public function getPosition(): ?int
    {
         return $this->position;
     }

    /**
     * @return ?int
     */
    public function getUnitPrice(): ?int
    {
         return $this->unitPrice;
     }

    /**
     * @return ?int
     */
    public function getQuantity(): ?int
    {
         return $this->quantity;
     }

    /**
     * @return ?string
     */
    public function getDescription(): ?string
    {
         return $this->description;
     }

    /**
     * @return ?string
     */
    public function getPriceType(): ?string
    {
         return $this->priceType;
     }

    /**
     * @return ?int
     */
    public function getInvoiceId(): ?int
    {
         return $this->invoiceId;
     }

    /**
     * @return ?int
     */
    public function getServiceGroupId(): ?int
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
    public function __construct(?bool $order, ?string $newServiceGroupRuntime, ?string $title, ?int $position, ?int $unitPrice, ?int $quantity, ?string $description, ?string $priceType, ?int $invoiceId, ?int $serviceGroupId)
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
    public function getAsArr():array
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
        }else $order = null;

        if (isset($object->newServiceGroupRuntime)) {
            $newServiceGroupRuntime = (string) $object->newServiceGroupRuntime;
        }else $newServiceGroupRuntime = null;

        if (isset($object->title)) {
            $title = (string) $object->title;
        }else $title = null;

        if (isset($object->position)) {
            $position = (int) $object->position;
        }else $position = null;

        if (isset($object->unitPrice)) {
            $unitPrice = (int) $object->unitPrice;
        }else $unitPrice = null;

        if (isset($object->quantity)) {
            $quantity = (int) $object->quantity;
        }else $quantity = null;

        if (isset($object->description)) {
            $description = (string) $object->description;
        }else $description = null;

        if (isset($object->priceType)) {
            $priceType = (string) $object->priceType;
        }else $priceType = null;

        if (isset($object->invoiceId)) {
            $invoiceId = (int) $object->invoiceId;
        }else $invoiceId = null;

        if (isset($object->serviceGroupId)) {
            $serviceGroupId = (int) $object->serviceGroupId;
        }else $serviceGroupId = null;

        return new InvoiceItem($order, $newServiceGroupRuntime, $title, $position, $unitPrice, $quantity, $description, $priceType, $invoiceId, $serviceGroupId);
     }
}
