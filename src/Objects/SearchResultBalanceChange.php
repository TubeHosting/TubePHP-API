<?php

namespace TubeAPI\Objects;

use TubeAPI\TubeAPI;

require_once __DIR__ . '/../TubeAPI.php';

class SearchResultBalanceChange
{

    private int $count;

    private int $page;

    private int $size;

    private array $items;


    /**
     * @return int
     */
    public function getCount(): int
    {
         return $this->count;
     }

    /**
     * @return int
     */
    public function getPage(): int
    {
         return $this->page;
     }

    /**
     * @return int
     */
    public function getSize(): int
    {
         return $this->size;
     }

    /**
     * @return array
     */
    public function getItems(): array
    {
         return $this->items;
     }

    /**
     * @param int $count
     * @param int $page
     * @param int $size
     * @param array $items
     */
    public function __construct(int $count, int $page, int $size, array $items)
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
     * @return SearchResultBalanceChange
     */
    public static function fromStdClass(object $object):SearchResultBalanceChange
    {
        $count = (int) $object->count;
        $page = (int) $object->page;
        $size = (int) $object->size;
        $items = (array) $object->items;

        return new SearchResultBalanceChange($count, $page, $size, $items);
     }
}
