<?php


namespace Command;


use MyCLabs\Enum\Enum;

class Location extends Enum
{
    private const LIVING_ROOM = 'リビングルーム';
    private const KITCHEN_ROOM = 'キッチンルーム';

    public static function livingRoom(): self
    {
        return new self(self::LIVING_ROOM);
    }

    public static function kitchenRoom(): self
    {
        return new self(self::KITCHEN_ROOM);
    }
}