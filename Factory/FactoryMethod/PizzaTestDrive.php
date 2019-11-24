<?php

use FactoryMethod\ChicagoStylePizzaStore;
use FactoryMethod\NYStylePizzaStore;
use FactoryMethod\PizzaType;

require './vendor/autoload.php';

$nyStore = new NYStylePizzaStore();
$chicagoStore = new ChicagoStylePizzaStore();

$pizza = $nyStore->orderPizza(PizzaType::CHEEZE());
echo "イーサンの注文は{$pizza->getName()}\n";
echo "\n";
$pizza = $chicagoStore->orderPizza(PizzaType::CHEEZE());
echo "ジョエルの注文は{$pizza->getName()}\n";