<?php

namespace App\Instruments;

use App\Instruments\IViolin;

class ExpensiveViolin implements IViolin
{

    public function getName(): string
    {
        return 'Expensive Violin';
    }
}
