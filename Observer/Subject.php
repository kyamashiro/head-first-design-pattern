<?php

namespace Observer;

interface Subject
{
    // オブザーバの登録
    public function registerObserver(Observer $observer): void;

    // オブザーバの削除
    public function removeObserver(Observer $observer): void;

    // サブジェクトの状態が変わったときにすべてのオブザーバに通知する
    public function notifyObservers(): void;
}