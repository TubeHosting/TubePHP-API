<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class PaymentResponse
{

    private string $link;

    private string $paymentMethodId;


    /**
     * @return string
     */
    public function getLink(): string
    {
         return $this->link;
     }

    /**
     * @return string
     */
    public function getPaymentMethodId(): string
    {
         return $this->paymentMethodId;
     }

    /**
     * @param string $link
     * @param string $paymentMethodId
     */
    public function __construct(string $link, string $paymentMethodId)
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
        $link = (string) $object->link;
        $paymentMethodId = (string) $object->paymentMethodId;

        return new PaymentResponse($link, $paymentMethodId);
     }
}
