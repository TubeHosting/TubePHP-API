<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class Payment
{

    private $id;

    private $method;

    private $amount;

    private $status;

    private $description;

    private $timeStarted;

    private $timeFinished;

    private $providerId;

    private $type;

    private $userId;

    private $paymentBundleId;


    /**
     * @return ?int
     */
    public function getId(): ?int
    {
         return $this->id;
     }

    /**
     * @return ?string
     */
    public function getMethod(): ?string
    {
         return $this->method;
     }

    /**
     * @return ?int
     */
    public function getAmount(): ?int
    {
         return $this->amount;
     }

    /**
     * @return ?string
     */
    public function getStatus(): ?string
    {
         return $this->status;
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
    public function getTimeStarted(): ?string
    {
         return $this->timeStarted;
     }

    /**
     * @return ?string
     */
    public function getTimeFinished(): ?string
    {
         return $this->timeFinished;
     }

    /**
     * @return ?string
     */
    public function getProviderId(): ?string
    {
         return $this->providerId;
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
    public function getUserId(): ?int
    {
         return $this->userId;
     }

    /**
     * @return ?int
     */
    public function getPaymentBundleId(): ?int
    {
         return $this->paymentBundleId;
     }

    /**
     * @param int|null $id
     * @param string|null $method
     * @param int|null $amount
     * @param string|null $status
     * @param string|null $description
     * @param string|null $timeStarted
     * @param string|null $timeFinished
     * @param string|null $providerId
     * @param string|null $type
     * @param int|null $userId
     * @param int|null $paymentBundleId
     */
    public function __construct(?int $id, ?string $method, ?int $amount, ?string $status, ?string $description, ?string $timeStarted, ?string $timeFinished, ?string $providerId, ?string $type, ?int $userId, ?int $paymentBundleId)
    {
        $this->id = $id;
        $this->method = $method;
        $this->amount = $amount;
        $this->status = $status;
        $this->description = $description;
        $this->timeStarted = $timeStarted;
        $this->timeFinished = $timeFinished;
        $this->providerId = $providerId;
        $this->type = $type;
        $this->userId = $userId;
        $this->paymentBundleId = $paymentBundleId;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'id' => $this->getId(),
        'method' => $this->getMethod(),
        'amount' => $this->getAmount(),
        'status' => $this->getStatus(),
        'description' => $this->getDescription(),
        'timeStarted' => $this->getTimeStarted(),
        'timeFinished' => $this->getTimeFinished(),
        'providerId' => $this->getProviderId(),
        'type' => $this->getType(),
        'userId' => $this->getUserId(),
        'paymentBundleId' => $this->getPaymentBundleId(),
        ];
    }

    /**
     * @param object $object
     * @return Payment
     */
    public static function fromStdClass(object $object):Payment
    {

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = null;

        if (isset($object->method)) {
            $method = (string) $object->method;
        }else $method = null;

        if (isset($object->amount)) {
            $amount = (int) $object->amount;
        }else $amount = null;

        if (isset($object->status)) {
            $status = (string) $object->status;
        }else $status = null;

        if (isset($object->description)) {
            $description = (string) $object->description;
        }else $description = null;

        if (isset($object->timeStarted)) {
            $timeStarted = (string) $object->timeStarted;
        }else $timeStarted = null;

        if (isset($object->timeFinished)) {
            $timeFinished = (string) $object->timeFinished;
        }else $timeFinished = null;

        if (isset($object->providerId)) {
            $providerId = (string) $object->providerId;
        }else $providerId = null;

        if (isset($object->type)) {
            $type = (string) $object->type;
        }else $type = null;

        if (isset($object->userId)) {
            $userId = (int) $object->userId;
        }else $userId = null;

        if (isset($object->paymentBundleId)) {
            $paymentBundleId = (int) $object->paymentBundleId;
        }else $paymentBundleId = null;

        return new Payment($id, $method, $amount, $status, $description, $timeStarted, $timeFinished, $providerId, $type, $userId, $paymentBundleId);
     }


    /**
     * @link https://doc.api.tube-hosting.com/#/payment-controller/sendBalance
     * @param BalanceSendingRequest $balanceSendingRequest
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function sendBalance(BalanceSendingRequest $balanceSendingRequest):string 
    {
        $result = TubeAPI::request('POST', '/payments/balance/send', $balanceSendingRequest->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/payment-controller/chargeBalance
     * @param BalanceChargeRequestBody $balanceChargeRequestBody
     * @return  PaymentResponse
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function chargeBalance(BalanceChargeRequestBody $balanceChargeRequestBody): PaymentResponse 
    {
        $result = TubeAPI::request('POST', '/payments/balance/charge', $balanceChargeRequestBody->getAsArr(), TubeAPI::$token);
        return  PaymentResponse::fromStdClass(json_decode($result));
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/order-controller/orderByTemplateGroup
     * @param int $templateGroupId
     * @return  SingleServiceGroupData
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function orderByTemplateGroup(int $templateGroupId): SingleServiceGroupData 
    {
        $result = TubeAPI::request('POST', '/order/template/'.$templateGroupId.'', null, TubeAPI::$token);
        return  SingleServiceGroupData::fromStdClass(json_decode($result));
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/payment-controller/getPaymentBundles
     * @param bool $completed
     * @param int $page
     * @param int $size
     * @return  SearchResultPaymentBundle
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getPaymentBundles(bool $completed = null, int $page = 0, int $size = 0): SearchResultPaymentBundle 
    {
        $result = TubeAPI::request('GET', '/payments?completed='.$completed.'&page='.$page.'&size='.$size.'', null, TubeAPI::$token);
        return  SearchResultPaymentBundle::fromStdClass(json_decode($result));
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/payment-controller/getInvoices
     * @return array
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getInvoices():array 
    {
        $result = TubeAPI::request('GET', '/payments/invoices', null, TubeAPI::$token);
        $tmpResults = json_decode($result);
        //handle objects in array
        $results = [];
        foreach ($tmpResults as $key => $result) {
            $result = Invoice::fromStdClass($result);
            $result = array($key => $result);
            $results = array_merge($results, $result);
        }
        return $results;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/payment-controller/getInvoicePDF
     * @param int $invoiceId
     * @return array
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getInvoicePDF(int $invoiceId):array 
    {
        $result = TubeAPI::request('GET', '/payments/invoices/'.$invoiceId.'/pdf', null, TubeAPI::$token);
        return json_decode($result);
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/payment-controller/getInvoiceMail
     * @param int $invoiceId
     * @return string
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getInvoiceMail(int $invoiceId):string 
    {
        $result = TubeAPI::request('GET', '/payments/invoices/'.$invoiceId.'/email', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/payment-controller/getBalanceChanges
     * @return  SearchResultBalanceChange
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getBalanceChanges(): SearchResultBalanceChange 
    {
        $result = TubeAPI::request('GET', '/payments/balance', null, TubeAPI::$token);
        return  SearchResultBalanceChange::fromStdClass(json_decode($result));
    }
}
