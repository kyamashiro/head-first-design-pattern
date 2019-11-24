<?php

namespace AbstractFactory;

use AbstractFactory\Ingredient\Cheese\Cheese;
use AbstractFactory\Ingredient\Clams\Clams;
use AbstractFactory\Ingredient\Dough\Dough;
use AbstractFactory\Ingredient\Pepperoni\Pepperoni;
use AbstractFactory\Ingredient\Sauce\Sauce;
use AbstractFactory\Ingredient\Veggies\Veggies;

abstract class Pizza
{
    protected string $name;
    protected Dough $dough;
    protected Sauce $sauce;
    protected Cheese $cheese;
    protected Pepperoni $pepperoni;
    protected Clams $clam;
    /** @var Veggies[] */
    protected array $veggies;

    abstract public function prepare(): void;

    public function bake(): void
    {
        echo "350度で25分間焼く\n";
    }

    public function cut(): void
    {
        echo "ピザを扇形に切り分ける\n";
    }

    public function box(): void
    {
        echo "PizzaStoreの正式な箱にピザを入れる\n";
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}