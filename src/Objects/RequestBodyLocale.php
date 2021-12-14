<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class RequestBodyLocale
{

    private string $locale;


    /**
     * @return string
     */
    public function getLocale(): string
    {
         return $this->locale;
     }

    /**
     * @param string $locale
     */
    public function __construct(string $locale)
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
        $locale = (string) $object->locale;

        return new RequestBodyLocale($locale);
     }
}
