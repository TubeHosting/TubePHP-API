<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class Payment
{

    private int $id;

    private string $method;

    private int $amount;

    private string $status;

    private string $description;

    private string $timeStarted;

    private string $timeFinished;

    private string $providerId;

    private string $type;

    private int $userId;

    private int $paymentBundleId;


    /**
     * @return int
     */
    public function getId(): int
    {
         return $this->id;
     }

    /**
     * @return string
     */
    public function getMethod(): string
    {
         return $this->method;
     }

    /**
     * @return int
     */
    public function getAmount(): int
    {
         return $this->amount;
     }

    /**
     * @return string
     */
    public function getStatus(): string
    {
         return $this->status;
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
    public function getTimeStarted(): string
    {
         return $this->timeStarted;
     }

    /**
     * @return string
     */
    public function getTimeFinished(): string
    {
         return $this->timeFinished;
     }

    /**
     * @return string
     */
    public function getProviderId(): string
    {
         return $this->providerId;
     }

    /**
     * @return string
     */
    public function getType(): string
    {
         return $this->type;
     }

    /**
     * @return int
     */
    public function getUserId(): int
    {
         return $this->userId;
     }

    /**
     * @return int
     */
    public function getPaymentBundleId(): int
    {
         return $this->paymentBundleId;
     }

    /**
     * @param int $id
     * @param string $method
     * @param int $amount
     * @param string $status
     * @param string $description
     * @param string $timeStarted
     * @param string $timeFinished
     * @param string $providerId
     * @param string $type
     * @param int $userId
     * @param int $paymentBundleId
     */
    public function __construct(int $id, string $method, int $amount, string $status, string $description, string $timeStarted, string $timeFinished, string $providerId, string $type, int $userId, int $paymentBundleId)
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
        $id = (int) $object->id;
        $method = (string) $object->method;
        $amount = (int) $object->amount;
        $status = (string) $object->status;
        $description = (string) $object->description;
        $timeStarted = (string) $object->timeStarted;
        $timeFinished = (string) $object->timeFinished;
        $providerId = (string) $object->providerId;
        $type = (string) $object->type;
        $userId = (int) $object->userId;
        $paymentBundleId = (int) $object->paymentBundleId;

        return new Payment($id, $method, $amount, $status, $description, $timeStarted, $timeFinished, $providerId, $type, $userId, $paymentBundleId);
     }


    /**
     * @param BalanceSendingRequest $balanceSendingRequest
     * @return string
     * @throws \Exception
     */
    public static function sendBalance(BalanceSendingRequest $balanceSendingRequest):string 
    {
        $result = TubeAPI::request('POST', '/payments/balance/send', $balanceSendingRequest->getAsArr(), TubeAPI::$token);
        return $result;
    }


    /**
     * @param BalanceChargeRequestBody $balanceChargeRequestBody
     * @return  PaymentResponse
     * @throws \Exception
     */
    public static function chargeBalance(BalanceChargeRequestBody $balanceChargeRequestBody): PaymentResponse 
    {
        $result = TubeAPI::request('POST', '/payments/balance/charge', $balanceChargeRequestBody->getAsArr(), TubeAPI::$token);
        return  PaymentResponse::fromStdClass(json_decode($result));
    }


    /**
     * @param int $templateGroupId
     * @return  SingleServiceGroupData
     * @throws \Exception
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
     * @throws \Exception
     */
    public static function getPaymentBundles(int $page = 0, int $size = 0): SearchResultPaymentBundle 
    {
        $result = TubeAPI::request('GET', '/payments?page='.$page.'&size='.$size.'', null, TubeAPI::$token);
        return  SearchResultPaymentBundle::fromStdClass(json_decode($result));
    }


    /**
     * @return array
     * @throws \Exception
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
     * @throws \Exception
     */
    public static function getInvoicePDF(int $invoiceId):array 
    {
        $result = TubeAPI::request('GET', '/payments/invoices/'.$invoiceId.'/pdf', null, TubeAPI::$token);
        return json_decode($result);
    }


    /**
     * @param int $invoiceId
     * @return string
     * @throws \Exception
     */
    public static function getInvoiceMail(int $invoiceId):string 
    {
        $result = TubeAPI::request('GET', '/payments/invoices/'.$invoiceId.'/email', null, TubeAPI::$token);
        return $result;
    }


    /**
     * @return  SearchResultBalanceChange
     * @throws \Exception
     */
    public static function getBalanceChanges(): SearchResultBalanceChange 
    {
        $result = TubeAPI::request('GET', '/payments/balance', null, TubeAPI::$token);
        return  SearchResultBalanceChange::fromStdClass(json_decode($result));
    }
}
