<?php

namespace TubeAPI;

use TubeAPI\Exceptions;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/Exceptions/RequestException.php';

class TubeAPI
{
    public static string $token;

    /**
     * @param string $method
     * @param string $endpoint
     * @param array|null $data
     * @param string|null $bearer
     * @param array|null $customHeaders
     * @return string
     * @throws RequestException
     */
    public static function request(string $method, string $endpoint, ?array $data = array('null'), ?string $bearer = 'null', ?array $customHeaders = null): string
    {

        $curl = curl_init();

        //set necessary http headers
        $headers = array(
            'Connection: keep-alive',
            'Accept: */*',
            'Access-Control-Request-Headers: authorization,content-type',
            'User-Agent: PHP-Client v0.2',
            'Content-Type: application/json; charset=utf-8',
            'Authorization: Bearer ' . $bearer
        );
        if ($customHeaders !== null) $headers = array_merge($headers, $customHeaders);

        //set options
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://api.tube-hosting.com' . $endpoint,
            CURLOPT_CUSTOMREQUEST => $method, //set http method
            CURLOPT_POSTFIELDS => json_encode($data), //add json data
            CURLOPT_ENCODING => 'gzip, deflate'
        ]);

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

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

            throw new RequestException($curl_getInfo, "https://api.tube-hosting.com" . $endpoint, $data, $http_code, $errormsg, 0);
        }

        curl_close($curl);

        return $data;
    }
}