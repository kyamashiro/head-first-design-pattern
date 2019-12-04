<?php


class TurkeyAdapter implements Duck
{
    private Turkey $turkey;

    /**
     * TurkeyAdapter constructor.
     * @param $turkey
     */
    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack(): void
    {
        $this->turkey->gobble();
    }

    public function fly(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}