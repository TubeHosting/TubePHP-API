<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class TemplateGroup
{

    private string $comment;

    private bool $available;

    private int $id;

    private string $name;

    private int $runtime;

    private string $startDate;

    private array $templates;

    private int $price;

    private int $dataId;


    /**
     * @return string
     */
    public function getComment(): string
    {
         return $this->comment;
     }

    /**
     * @return bool
     */
    public function getAvailable(): bool
    {
         return $this->available;
     }

    /**
     * @return int
     */
    public function getId(): int
    {
         return $this->id;
     }

    /**
     * @return string
     */
    public function getName(): string
    {
         return $this->name;
     }

    /**
     * @return int
     */
    public function getRuntime(): int
    {
         return $this->runtime;
     }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
         return $this->startDate;
     }

    /**
     * @return array
     */
    public function getTemplates(): array
    {
         return $this->templates;
     }

    /**
     * @return int
     */
    public function getPrice(): int
    {
         return $this->price;
     }

    /**
     * @return int
     */
    public function getDataId(): int
    {
         return $this->dataId;
     }

    /**
     * @param string $comment
     * @param bool $available
     * @param int $id
     * @param string $name
     * @param int $runtime
     * @param string $startDate
     * @param array $templates
     * @param int $price
     * @param int $dataId
     */
    public function __construct(string $comment, bool $available, int $id, string $name, int $runtime, string $startDate, array $templates, int $price, int $dataId)
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
        $comment = (string) $object->comment;
        $available = (bool) $object->available;
        $id = (int) $object->id;
        $name = (string) $object->name;
        $runtime = (int) $object->runtime;
        $startDate = (string) $object->startDate;
        $templates = (array) $object->templates;
        $price = (int) $object->price;
        $dataId = (int) $object->dataId;

        return new TemplateGroup($comment, $available, $id, $name, $runtime, $startDate, $templates, $price, $dataId);
     }
}
