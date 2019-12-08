<?php


namespace Composite;


/**
 * Class MenuComponent
 * @package Composite
 * リーフノードとコンポジットノード用のインターフェースを提供する
 */
abstract class MenuComponent
{
    public function add(MenuComponent $menuComponent): void
    {
        throw new UnsupportedOperationException();
    }

    public function remove(MenuComponent $menuComponent): void
    {
        throw new UnsupportedOperationException();
    }

    public function getChild(int $i): MenuComponent
    {
        throw new UnsupportedOperationException();
    }

    public function getName(): string
    {
        throw new UnsupportedOperationException();
    }

    public function getDescription(): string
    {
        throw new UnsupportedOperationException();
    }

    public function getPrice(): float
    {
        throw new UnsupportedOperationException();
    }

    public function isVegetarian(): bool
    {
        throw new UnsupportedOperationException();
    }

    public function print(): void
    {
        throw new UnsupportedOperationException();
    }
}