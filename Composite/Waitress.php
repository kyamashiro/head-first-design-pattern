<?php


namespace Composite;


class Waitress
{
    private MenuComponent $allMenus;

    /**
     * Waitress constructor.
     * @param MenuComponent $allMenus
     */
    public function __construct(MenuComponent $allMenus)
    {
        $this->allMenus = $allMenus;
    }

    public function printMenu(): void
    {
        $this->allMenus->print();
    }
}