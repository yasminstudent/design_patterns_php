<?php

namespace DesignPattern\Behavioral\Discount;

use DesignPattern\Behavioral\Budget;

class DiscountPurchaseOverFiveHundred extends AbstractDiscount implements DiscountInterface
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->value >= 500) {
            return $budget->value * 0.2;
        }

        return !empty($this->nextDiscount) 
            ? $this->nextDiscount->calculateDiscount($budget) 
            : 0;
    }
}
