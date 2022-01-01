<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;
use TubeAPI\Exceptions\RequestException;

require_once __DIR__ . '/../TubeAPI.php';
require_once __DIR__ . '/../Exceptions/RequestException.php';

class SearchResultPaymentBundle
{

    private int|null $count;

    private int|null $page;

    private int|null $size;

    private array|null $items;


    /**
     * @return int|null
     */
    public function getCount(): int|null
    {
         return $this->count;
     }

    /**
     * @return int|null
     */
    public function getPage(): int|null
    {
         return $this->page;
     }

    /**
     * @return int|null
     */
    public function getSize(): int|null
    {
         return $this->size;
     }

    /**
     * @return array|null
     */
    public function getItems(): array|null
    {
         return $this->items;
     }

    /**
     * @param int|null $count
     * @param int|null $page
     * @param int|null $size
     * @param array|null $items
     */
    public function __construct(int|null $count, int|null $page, int|null $size, array|null $items)
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
    public function getAsArr()
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
     * @return SearchResultPaymentBundle
     */
    public static function fromStdClass(object $object):SearchResultPaymentBundle
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

        return new SearchResultPaymentBundle($count, $page, $size, $items);
     }
}
