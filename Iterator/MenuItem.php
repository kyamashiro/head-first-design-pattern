<?php


namespace Iterator;


class MenuItem
{
    private string $name;
    private string $description;
    private bool $vegetarian;
    private float $price;

    /**
     * MenuItem constructor.
     * @param string $name
     * @param string $description
     * @param bool $vegetarian
     * @param float $price
     */
    public function __construct(string $name, string $description, bool $vegetarian, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function isVegetarian(): bool
    {
        return $this->vegetarian;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}