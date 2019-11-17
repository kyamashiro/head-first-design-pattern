<?php

use Decorator\Espresso;
use Decorator\HouseBlend;
use Decorator\Mocha;
use Decorator\Whip;

require './vendor/autoload.php';

$espresso = new Espresso();
print_r("{$espresso->getDescription()} $ {$espresso->cost()}\n");

$house_blend = new Mocha(new HouseBlend());
print_r("{$house_blend->getDescription()} $ {$house_blend->cost()}\n");

$house_blend_whip = new Whip(new Mocha(new HouseBlend()));
print_r("{$house_blend_whip->getDescription()} $ {$house_blend_whip->cost()}\n");