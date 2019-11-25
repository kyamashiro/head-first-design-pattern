<?php

namespace Singleton;

class ChocolateBoiler
{
    private static self $uniqueInstance;
    private bool $empty;
    private bool $boiled;

    /**
     * privateコンストラクタなのでインスタンス化できずgetInstance()メソッドを通してインスタンスを作成する
     * ChocolateBoiler constructor.
     */
    private function __construct()
    {
        $this->empty = true;
        $this->boiled = false;
    }

    public static function getInstance(): self
    {
        if (!isset(self::$uniqueInstance)) {
            self::$uniqueInstance = new self();
        }

        return self::$uniqueInstance;
    }

    public function fill(): void
    {
        if ($this->isEmpty()) {
            $this->empty = false;
            $this->boiled = false;
            echo "容器を満たす\n";
        } else {
            echo "容器は満タンです\n";
        }
    }

    private function isEmpty(): bool
    {
        return $this->empty;
    }

    public function drain(): void
    {
        if (!$this->isEmpty() && $this->isBoiled()) {
            $this->empty = true;
            echo "空にする\n";
        } else {
            echo "容器が空か未沸騰です\n";
        }
    }

    private function isBoiled(): bool
    {
        return $this->boiled;
    }

    public function boil(): void
    {
        if (!$this->isEmpty() && !$this->isBoiled()) {
            $this->boiled = true;
            echo "沸騰させる\n";
        } else {
            echo "容器が空か沸騰済みです\n";
        }
    }
}