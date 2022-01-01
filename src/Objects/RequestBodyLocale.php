<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class RequestBodyLocale
{

    private string|null $locale;


    /**
     * @return string|null
     */
    public function getLocale(): string|null
    {
         return $this->locale;
     }

    /**
     * @param string|null $locale
     */
    public function __construct(string|null $locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'locale' => $this->getLocale(),
        ];
    }

    /**
     * @param object $object
     * @return RequestBodyLocale
     */
    public static function fromStdClass(object $object):RequestBodyLocale
    {

        if (isset($object->locale)) {
            $locale = (string) $object->locale;
        }else $locale = $object->locale=null;

        return new RequestBodyLocale($locale);
     }
}
