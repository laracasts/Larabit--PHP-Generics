<?php

namespace App\Factories;

use App\Instruments\IGuitar;

/**
 * @template T of IGuitar
 * @template-extends GuitarFactory<T>
 */
class ElectricGuitarFactory extends GuitarFactory
{
    private string $guitarType;

    /**
     * @param class-string<T> $guitarType
     */
    public function __construct(string $guitarType)
    {
        $this->guitarType = $guitarType;
    }

    public function make() : mixed
    {
        return new $this->guitarType;
    }
}
