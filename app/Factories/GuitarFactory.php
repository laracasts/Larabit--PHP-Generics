<?php

namespace App\Factories;

use App\Instruments\IGuitar;

/**
 * @template T of IGuitar
 * @template-implements IGuitarFactory<T>
 */
abstract class GuitarFactory implements IGuitarFactory
{
    abstract public function make();
}
