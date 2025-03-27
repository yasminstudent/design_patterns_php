<?php

namespace DesignPattern\Behavioral\Tax;

use DesignPattern\Behavioral\Budget;

class ICMS implements TaxInterface
{
    public function calculateTax(Budget $budget): float
    {
        return $budget->value * 0.1;
    }
}
