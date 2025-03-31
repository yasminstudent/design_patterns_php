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




---
## O que aprendemos:
Como diminuir a complexidade do nosso código, trocando múltiplas condicionais por classes (esta técnica é chamada de [**Strategy**](https://github.com/yasminstudent/design_patterns?tab=readme-ov-file#strategy)).

Sempre que uma nova funcionalidade dever ser implementada, o ideal é que possamos criar código novo e editar o mínimo possível de código já existente. Este é um dos principais pontos do princípio Aberto-Fechado (Open-Closed Principle) do SOLID. Ao editar código existente, podemos acabar quebrando funcionalidades já implementadas e funcionais.