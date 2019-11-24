<?php

namespace AbstractFactory;

class CheesePizza extends Pizza
{
    private PizzaIngredientFactory $ingredientFactory;

    /**
     * CheesePizza constructor.
     * @param PizzaIngredientFactory $IngredientFactory
     */
    public function __construct(PizzaIngredientFactory $IngredientFactory)
    {
        $this->ingredientFactory = $IngredientFactory;
    }

    public function prepare(): void
    {
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->veggies = $this->ingredientFactory->createVeggies();

        echo "{$this->name}を下処理\n";
        echo "{$this->dough->getName()}をこねる･･･\n";
        echo "{$this->sauce->getName()}を追加･･･\n";
        echo "トッピングを追加:\n";
        foreach ($this->veggies as $veggy) {
            echo "{$veggy->getName()}\n";
        }
    }
}