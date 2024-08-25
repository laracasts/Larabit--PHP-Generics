<?php

namespace App\Instruments;

class FlyingVGuitar implements IGuitar
{
    public function getName(): string
    {
        return 'Gibson Flying V';
    }
}
