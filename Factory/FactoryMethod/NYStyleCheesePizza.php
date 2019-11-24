<?php


namespace FactoryMethod;


class NYStyleCheesePizza extends Pizza
{
    /**
     * NYStyleCheesePizza constructor.
     */
    public function __construct()
    {
        $this->name = 'ニューヨークスタイルのソース&チーズピザ';
        $this->dough = '薄いクラスト生地';
        $this->sauce = 'マリナラソース';
        $this->toppings[] = '粉レッジャーノチーズ';
    }
}