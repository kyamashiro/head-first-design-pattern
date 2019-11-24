<?php


class SimplePizzaFactory
{
    /**
     * @param string $type
     * @return Pizza
     */
    public function createPizza(string $type): Pizza
    {
        if ($type === 'チーズ') {
            $pizza = new CheesePizza();
        } elseif ($type === 'ペパロニ') {
            $pizza = new PepperoniPizza();
        } elseif ($type === 'クラム') {
            $pizza = new ClamPizza();
        } elseif ($type === '野菜') {
            $pizza = new VeggiPizza();
        }
        return $pizza;
    }
}