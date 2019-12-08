<?php

namespace Composite;

use SplObjectStorage;

class Menu extends MenuComponent
{
    private SplObjectStorage $menuComponent;
    private string $name;
    private string $description;

    /**
     * Menu constructor.
     * @param string $name
     * @param string $description
     */
    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
        $this->menuComponent = new SplObjectStorage();
    }

    public function add(MenuComponent $menuComponent): void
    {
        $this->menuComponent->attach($menuComponent);
    }

    public function remove(MenuComponent $menuComponent): void
    {
        $this->menuComponent->detach($menuComponent);
    }

    public function print(): void
    {
        echo "\n {$this->getName()}, ";
        echo "{$this->getDescription()}";
        echo "----------------\n";

        $this->menuComponent->rewind();
        while ($this->menuComponent->valid()) {
            /** @var MenuItem $menuItem */
            $menuComponent = $this->menuComponent->current();
            $menuComponent->print();
            $this->menuComponent->next();
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}