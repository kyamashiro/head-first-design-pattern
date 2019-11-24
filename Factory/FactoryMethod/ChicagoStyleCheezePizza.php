<?php


namespace FactoryMethod;


class ChicagoStyleCheezePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'シカゴスタイルのディープディッシュチーズピザ';
        $this->dough = '極厚クラスト生地';
        $this->sauce = 'プラムトマトソース';
        $this->toppings[] = '刻んだモッツァレラチーズ';
    }

    public function cut(): void
    {
        echo "ピザを四角形に切り分ける\n";
    }
}