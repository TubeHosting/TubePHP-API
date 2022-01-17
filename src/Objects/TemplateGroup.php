<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class TemplateGroup
{

    private $comment;

    private $available;

    private $id;

    private $name;

    private $runtime;

    private $startDate;

    private $templates;

    private $price;

    private $dataId;


    /**
     * @return ?string
     */
    public function getComment(): ?string
    {
         return $this->comment;
     }

    /**
     * @return ?bool
     */
    public function getAvailable(): ?bool
    {
         return $this->available;
     }

    /**
     * @return ?int
     */
    public function getId(): ?int
    {
         return $this->id;
     }

    /**
     * @return ?string
     */
    public function getName(): ?string
    {
         return $this->name;
     }

    /**
     * @return ?int
     */
    public function getRuntime(): ?int
    {
         return $this->runtime;
     }

    /**
     * @return ?string
     */
    public function getStartDate(): ?string
    {
         return $this->startDate;
     }

    /**
     * @return ?array
     */
    public function getTemplates(): ?array
    {
         return $this->templates;
     }

    /**
     * @return ?int
     */
    public function getPrice(): ?int
    {
         return $this->price;
     }

    /**
     * @return ?int
     */
    public function getDataId(): ?int
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
    public function __construct(?string $comment, ?bool $available, ?int $id, ?string $name, ?int $runtime, ?string $startDate, ?array $templates, ?int $price, ?int $dataId)
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
        if($tmpTemplates!==null){
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
        }
        $this->templates = $templates;
        $this->price = $price;
        $this->dataId = $dataId;
    }

    /**
     * @return array
     */
    public function getAsArr():array
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
        }else $comment = null;

        if (isset($object->available)) {
            $available = (bool) $object->available;
        }else $available = null;

        if (isset($object->id)) {
            $id = (int) $object->id;
        }else $id = null;

        if (isset($object->name)) {
            $name = (string) $object->name;
        }else $name = null;

        if (isset($object->runtime)) {
            $runtime = (int) $object->runtime;
        }else $runtime = null;

        if (isset($object->startDate)) {
            $startDate = (string) $object->startDate;
        }else $startDate = null;

        if (isset($object->templates)) {
            $templates = (array) $object->templates;
        }else $templates = null;

        if (isset($object->price)) {
            $price = (int) $object->price;
        }else $price = null;

        if (isset($object->dataId)) {
            $dataId = (int) $object->dataId;
        }else $dataId = null;

        return new TemplateGroup($comment, $available, $id, $name, $runtime, $startDate, $templates, $price, $dataId);
     }
}
