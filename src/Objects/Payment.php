<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class Payment
{

    private int|null $id;

    private string|null $method;

    private int|null $amount;

    private string|null $status;

    private string|null $description;

    private string|null $timeStarted;

    private string|null $timeFinished;

    private string|null $providerId;

    private string|null $type;

    private int|null $userId;

    private int|null $paymentBundleId;


    /**
     * @return int|null
     */
    public function getId(): int|null
    {
         return $this->id;
     }

    /**
     * @return string|null
     */
    public function getMethod(): string|null
    {
         return $this->method;
     }

    /**
     * @return int|null
     */
    public function getAmount(): int|null
    {
         return $this->amount;
     }

    /**
     * @return string|null
     */
    public function getStatus(): string|null
    {
         return $this->status;
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
    public function getTimeStarted(): string|null
    {
         return $this->timeStarted;
     }

    /**
     * @return string|null
     */
    public function getTimeFinished(): string|null
    {
         return $this->timeFinished;
     }

    /**
     * @return string|null
     */
    public function getProviderId(): string|null
    {
         return $this->providerId;
     }

    /**
     * @return string|null
     */
    public function getType(): string|null
    {
         return $this->type;
     }

    /**
     * @return int|null
     */
    public function getUserId(): int|null
    {
         return $this->userId;
     }

    /**
     * @return int|null
     */
    public function getPaymentBundleId(): int|null
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
    public function __construct(int|null $id, string|null $method, int|null $amount, string|null $status, string|null $description, string|null $timeStarted, string|null $timeFinished, string|null $providerId, string|null $type, int|null $userId, int|null $paymentBundleId)
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
    public function getAsArr()
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
        }else $id = $object->id=null;

        if (isset($object->method)) {
            $method = (string) $object->method;
        }else $method = $object->method=null;

        if (isset($object->amount)) {
            $amount = (int) $object->amount;
        }else $amount = $object->amount=null;

        if (isset($object->status)) {
            $status = (string) $object->status;
        }else $status = $object->status=null;

        if (isset($object->description)) {
            $description = (string) $object->description;
        }else $description = $object->description=null;

        if (isset($object->timeStarted)) {
            $timeStarted = (string) $object->timeStarted;
        }else $timeStarted = $object->timeStarted=null;

        if (isset($object->timeFinished)) {
            $timeFinished = (string) $object->timeFinished;
        }else $timeFinished = $object->timeFinished=null;

        if (isset($object->providerId)) {
            $providerId = (string) $object->providerId;
        }else $providerId = $object->providerId=null;

        if (isset($object->type)) {
            $type = (string) $object->type;
        }else $type = $object->type=null;

        if (isset($object->userId)) {
            $userId = (int) $object->userId;
        }else $userId = $object->userId=null;

        if (isset($object->paymentBundleId)) {
            $paymentBundleId = (int) $object->paymentBundleId;
        }else $paymentBundleId = $object->paymentBundleId=null;

        return new Payment($id, $method, $amount, $status, $description, $timeStarted, $timeFinished, $providerId, $type, $userId, $paymentBundleId);
     }


    /**
     * @param BalanceSendingRequest $balanceSendingRequest
     * @return string
     * @throws Exceptions\RequestException
     */
    public static function sendBalance(BalanceSendingRequest $balanceSendingRequest):string 
    {
        $result = TubeAPI::request('POST', '/payments/balance/send', $balanceSendingRequest->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param BalanceChargeRequestBody $balanceChargeRequestBody
     * @return  PaymentResponse
     * @throws Exceptions\RequestException
     */
    public static function chargeBalance(BalanceChargeRequestBody $balanceChargeRequestBody): PaymentResponse 
    {
        $result = TubeAPI::request('POST', '/payments/balance/charge', $balanceChargeRequestBody->getAsArr(), TubeAPI::$token);
        return  PaymentResponse::fromStdClass(json_decode($result));
    }


    /**
     * @param int $templateGroupId
     * @return  SingleServiceGroupData
     * @throws Exceptions\RequestException
     */
    public static function orderByTemplateGroup(int $templateGroupId): SingleServiceGroupData 
    {
        $result = TubeAPI::request('POST', '/order/template/'.$templateGroupId.'', null, TubeAPI::$token);
        return  SingleServiceGroupData::fromStdClass(json_decode($result));
    }


    /**
     * @param int $page
     * @param int $size
     * @return  SearchResultPaymentBundle
     * @throws Exceptions\RequestException
     */
    public static function getPaymentBundles(int $page = 0, int $size = 0): SearchResultPaymentBundle 
    {
        $result = TubeAPI::request('GET', '/payments?page='.$page.'&size='.$size.'', null, TubeAPI::$token);
        return  SearchResultPaymentBundle::fromStdClass(json_decode($result));
    }


    /**
     * @return array
     * @throws Exceptions\RequestException
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
     * @param int $invoiceId
     * @return array
     * @throws Exceptions\RequestException
     */
    public static function getInvoicePDF(int $invoiceId):array 
    {
        $result = TubeAPI::request('GET', '/payments/invoices/'.$invoiceId.'/pdf', null, TubeAPI::$token);
        return json_decode($result);
    }


    /**
     * @param int $invoiceId
     * @return string
     * @throws Exceptions\RequestException
     */
    public static function getInvoiceMail(int $invoiceId):string 
    {
        $result = TubeAPI::request('GET', '/payments/invoices/'.$invoiceId.'/email', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @return  SearchResultBalanceChange
     * @throws Exceptions\RequestException
     */
    public static function getBalanceChanges(): SearchResultBalanceChange 
    {
        $result = TubeAPI::request('GET', '/payments/balance', null, TubeAPI::$token);
        return  SearchResultBalanceChange::fromStdClass(json_decode($result));
    }
}
