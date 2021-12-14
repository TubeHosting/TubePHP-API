<?php

namespace TubeAPI;

class TubeAPI
{
    private $apiUrl = 'https://api.tube-hosting.com';

    private $userAgent = 'API';

    public static $token;

    /**
     * @param string $method
     * @param string $endpoint
     * @param array|null $data
     * @param string|null $bearer
     * @param array|null $customHeaders
     * @return bool|string
     * @throws \Exception
     */
    public static function request(string $method, string $endpoint, ?array $data = array('null'), ?string $bearer = 'null', ?array $customHeaders = null): bool|string
    {

        $curl = curl_init();

        $headers = array(
            'Connection: keep-alive',
            'Accept: */*',
            'Access-Control-Request-Headers: authorization,content-type',
            'User-Agent: API',
            'Accept-Language: en-US,en;q=0.9',
            'Content-Type: application/json; charset=utf-8',
            'Authorization: Bearer ' . $bearer
        );
        if ($customHeaders !== null) $headers = array_merge($headers, $customHeaders);

        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://api.tube-hosting.com' . $endpoint,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_ENCODING => 'gzip, deflate'
        ]);

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = curl_exec($curl);
        $http_code = ((int)curl_getinfo($curl)['http_code']);

        if (!is_array(curl_getinfo($curl)) || $http_code !== 200){ //handle unexpected behavior
            if ($http_code === 0) $errormsg = "Cannot create connection!";
            else {
                $errormsg = "Request failed: ". $http_code;
            }
            if((string)$data !== "") $errormsg = $errormsg . " -  ".$data;
            throw new \Exception($errormsg);
        }
        curl_close($curl);

        return $data;
    }
}