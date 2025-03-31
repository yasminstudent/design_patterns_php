<?php

namespace DesignPattern\Behavioral\Discount;

use DesignPattern\Behavioral\Budget;

class DiscountPurchaseOverFiveHundred extends AbstractDiscount
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->value >= 500) {
            return $budget->value * 0.2;
        }

        return $this->nextDiscount->calculateDiscount($budget);
    }
}
