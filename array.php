<!DOCTYPE html>
<html>
<body>

<?php

    // Este é um Array.
    // Ele nada mais é que uma coleção de itens. Pode ser uma coleção de numeros, de strings, de objetos, ou até de outros arrays.

    // Este aqui é um simples array de strings (palavras)
    // e no PHP pode ser escrito assim tambem:
    $cars = ['santana', 'apollo', 'corsa'];

    //var_dump($cars);


    // Eu posso manipular esse array de varias formas, e isso na verdade é uma das tarefas que mais se faz nas linguagens
    // de programação "server-side", pois as coleções vem geralmente das consultas da database, e a gente tem que manipular
    // essas coleções para poder apresentá-las ao usuário já formatadas.

    // Então por exemplo, eu quero adicionar um carro na lista:
    $cars[] = 'fusca';


    // Ou então posso remover a qualquer momento um valor do array, se eu souber a posição do item que quero remover.
    // Por exemplo, como eu sei que o santana é o 1º item, basta eu usar o 'index' 0, que é a primeira posição do array:

    //$cars[0] = 'removido';

    // No caso eu apenas escrevi outra string "removido" no lugar do santana.
    // Mas existem inumeras funções para arrays que nos permite manipulá-los, e realmente remover itens.

    // Com a função unset() podemos remover um valor do array

    unset($cars[0]);

    // Então perceba que removi a chave 0 do array cars, que era o carro Santana. Ficou sem ele no final.

    //var_dump($cars);


    // um array vazio
    var_dump( [] );

?>

</body>
</html>