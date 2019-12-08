<?php


namespace Iterator;


class DinerMenu implements Menu
{
    const MAX_ITEMS = 6;
    public int $numberOfItems = 0;
    public array $menuItems;

    /**
     * DinerMenu constructor.
     * @param array $menuItems
     */
    public function __construct(array $menuItems)
    {
        $this->menuItems = $menuItems;
    }

    public function add(MenuItem $menuItem)
    {
        if (self::MAX_ITEMS <= $this->numberOfItems) {
            echo "すいません、メニューはいっぱいです!メニューに項目を追加できません\n";
            return;
        }
        $this->menuItems[] = $menuItem;
        $this->numberOfItems++;
    }

    public function createIterator(): Iterator
    {
        return new DinerMenuIterator($this->menuItems);
    }
}