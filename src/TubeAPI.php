<?php

namespace TubeAPI;

use TubeAPI\Exceptions;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/Exceptions/RequestException.php';

class TubeAPI
{
    public static $token;

    public static $apiServer = "https://api.tube-hosting.com";

    /**
     * @param string $method
     * @param string $endpoint
     * @param $data
     * @param string|null $bearer
     * @param array|null $customHeaders
     * @return string
     * @throws RequestException
     */
    public static function request(string $method, string $endpoint, $data, ?string $bearer, ?array $customHeaders = null): string
    {

        $curl = curl_init();

        //set necessary http headers
        $headers = array();
        $headers[] = 'Accept: application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
        $headers[] = 'User-Agent: PHP-Client v1.0';
        $headers[] = 'Authorization: Bearer ' . $bearer;

        //send specific content type when needed https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Type
        if ($method === "POST" || $method === "PUT") if($data != null) $headers[] = 'Content-Type: application/json';
        if ($customHeaders !== null) $headers = array_merge($headers, $customHeaders);

        //set options
        $options = array();
        $options[CURLOPT_RETURNTRANSFER] = 1;
        $options[CURLOPT_URL] = TubeAPI::$apiServer . $endpoint;
        $options[CURLOPT_CUSTOMREQUEST] = $method;
        $options[CURLOPT_ENCODING] =  'gzip, deflate';
        $options[CURLOPT_HTTP_VERSION] =  CURL_HTTP_VERSION_2_0;
        $options[CURLOPT_HTTPHEADER] = $headers;
        if ($method === "POST" || $method === "PUT" ) if($data != null) $options[CURLOPT_POSTFIELDS] = json_encode($data);
        curl_setopt_array($curl, $options);

        $data = curl_exec($curl);
        $http_code = ((int)curl_getinfo($curl)['http_code']);

        if (!$data || !is_array(curl_getinfo($curl)) || $http_code !== 200){ //handle unexpected behavior

            //failed requests
            if (!$data) $errormsg = "Request Failed!";
            else if ($http_code === 0) $errormsg = "Cannot create connection!";
            //status code != 200/0
            else $errormsg = "Request failed: ". $http_code;

            //if something is getting returned, put it in the error message
            if((string)$data !== "") $errormsg = $errormsg . " -  ".$data;

            //prepare for throwing exception
            if (!is_array(curl_getinfo($curl))){
                $curl_getInfo = null;
                $http_code = null;
            }else{
                $curl_getInfo = curl_getinfo($curl);
                $http_code =  (int)curl_getinfo($curl)['http_code'];
            }

            if (!$data || (string) $data === ""){
                $data = null;
            }

            throw new RequestException($curl_getInfo, self::$apiServer . $endpoint, $data, $http_code, $errormsg, 0);
        }

        curl_close($curl);

        return $data;
    }
}