<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class InvoiceItem
{

    private $newServiceGroupRuntime;

    private $oldServiceGroupRuntime;

    private $title;

    private $type;

    private $runtimeDuration;

    private $position;

    private $unitPrice;

    private $quantity;

    private $serviceGroupId;

    private $description;

    private $priceType;

    private $invoiceId;

    private $runtimeDurationObject;


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
    public function getOldServiceGroupRuntime(): ?string
    {
         return $this->oldServiceGroupRuntime;
     }

    /**
     * @return ?string
     */
    public function getTitle(): ?string
    {
         return $this->title;
     }

    /**
     * @return ?string
     */
    public function getType(): ?string
    {
         return $this->type;
     }

    /**
     * @return ?int
     */
    public function getRuntimeDuration(): ?int
    {
         return $this->runtimeDuration;
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
     * @return ?int
     */
    public function getServiceGroupId(): ?int
    {
         return $this->serviceGroupId;
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
     * @return ?object
     */
    public function getRuntimeDurationObject(): ?object
    {
         return $this->runtimeDurationObject;
     }

    /**
     * @param string|null $newServiceGroupRuntime
     * @param string|null $oldServiceGroupRuntime
     * @param string|null $title
     * @param string|null $type
     * @param int|null $runtimeDuration
     * @param int|null $position
     * @param int|null $unitPrice
     * @param int|null $quantity
     * @param int|null $serviceGroupId
     * @param string|null $description
     * @param string|null $priceType
     * @param int|null $invoiceId
     * @param object|null $runtimeDurationObject
     */
    public function __construct(?string $newServiceGroupRuntime, ?string $oldServiceGroupRuntime, ?string $title, ?string $type, ?int $runtimeDuration, ?int $position, ?int $unitPrice, ?int $quantity, ?int $serviceGroupId, ?string $description, ?string $priceType, ?int $invoiceId, ?object $runtimeDurationObject)
    {
        $this->newServiceGroupRuntime = $newServiceGroupRuntime;
        $this->oldServiceGroupRuntime = $oldServiceGroupRuntime;
        $this->title = $title;
        $this->type = $type;
        $this->runtimeDuration = $runtimeDuration;
        $this->position = $position;
        $this->unitPrice = $unitPrice;
        $this->quantity = $quantity;
        $this->serviceGroupId = $serviceGroupId;
        $this->description = $description;
        $this->priceType = $priceType;
        $this->invoiceId = $invoiceId;
        $this->runtimeDurationObject = $runtimeDurationObject;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'newServiceGroupRuntime' => $this->getNewServiceGroupRuntime(),
        'oldServiceGroupRuntime' => $this->getOldServiceGroupRuntime(),
        'title' => $this->getTitle(),
        'type' => $this->getType(),
        'runtimeDuration' => $this->getRuntimeDuration(),
        'position' => $this->getPosition(),
        'unitPrice' => $this->getUnitPrice(),
        'quantity' => $this->getQuantity(),
        'serviceGroupId' => $this->getServiceGroupId(),
        'description' => $this->getDescription(),
        'priceType' => $this->getPriceType(),
        'invoiceId' => $this->getInvoiceId(),
        'runtimeDurationObject' => $this->getRuntimeDurationObject(),
        ];
    }

    /**
     * @param object $object
     * @return InvoiceItem
     */
    public static function fromStdClass(object $object):InvoiceItem
    {

        if (isset($object->newServiceGroupRuntime)) {
            $newServiceGroupRuntime = (string) $object->newServiceGroupRuntime;
        }else $newServiceGroupRuntime = null;

        if (isset($object->oldServiceGroupRuntime)) {
            $oldServiceGroupRuntime = (string) $object->oldServiceGroupRuntime;
        }else $oldServiceGroupRuntime = null;

        if (isset($object->title)) {
            $title = (string) $object->title;
        }else $title = null;

        if (isset($object->type)) {
            $type = (string) $object->type;
        }else $type = null;

        if (isset($object->runtimeDuration)) {
            $runtimeDuration = (int) $object->runtimeDuration;
        }else $runtimeDuration = null;

        if (isset($object->position)) {
            $position = (int) $object->position;
        }else $position = null;

        if (isset($object->unitPrice)) {
            $unitPrice = (int) $object->unitPrice;
        }else $unitPrice = null;

        if (isset($object->quantity)) {
            $quantity = (int) $object->quantity;
        }else $quantity = null;

        if (isset($object->serviceGroupId)) {
            $serviceGroupId = (int) $object->serviceGroupId;
        }else $serviceGroupId = null;

        if (isset($object->description)) {
            $description = (string) $object->description;
        }else $description = null;

        if (isset($object->priceType)) {
            $priceType = (string) $object->priceType;
        }else $priceType = null;

        if (isset($object->invoiceId)) {
            $invoiceId = (int) $object->invoiceId;
        }else $invoiceId = null;

        if (isset($object->runtimeDurationObject)) {
            $runtimeDurationObject = (object) $object->runtimeDurationObject;
        }else $runtimeDurationObject = null;

        return new InvoiceItem($newServiceGroupRuntime, $oldServiceGroupRuntime, $title, $type, $runtimeDuration, $position, $unitPrice, $quantity, $serviceGroupId, $description, $priceType, $invoiceId, $runtimeDurationObject);
     }
}
