<?php


namespace FactoryMethod;

abstract class Pizza
{
    protected string $name;
    protected string $dough;
    protected string $sauce;
    protected array $toppings;

    public function prepare(): void
    {
        echo "{$this->name}を下処理\n";
        echo "{$this->dough}をこねる･･･\n";
        echo "{$this->sauce}を追加･･･\n";
        echo "トッピングを追加:\n";
        foreach ($this->toppings as $topping) {
            echo "{$topping}\n";
        }
    }

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

    public function getName(): string
    {
        return $this->name;
    }
}