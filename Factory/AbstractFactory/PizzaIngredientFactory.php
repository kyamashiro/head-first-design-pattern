<?php

namespace AbstractFactory;

use AbstractFactory\Ingredient\Cheese\Cheese;
use AbstractFactory\Ingredient\Clams\Clams;
use AbstractFactory\Ingredient\Dough\Dough;
use AbstractFactory\Ingredient\Pepperoni\Pepperoni;
use AbstractFactory\Ingredient\Sauce\Sauce;

interface PizzaIngredientFactory
{
    public function createDough(): Dough;

    public function createSauce(): Sauce;

    public function createCheese(): Cheese;

    public function createVeggies(): array;

    public function createPepperoni(): Pepperoni;

    public function createClam(): Clams;
}