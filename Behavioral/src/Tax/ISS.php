<?php

namespace DesignPattern\Behavioral\Tax;

use DesignPattern\Behavioral\Budget;

class ISS implements TaxInterface
{
    public function calculateTax(Budget $budget): float
    {
        return $budget->value * 0.06;
    }
}
