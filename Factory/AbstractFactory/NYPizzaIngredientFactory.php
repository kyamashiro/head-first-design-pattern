<?php

namespace AbstractFactory;

use AbstractFactory\Ingredient\Cheese\Cheese;
use AbstractFactory\Ingredient\Cheese\ReggianoCheese;
use AbstractFactory\Ingredient\Clams\Clams;
use AbstractFactory\Ingredient\Clams\FreshClams;
use AbstractFactory\Ingredient\Dough\Dough;
use AbstractFactory\Ingredient\Dough\ThinCrustDough;
use AbstractFactory\Ingredient\Pepperoni\Pepperoni;
use AbstractFactory\Ingredient\Pepperoni\SlicedPepperoni;
use AbstractFactory\Ingredient\Sauce\MarinaraSauce;
use AbstractFactory\Ingredient\Sauce\Sauce;
use AbstractFactory\Ingredient\Veggies\Garlic;
use AbstractFactory\Ingredient\Veggies\Mushroom;
use AbstractFactory\Ingredient\Veggies\Onion;
use AbstractFactory\Ingredient\Veggies\RedPepper;

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): array
    {
        return [new Garlic(), new Onion(), new Mushroom(), new RedPepper()];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clams
    {
        return new FreshClams();
    }
}