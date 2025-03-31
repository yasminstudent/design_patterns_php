# Design Patterns With PHP

Padrões de projeto são soluções genéricas para problemas recorrentes do desenvolvimento de software.

Existem três principais categorias de padrões de projeto:
* Comportamentais: Definem como os objetos interagem e se comunicam.
* Estruturais: Organizam a composição dos objetos para formar estruturas maiores.
* Criacionais: Controlam a criação de objetos, tornando-a mais flexível e eficiente.

## Comportamentais (Behavioral)

### Strategy  

O padrão Strategy é um modelo de design que permite criar várias formas de realizar uma mesma tarefa, organizando cada forma em uma classe separada. Ele é útil quando temos diferentes comportamentos que podem ser selecionados em tempo de execução com base em um parâmetro, facilitando a troca entre essas formas sem precisar alterar o código principal.  

#### Exemplo: Cálculo de Impostos  

Neste projeto, o padrão **Strategy** foi aplicado para o cálculo de impostos. A implementação segue a estrutura:  

- Uma [**interface**](https://github.com/yasminstudent/design_patterns/tree/main/Behavioral/src/Tax/TaxInterface.php) que define o contrato para os cálculos.  
- Diferentes [**estratégias**](https://github.com/yasminstudent/design_patterns/tree/main/Behavioral/src/Tax) concretas, onde cada classe implementa a interface e define seu próprio cálculo de imposto.  
- Um [**contexto**](https://github.com/yasminstudent/design_patterns/tree/main/Behavioral/src/TaxCalculator.php) (como uma calculadora de impostos) que recebe uma estratégia e executa o cálculo correspondente.  


Para saber mais sobre strategy:
* [refactoring.guru](https://refactoring.guru/design-patterns/strategy)
* olhar no seu caderno de estudos (capa: Hello my Love)

### Chain of Responsibility

O padrão **Chain of Responsibility** é um padrão que permite passar uma solicitação por uma cadeia de manipuladores. Cada manipulador decide se processa a solicitação ou a encaminha para o próximo da cadeia. Isso evita estruturas condicionais complexas e torna o código mais flexível.  

#### Exemplo: Calculando Descontos

Neste projeto, o **Chain of Responsibility** foi aplicado para calcular descontos. A lógica funciona criando uma sequência de verificações:  

Se um tipo de desconto não se aplica, o cálculo é passado para o próximo na cadeia. Isso permite adicionar ou modificar regras de desconto sem alterar a estrutura principal do código.

O código segue a seguinte estrutura:

- Uma [**classe abstrata**](https://github.com/yasminstudent/design_patterns_php/blob/main/Behavioral/src/Discount/AbstractDiscount.php) que armazena a referência para o próximo desconto na cadeia.  
- As [**classes concretas**](http://github.com/yasminstudent/design_patterns_php/tree/main/Behavioral/src/Discount) implementam suas próprias regras de desconto, verificam se a condição se aplica e, caso contrário, repassam a solicitação para o próximo desconto.  
- Uma [**calculadora de descontos**](https://github.com/yasminstudent/design_patterns_php/blob/main/Behavioral/src/DiscountCalculator.php#L12) que inicializa e executa a cadeia de descontos.  

Para saber mais sobre Chain of Responsibility:
* [refactoring.guru](https://refactoring.guru/design-patterns/chain-of-responsibility)
* olhar no seu caderno de estudos (capa: Hello my Love)

---
## O que aprendemos:
Como diminuir a complexidade do nosso código, trocando múltiplas condicionais por classes (esta técnica é chamada de [**Strategy**](https://github.com/yasminstudent/design_patterns?tab=readme-ov-file#strategy)).

Sempre que uma nova funcionalidade dever ser implementada, o ideal é que possamos criar código novo e editar o mínimo possível de código já existente. Este é um dos principais pontos do princípio Aberto-Fechado (Open-Closed Principle) do SOLID. Ao editar código existente, podemos acabar quebrando funcionalidades já implementadas e funcionais.