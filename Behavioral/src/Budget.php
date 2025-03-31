<?php

namespace DesignPattern\Behavioral;

use DesignPattern\Behavioral\PaymentMethod\Enums\PaymentMethodEnum;

class Budget
{
    //Deixamos público para focar nos padrões de projeto, mas isso não é uma boa prática
    public float $value;
    public int $quantityItems;
    public PaymentMethodEnum $paymentMethod;
}
