<?php

namespace AbstractFactory;

class NYPizzaStore extends PizzaStore
{
    /**
     * Pizzaのインスタンスを作成するファクトリメソッド
     * 抽象メソッドなので、サブクラスでオブジェクト作成の実装をする
     * cratePizzaメソッドの振る舞いの定義はサブクラスに任せる
     * @param PizzaType $type
     * @return Pizza
     */
    protected function createPizza(PizzaType $type): Pizza
    {
        $ingredientFactory = new NYPizzaIngredientFactory();

        if ($type->equals(PizzaType::CHEEZE())) {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('ニューヨークスタイルチーズピザ');
        }

        return $pizza;
    }
}