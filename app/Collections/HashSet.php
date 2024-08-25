<?php

namespace App\Collections;

/**
 * @template TKey of array-key
 * @template T
 */
class HashSet
{
    /**
     * @var array<TKey, T>
     */
    private array $values;

    /**
     * @param TKey $key
     * @param T $value
     * @return void
     */
    public function set($key, $value) {
        $this->values[$key] = $value;
    }

    /**
     * @param TKey $key
     * @return T
     */
    public function get($key) {
        return $this->values[$key];
    }
}
