<?php

namespace DesignPattern\Behavioral\Tax;

use DesignPattern\Behavioral\Budget;

class XTLG extends TaxWithTwoRates
{
    protected function maximumRateMustBeApplied(Budget $budget): bool
    {
        return $budget->value > 500;
    }

    protected function calculateMaximumTaxRate(float $value): float
    {
        return $value * 0.03;
    }

    protected function calculateMinimumTaxRate(float $value): float
    {
        return $value * 0.02;
    }
}
