<?php

namespace DesignPattern\Behavioral\Discount;

use DesignPattern\Behavioral\Budget;

interface DiscountInterface
{
    public function calculateDiscount(Budget $budget): float;
}
