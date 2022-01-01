<?php

namespace TubeAPI\Exceptions;

use Throwable;

class RequestException extends \Exception
{

    public int|null $httpStatusCode;

    public string|null $dataResponse;

    public string|null $url;

    public array|null $curl_getInfo;

    /**
     * @return int|null
     */
    public function getHttpStatusCode(): ?int
    {
        return $this->httpStatusCode;
    }

    /**
     * @return string|null
     */
    public function getDataResponse(): ?string
    {
        return $this->dataResponse;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @return array|null
     */
    public function getCurlGetInfo(): ?array
    {
        return $this->curl_getInfo;
    }

    /**
     * @param string $message
     * @param int $code
     * @param array|null $curl_getInfo
     * @param string|null $url
     * @param string|null $dataResponse
     * @param int|null $httpStatusCode
     * @param Throwable|null $previous
     */
    public function __construct(?array $curl_getInfo, ?string $url, ?string $dataResponse, ?int $httpStatusCode, string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->curl_getInfo = $curl_getInfo;
        $this->url = $url;
        $this->dataResponse = $dataResponse;
        $this->httpStatusCode = $httpStatusCode;
    }

}