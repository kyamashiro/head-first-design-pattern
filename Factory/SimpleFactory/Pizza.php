<?php


class Pizza
{
    public function orderPizza(string $type): Pizza
    {
        // 変動しやすい要素
        if ($type === 'チーズ') {
            $pizza = new CheesePizza();
        } elseif ($type === 'ペパロニ') {
            $pizza = new PepperoniPizza();
        } elseif ($type === 'クラム') {
            $pizza = new ClamPizza();
        } elseif ($type === '野菜') {
            $pizza = new VeggiPizza();
        }

        // 変動しにくい要素
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }
}