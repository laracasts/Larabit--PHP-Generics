<?php

namespace App\Collections;

class Collection
{
    private array $items = [];

    public function add($item): void {
        $this->items[] = $item;
    }

    public function all(): array {
        return $this->items;
    }
}
