<?php

namespace DesignPattern\Behavioral\Discount;

use DesignPattern\Behavioral\Budget;

class DiscountMoreFiveItems extends AbstractDiscount implements DiscountInterface
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->quantityItems > 5) {
            return $budget->value * 0.1;
        }

        return !empty($this->nextDiscount) 
            ? $this->nextDiscount->calculateDiscount($budget) 
            : 0;
    }
}
