<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class PaymentResponse
{

    private string|null $link;

    private string|null $paymentMethodId;


    /**
     * @return string|null
     */
    public function getLink(): string|null
    {
         return $this->link;
     }

    /**
     * @return string|null
     */
    public function getPaymentMethodId(): string|null
    {
         return $this->paymentMethodId;
     }

    /**
     * @param string|null $link
     * @param string|null $paymentMethodId
     */
    public function __construct(string|null $link, string|null $paymentMethodId)
    {
        $this->link = $link;
        $this->paymentMethodId = $paymentMethodId;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'link' => $this->getLink(),
        'paymentMethodId' => $this->getPaymentMethodId(),
        ];
    }

    /**
     * @param object $object
     * @return PaymentResponse
     */
    public static function fromStdClass(object $object):PaymentResponse
    {

        if (isset($object->link)) {
            $link = (string) $object->link;
        }else $link = $object->link=null;

        if (isset($object->paymentMethodId)) {
            $paymentMethodId = (string) $object->paymentMethodId;
        }else $paymentMethodId = $object->paymentMethodId=null;

        return new PaymentResponse($link, $paymentMethodId);
     }
}
