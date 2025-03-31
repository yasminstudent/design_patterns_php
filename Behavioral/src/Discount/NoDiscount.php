<?php

namespace DesignPattern\Behavioral\Discount;

use DesignPattern\Behavioral\Budget;

class NoDiscount extends AbstractDiscount
{
    public function __construct() {
        parent::__construct(null);
    }

    public function calculateDiscount(Budget $budget): float
    {
        return 0;
    }
}