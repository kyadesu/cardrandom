<?php

namespace App\Service;

class Card implements CardInterface
{
    private $name;
    private $value;
    private $color;

    public function __construct(string $name, int $value, string $color)
    {
        $this->name = $name;
        $this->value = $value;
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }
}