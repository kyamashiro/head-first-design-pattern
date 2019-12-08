<?php

namespace Iterator;

class DinerMenuIterator implements Iterator
{
    private array $items;
    private int $position = 0;

    /**
     * DinerMenuIterator constructor.
     * @param MenuItem[] $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }


    public function hasNext(): bool
    {
        if (count($this->items) <= $this->position || !$this->items[$this->position]) {
            return false;
        }
        return true;
    }

    public function next(): MenuItem
    {
        $menuItem = $this->items[$this->position];
        $this->position++;
        return $menuItem;
    }
}