<?php

use Decorator\Espresso;
use Decorator\HouseBlend;
use Decorator\Mocha;
use Decorator\Whip;

require './vendor/autoload.php';

$espresso = new Espresso();
// エスプレッソ $ 1.99
print_r("{$espresso->getDescription()} $ {$espresso->cost()}\n");

// エスプレッソをインスタンス化し、それをトッピングでラップする
$house_blend_mocha = new Mocha(new HouseBlend());
// ハウスブレンドコーヒー, モカ $ 1.09
print_r("{$house_blend_mocha->getDescription()} $ {$house_blend_mocha->cost()}\n");

$house_blend_mocha_whip = new Whip(new Mocha(new HouseBlend()));
// ハウスブレンドコーヒー, モカ, ホイップ $ 1.59
print_r("{$house_blend_mocha_whip->getDescription()} $ {$house_blend_mocha_whip->cost()}\n");