<?php


namespace Iterator;


class Waitress
{
    private Menu $pancakeHouseMenu;
    private Menu $dinerMenu;

    /**
     * Waitress constructor.
     * @param Menu $pancakeHouseMenu
     * @param Menu $dinerMenu
     */
    public function __construct(Menu $pancakeHouseMenu, Menu $dinerMenu)
    {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
    }

    public function printMenu(): void
    {
        echo "メニュー\n---\n朝食";
        $this->print($this->pancakeHouseMenu->createIterator());
        echo "\n昼食";
        $this->print($this->dinerMenu->createIterator());
    }

    private function print(Iterator $iterator): void
    {
        while ($iterator->hasNext()) {
            $menuItem = $iterator->next();
            echo "{$menuItem->getName()}, ";
            echo "{$menuItem->getPrice()} -- ";
            echo "{$menuItem->getDescription()}\n";
        }
    }
}