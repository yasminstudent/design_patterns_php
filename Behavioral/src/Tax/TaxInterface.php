<?php

namespace DesignPattern\Behavioral\Tax;

use DesignPattern\Behavioral\Budget;

interface TaxInterface
{
    public function calculateTax(Budget $budget): float;
}
