# FACTORY METHOD

## Explicação do código

**Digamos que temos uma aplicação onde a implementação de uma determinada caixa de diálogo seja em desktop.**
**Será criada uma classe Button para ser renderizado na tela.**
**Agora, digamos que precisamos adicionar mais um tipo de caixa de diálogo, que será toda em web.**
**Precisamos de algo que, facilmente, indicando o tipo de caixa de diálogo que queremos ter, a implementação seja toda diferente, sem ter que mexer muito no código**
**Para não enchermos o código de if-else e gambiarras, o padrão factory method resolve esse problema.**
**É criada uma classe abstrata chamada Dialog que repassa a criação do botão (função createButton) para os tipos específicos criarem (já que não será somente mais um tipo) e que terá 'abstratamente' a lógica de criação da caixa de diálogo (método render)**
**As duas 'factories' agora são 'WindowsDialog' e 'HTMLDialog', que farão, de suas formas, a criação desses botões (e de quaisque outros elementos, como uma caixa de texto, por exemplo).**
**Por fim, temos os dois tipos de botões, HTMLButton e WindowsButton, que implementarão a interface Button (garantindo a implementação de todos os métodos que um botão deve ter)**
**Assim, na index, passamos apenas o tipo da caixa de diálogo e ela é criada da forma correta.**

**tente adicionar um os novo e veja como fica fácil. vocÊ apenas irá criar uma pasta dentro de os, chamada linux, com seus respectivos dialog e button, e inserir no match dentro da index.php (importando lá também)**




