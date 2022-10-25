<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class StatusMessageUserData
{

    private $readTime;


    /**
     * @return ?string
     */
    public function getReadTime(): ?string
    {
         return $this->readTime;
     }

    /**
     * @param string|null $readTime
     */
    public function __construct(?string $readTime)
    {
        $this->readTime = $readTime;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'readTime' => $this->getReadTime(),
        ];
    }

    /**
     * @param object $object
     * @return StatusMessageUserData
     */
    public static function fromStdClass(object $object):StatusMessageUserData
    {

        if (isset($object->readTime)) {
            $readTime = (string) $object->readTime;
        }else $readTime = null;

        return new StatusMessageUserData($readTime);
     }


    /**
     * @link https://doc.api.tube-hosting.com/#/status-controller/readMessage
     * @param int $messageId
     * @return  StatusMessageUserData
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function readMessage(int $messageId): StatusMessageUserData 
    {
        $result = TubeAPI::request('POST', '/status/messages/'.$messageId.'/read', null, TubeAPI::$token);
        return  StatusMessageUserData::fromStdClass(json_decode($result));
    }


    /**
     * @link https://doc.api.tube-hosting.com/#/status-controller/getMessages
     * @param int $page
     * @param int $size
     * @param string $lan
     * @return  SearchResultObject
     * @throws \TubeAPI\Exceptions\RequestException
     */
    public static function getMessages(int $page = 0, int $size = 0, string $lan = ""): SearchResultObject 
    {
        $result = TubeAPI::request('GET', '/status/messages?page='.$page.'&size='.$size.'&lan='.$lan.'', null, TubeAPI::$token);
        return  SearchResultObject::fromStdClass(json_decode($result));
    }
}
