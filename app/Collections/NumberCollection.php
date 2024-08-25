<?php

namespace App\Collections;

class NumberCollection
{
    private array $items = [];

    public function add(int|float $item): void {
        $this->items[] = $item;
    }

    public function all(): array {
        return $this->items;
    }
}
