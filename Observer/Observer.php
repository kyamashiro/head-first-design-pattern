<?php

namespace Observer;

interface Observer
{
    // 3つの引数は状態が変化した際にオブザーバがサブジェクトから取得する値
    public function update(float $temperature, float $humidity, float $pressure): void;
}