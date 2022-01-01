<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class TemplateGroup
{

    private string|null $comment;

    private bool|null $available;

    private int|null $id;

    private string|null $name;

    private int|null $runtime;

    private string|null $startDate;

    private array|null $templates;

    private int|null $price;

    private int|null $dataId;


    /**
     * @return string|null
     */
    public function getComment(): string|null
    {
         return $this->comment;
     }

    /**
     * @return bool|null
     */
    public function getAvailable(): bool|null
    {
         return $this->available;
     }

    /**
     * @return int|null
     */
    public function getId(): int|null
    {
         return $this->id;
     }

    /**
     * @return string|null
     */
    public function getName(): string|null
    {
         return $this->name;
     }

    /**
     * @return int|null
     */
    public function getRuntime(): int|null
    {
         return $this->runtime;
     }

    /**
     * @return string|null
     */
    public function getStartDate(): string|null
    {
         return $this->startDate;
     }

    /**
     * @return array|null
     */
    public function getTemplates(): array|null
    {
         return $this->templates;
     }

    /**
     * @return int|null
     */
    public function getPrice(): int|null
    {
         return $this->price;
     }

    /**
     * @return int|null
     */
    public function getDataId(): int|null
    {
         return $this->dataId;
     }

    /**
     * @param string|null $comment
     * @param bool|null $available
     * @param int|null $id
     * @param string|null $name
     * @param int|null $runtime
     * @param string|null $startDate
     * @param array|null $templates
     * @param int|null $price
     * @param int|null $dataId
     */
    public function __construct(string|null $comment, bool|null $available, int|null $id, string|null $name, int|null $runtime, string|null $startDate, array|null $templates, int|null $price, int|null $dataId)
    {
        $this->comment = $comment;
        $this->available = $available;
        $this->id = $id;
        $this->name = $name;
        $this->runtime = $runtime;
        $this->startDate = $startDate;

        //handle objects in array with multiple possible objects
        $tmpTemplates = $templates;
        $templates = [];
        foreach ($tmpTemplates as $key => $item) {
            switch ((string)((array)$item)['serviceType']){
               case "DEDICATED":
                   $item = DedicatedTemplate::fromStdClass($item);
                    break;
               case "IPV4BUNDLE":
                   $item = Ipv4BundleTemplate::fromStdClass($item);
                    break;
               case "VPS":
                   $item = VPSTemplate::fromStdClass($item);
                    break;
            }
            $singleItem = array($key => $item);
            $templates = array_merge($templates, $singleItem);
        }
        $this->templates = $templates;
        $this->price = $price;
        $this->dataId = $dataId;
    }

    /**
     * @return array
     */
    public function getAsArr()
    {
        return
        [
        'comment' => $this->getComment(),
        'available' => $this->getAvailable(),
        'id' => $this->getId(),
        'name' => $this->getName(),
        'runtime' => $this->getRuntime(),
        'startDate' => $this->getStartDate(),
        'templates' => $this->getTemplates(),
        'price' => $this->getPrice(),
        'dataId' => $this->getDataId(),
        ];
    }

    /**
     * @param object $object
     * @return TemplateGroup
     */
    public static function fromStdClass(object $object):TemplateGroup
    {

        if (isset($object->comment)) {
            $comment = (string) $object->comment;
        }else $comment = $object->comment=null;

        if (isset($object->available)) {
            $available = (bool) $object->available;
        }else $available = $object->available=null;

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = $object->id=null;

        if (isset($object->name)) {
            $name = (string) $object->name;
        }else $name = $object->name=null;

        if (isset($object->runtime)) {
            $runtime = (int) $object->runtime;
        }else $runtime = $object->runtime=null;

        if (isset($object->startDate)) {
            $startDate = (string) $object->startDate;
        }else $startDate = $object->startDate=null;

        if (isset($object->templates)) {
            $templates = (array) $object->templates;
        }else $templates = $object->templates=null;

        if (isset($object->price)) {
            $price = (int) $object->price;
        }else $price = $object->price=null;

        if (isset($object->dataId)) {
            $dataId = (int) $object->dataId;
        }else $dataId = $object->dataId=null;

        return new TemplateGroup($comment, $available, $id, $name, $runtime, $startDate, $templates, $price, $dataId);
     }
}
