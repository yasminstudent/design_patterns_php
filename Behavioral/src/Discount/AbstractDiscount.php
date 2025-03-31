<?php

namespace DesignPattern\Behavioral\Discount;

abstract class AbstractDiscount
{
    protected DiscountInterface $nextDiscount;

    public function setNextDiscount(DiscountInterface $nextDiscount)
    {
        $this->nextDiscount = $nextDiscount;
    }
}
