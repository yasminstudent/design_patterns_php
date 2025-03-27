<?php

namespace DesignPattern\Behavioral;

use DesignPattern\Behavioral\Budget;
use DesignPattern\Behavioral\Tax\TaxInterface;

class TaxCalculator
{
    public function executeCalculation(Budget $budget, TaxInterface $tax)
    {
        return $tax->calculateTax($budget);

        /*
            Fazendo dessa forma criamos um problema: Toda vez que precisarmos 
            adicionar um novo imposto, teremos que modificar esse método, o que 
            pode levar a erros (quebrando um código que já estava funcionando) 
            e violar o princípio Open-Closed Principle (Princípio Aberto-Fechado)
            do SOLID.    
        
            Além do fato de que os impostos poderiam ter regras de negócio, 
            podendo deixar essa classe muito grande.
        */
        // switch ($taxName) {
        //     case 'ICMS':
        //         return $budget->value * 0.1;
        //     case 'ISS':
        //         return $budget->value * 0.06;
        // }
    }
}
