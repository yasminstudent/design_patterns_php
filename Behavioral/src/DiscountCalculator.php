<?php

namespace DesignPattern\Behavioral;

use DesignPattern\Behavioral\Discount\DiscountMoreFiveItems;
use DesignPattern\Behavioral\Discount\DiscountPurchaseOverFiveHundred;

class DiscountCalculator
{
    public function executeCalculation(Budget $budget): float
    {

        //Criando uma cadeia de responsabilidade
        $discountPurchaseOverFiveHundred = new DiscountPurchaseOverFiveHundred();
        $discountPurchaseOverFiveHundred->setNextDiscount(new DiscountMoreFiveItems());

        return $discountPurchaseOverFiveHundred->calculateDiscount($budget);

        /*
            Fazendo dessa forma criamos um problema: Toda vez que precisarmos 
            adicionar um novo desconto, teremos que modificar esse método, o que 
            pode levar a erros (quebrando um código que já estava funcionando) 
            e violar o princípio Open-Closed Principle (Princípio Aberto-Fechado)
            do SOLID. 
        */
        // if ($budget->value >= 500) {
        //     return $budget->value * 0.2;
        // }

        // if ($budget->quantityItems > 5) {
        //     return $budget->value * 0.1;
        // }

        // return 0;
    }
}
