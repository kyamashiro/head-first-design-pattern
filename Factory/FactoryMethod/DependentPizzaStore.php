<?php


namespace FactoryMethod;


class DependentPizzaStore
{
    public function createPizza(string $style, string $type): Pizza
    {
        if ($style === 'ニューヨーク') {
            if ($type === 'チーズ') {
                $pizza = new NYStyleCheesePizza();
            } elseif ($type === 'ペパロニ') {
                $pizza = new NYStylePepperoniPizza();
            } elseif ($type === 'クラム') {
                $pizza = new NYStyleClamPizza();
            } elseif ($type === '野菜') {
                $pizza = new NYStyleVeggiPizza();
            }
        } elseif ($style === 'シカゴ') {
            if ($type === 'チーズ') {
                $pizza = new ChicagoStyleCheesePizza();
            } elseif ($type === 'ペパロニ') {
                $pizza = new ChicagoStylePepperoniPizza();
            } elseif ($type === 'クラム') {
                $pizza = new ChicagoStyleClamPizza();
            } elseif ($type === '野菜') {
                $pizza = new ChicagoStyleVeggiPizza();
            }
        } else {
            throw new \Exception('エラー無効なピザの種類');
        }

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }
}