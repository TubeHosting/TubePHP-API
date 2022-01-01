<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class DescriptionBody
{

    private string $description;


    /**
     * @return string
     */
    public function getDescription(): string
    {
         return $this->description;
     }

    /**
     * @param string $description
     */
    public function __construct(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'description' => $this->getDescription(),
        ];
    }

    /**
     * @param object $object
     * @return DescriptionBody
     */
    public static function fromStdClass(object $object):DescriptionBody
    {
        $description = (string) $object->description;

        return new DescriptionBody($description);
     }
}
