<?php

namespace DesignPattern\Behavioral;

use DesignPattern\Behavioral\Discount\DiscountForPaymentPix;
use DesignPattern\Behavioral\Discount\DiscountMoreFiveItems;
use DesignPattern\Behavioral\Discount\DiscountPurchaseOverFiveHundred;
use DesignPattern\Behavioral\PaymentMethod\Enums\PaymentMethodEnum;

class DiscountCalculator
{
    public function executeCalculation(Budget $budget): float
    {
        /*
            Criando uma cadeia de responsabilidade:
            se não aplica um desconto, tenta o próximo, se não, tenta o próximo
            e assim por diante
        */
        $discountChain = new DiscountPurchaseOverFiveHundred(
            new DiscountForPaymentPix(
                new DiscountMoreFiveItems()
            )
        );

        return $discountChain->calculateDiscount($budget);
    }

    public function executeCalculationOld(Budget $budget): float
    {
         /*
            Fazendo dessa forma criamos um problema: Toda vez que precisarmos 
            adicionar um novo desconto, teremos que modificar esse método, o que 
            pode levar a erros (quebrando um código que já estava funcionando) 
            e violar o princípio Open-Closed Principle (Princípio Aberto-Fechado)
            do SOLID. 
        */
        if ($budget->value >= 500) {
            return $budget->value * 0.2;
        }

        if ($budget->paymentMethod->value === PaymentMethodEnum::PIX->value) {
            return $budget->value * 0.15;
        }

        if ($budget->quantityItems > 5) {
            return $budget->value * 0.1;
        }

        return 0;
    }
}
