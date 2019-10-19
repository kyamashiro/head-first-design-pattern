<?php

require './vendor/autoload.php';

use Chapter1\FlyWithWings;
use Chapter1\MallardDuck;
use Chapter1\Quack;

$mallad = new MallardDuck(new FlyWithWings(), new Quack());
$mallad->performFly();
$mallad->performQuack();