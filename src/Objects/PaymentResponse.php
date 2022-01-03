<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class PaymentResponse
{

    private $link;

    private $paymentMethodId;


    /**
     * @return ?string
     */
    public function getLink(): ?string
    {
         return $this->link;
     }

    /**
     * @return ?string
     */
    public function getPaymentMethodId(): ?string
    {
         return $this->paymentMethodId;
     }

    /**
     * @param string|null $link
     * @param string|null $paymentMethodId
     */
    public function __construct(?string $link, ?string $paymentMethodId)
    {
        $this->link = $link;
        $this->paymentMethodId = $paymentMethodId;
    }

    /**
     * @return array
     */
    public function getAsArr():array
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
