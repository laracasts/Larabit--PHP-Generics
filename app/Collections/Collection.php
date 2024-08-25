<?php

namespace App\Collections;

/**
 * @template T
 */
class Collection
{
    /**
     * @var T[]
     */
    private array $items = [];

    /**
     * @param T $item
     * @return void
     */
    public function add($item): void {
        $this->items[] = $item;
    }

    /**
     * @return T[]
     */
    public function all(): array {
        return $this->items;
    }
}
