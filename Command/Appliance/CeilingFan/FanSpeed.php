<?php


namespace Command\Appliance\CeilingFan;

use MyCLabs\Enum\Enum;

class FanSpeed extends Enum
{
    private const HIGH = 3;
    private const MEDIUM = 2;
    private const LOW = 1;
    private const OFF = 0;
    private const MAP = [
        self::OFF => 'オフ',
        self::LOW => '弱',
        self::MEDIUM => '中',
        self::HIGH => '強',
    ];

    public static function HIGH(): self
    {
        return new self(self::HIGH);
    }

    public static function MEDIUM(): self
    {
        return new self(self::MEDIUM);
    }

    public static function LOW(): self
    {
        return new self(self::LOW);
    }

    public static function OFF(): self
    {
        return new self(self::OFF);
    }

    public function toString(): string
    {
        return self::MAP[self::getValue()];
    }
}