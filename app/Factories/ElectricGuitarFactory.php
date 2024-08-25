<?php

namespace App\Factories;

class ElectricGuitarFactory extends GuitarFactory
{
    private string $guitarType;

    public function __construct(string $guitarType)
    {
        $this->guitarType = $guitarType;
    }

    public function make() : mixed
    {
        return new $this->guitarType;
    }
}
