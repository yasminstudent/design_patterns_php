<?php

namespace DesignPattern\Behavioral\Discount;

use DesignPattern\Behavioral\Budget;

abstract class AbstractDiscount
{
    protected ?AbstractDiscount $nextDiscount;

    public function __construct(?AbstractDiscount $nextDiscount = new NoDiscount()) {
        $this->nextDiscount = $nextDiscount;
    }

    abstract public function calculateDiscount(Budget $budget): float;
}
