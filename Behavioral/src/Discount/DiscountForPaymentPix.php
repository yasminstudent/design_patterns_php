<?php

namespace DesignPattern\Behavioral\Discount;

use DesignPattern\Behavioral\Budget;
use DesignPattern\Behavioral\PaymentMethod\Enums\PaymentMethodEnum;

class DiscountForPaymentPix extends AbstractDiscount
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->paymentMethod->value === PaymentMethodEnum::PIX->value) {
            return $budget->value * 0.15;
        }

        return $this->nextDiscount->calculateDiscount($budget);
    }
}
