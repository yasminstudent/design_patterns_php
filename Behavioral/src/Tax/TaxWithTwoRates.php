<?php

namespace DesignPattern\Behavioral\Tax;

use DesignPattern\Behavioral\Budget;

abstract class TaxWithTwoRates implements TaxInterface
{
    public function calculateTax(Budget $budget): float
    {
        return $this->maximumRateMustBeApplied($budget)
            ? $this->calculateMaximumTaxRate($budget->value)
            : $this->calculateMinimumTaxRate($budget->value);
    } 

    abstract protected function maximumRateMustBeApplied(Budget $budget): bool;
    abstract protected function calculateMaximumTaxRate(float $value): float;
    abstract protected function calculateMinimumTaxRate(float $value): float;
}
