<?php

namespace App\Factories;

use App\Instruments\IGuitar;

/**
 * @template T of IGuitar
 */
interface IGuitarFactory
{
    /**
     * @return T
     */
    public function make();
}
