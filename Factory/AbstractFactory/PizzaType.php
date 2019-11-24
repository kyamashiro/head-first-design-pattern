<?php

namespace AbstractFactory;

use MyCLabs\Enum\Enum;

class PizzaType extends Enum
{
    private const CHEEZE = 'チーズ';
    private const VEGE = '野菜';
    private const PEPPERONI = 'ペパロニ';
    private const CLAM = 'クラム';

    public static function CHEEZE(): self
    {
        return new self(self::CHEEZE);
    }

    public static function VEGE(): self
    {
        return new self(self::VEGE);
    }

    public static function PEPPERONI(): self
    {
        return new self(self::PEPPERONI);
    }

    public static function CLAM(): self
    {
        return new self(self::CLAM);
    }
}