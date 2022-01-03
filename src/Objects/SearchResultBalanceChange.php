<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class SearchResultBalanceChange
{

    private $count;

    private $page;

    private $size;

    private $items;


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
     * @param int|null $count
     * @param int|null $page
     * @param int|null $size
     * @param array|null $items
     */
    public function __construct(?int $count, ?int $page, ?int $size, ?array $items)
    {
        $this->count = $count;
        $this->page = $page;
        $this->size = $size;

        //handle objects in array
        $tmpItems = $items;
        $items = [];
        foreach ($tmpItems as $key => $item) {
            $item = PaymentBundle::fromStdClass($item);
            $singleItem = array($key => $item);
            $items = array_merge($items, $singleItem);
        }
        $this->items = $items;
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
        ];
    }

    /**
     * @param object $object
     * @return SearchResultBalanceChange
     */
    public static function fromStdClass(object $object):SearchResultBalanceChange
    {

        if (isset($object->count)) {
            $count = (int) $object->count;
        }else $count = $object->count=null;

        if (isset($object->page)) {
            $page = (int) $object->page;
        }else $page = $object->page=null;

        if (isset($object->size)) {
            $size = (int) $object->size;
        }else $size = $object->size=null;

        if (isset($object->items)) {
            $items = (array) $object->items;
        }else $items = $object->items=null;

        return new SearchResultBalanceChange($count, $page, $size, $items);
     }
}
