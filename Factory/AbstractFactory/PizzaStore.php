<?php

namespace AbstractFactory;

abstract class PizzaStore
{
    public function orderPizza(PizzaType $type): Pizza
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    /**
     * Pizzaのインスタンスを作成するファクトリメソッド
     * 抽象メソッドなので、サブクラスでオブジェクト作成の実装をする
     * cratePizzaメソッドの振る舞いの定義はサブクラスに任せる
     * @param PizzaType $type
     * @return Pizza
     */
    abstract protected function createPizza(PizzaType $type): Pizza;
}