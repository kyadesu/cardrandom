<?php
namespace App\Service;

interface CardInterface
{
    public function getColor() : string;

    public function getValue(): int;

    public function getName(): string;
}