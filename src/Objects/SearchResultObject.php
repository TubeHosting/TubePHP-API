<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class SearchResultObject
{

    private $count;

    private $page;

    private $size;

    private $items;

    private $empty;

    private $notEmpty;


    /**
     * @return ?int
     */
    public function getCount(): ?int
    {
         return $this->count;
     }

    /**
     * @return ?int
     */
    public function getPage(): ?int
    {
         return $this->page;
     }

    /**
     * @return ?int
     */
    public function getSize(): ?int
    {
         return $this->size;
     }

    /**
     * @return ?array
     */
    public function getItems(): ?array
    {
         return $this->items;
     }

    /**
     * @return ?bool
     */
    public function getEmpty(): ?bool
    {
         return $this->empty;
     }

    /**
     * @return ?bool
     */
    public function getNotEmpty(): ?bool
    {
         return $this->notEmpty;
     }

    /**
     * @param int|null $count
     * @param int|null $page
     * @param int|null $size
     * @param array|null $items
     * @param bool|null $empty
     * @param bool|null $notEmpty
     */
    public function __construct(?int $count, ?int $page, ?int $size, ?array $items, ?bool $empty, ?bool $notEmpty)
    {
        $this->count = $count;
        $this->page = $page;
        $this->size = $size;

        //handle stuff in array
        $tmpItems = $items;
        $items = [];
        if($tmpItems!==null){
             foreach ($tmpItems as $key => $item) {
                 $singleItem = array($key => $item);
                 $items = array_merge($items, $singleItem);
            }
        }
        $this->items = $items;
        $this->empty = $empty;
        $this->notEmpty = $notEmpty;
    }

    /**
     * @return array
     */
    public function getAsArr():array
    {
        return
        [
        'count' => $this->getCount(),
        'page' => $this->getPage(),
        'size' => $this->getSize(),
        'items' => $this->getItems(),
        'empty' => $this->getEmpty(),
        'notEmpty' => $this->getNotEmpty(),
        ];
    }

    /**
     * @param object $object
     * @return SearchResultObject
     */
    public static function fromStdClass(object $object):SearchResultObject
    {

        if (isset($object->count)) {
            $count = (int) $object->count;
        }else $count = null;

        if (isset($object->page)) {
            $page = (int) $object->page;
        }else $page = null;

        if (isset($object->size)) {
            $size = (int) $object->size;
        }else $size = null;

        if (isset($object->items)) {
            $items = (array) $object->items;
        }else $items = null;

        if (isset($object->empty)) {
            $empty = (bool) $object->empty;
        }else $empty = null;

        if (isset($object->notEmpty)) {
            $notEmpty = (bool) $object->notEmpty;
        }else $notEmpty = null;

        return new SearchResultObject($count, $page, $size, $items, $empty, $notEmpty);
     }
}
