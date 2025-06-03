<?php

namespace DesignPattern\Behavioral\Tax;

use DesignPattern\Behavioral\Budget;

class YSL extends TaxWithTwoRates
{
    protected function maximumRateMustBeApplied(Budget $budget): bool
    {
        return $budget->value > 300 && $budget->quantityItems > 3;
    }

    protected function calculateMaximumTaxRate(float $value): float
    {
        return $value * 0.04;
    }

    protected function calculateMinimumTaxRate(float $value): float
    {
        return $value * 0.025;
    }
}
