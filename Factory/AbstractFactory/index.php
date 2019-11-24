<?php

use AbstractFactory\NYPizzaStore;
use AbstractFactory\PizzaType;

require 'vendor/autoload.php';

$nyPizzaStore = new NYPizzaStore();
$cheesePizza = $nyPizzaStore->orderPizza(PizzaType::CHEEZE());
$cheesePizza->getName();