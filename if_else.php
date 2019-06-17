<!DOCTYPE html>
<html>
<body>

<?php
    // Mas se eu defino minha variavel como um BOOLEAN
    // Continua não sendo true a comparação, pois está comparando o numero 1 com o tipo booleano TRUE, o que é falso.
    $minha_nova_variavel = TRUE;

    // Vamos ver condicionais agora, mais conhecidos como IF ELSE (se e senão)

    // Aqui pegamos o tempo neste momento, do servidor PHP (minha maquina), mas apenas a Hora (H)
    $tempo_neste_momento = date("H");

    // Meu servidor então está com a hora errada :)
    echo "a hora neste momento é: " . $tempo_neste_momento;

    // Em seguida vamos ver se a hora é menor que 10 da manha para dizer bom dia, ou se é de 10 as 20horas para
    // dizer boa tarde! ou se é maior que 20horas, para dizer boa noite!


    // Vamos colocar 12 (meio dia) né

    // Se a Hora é menor que 12, entra neste bloco
    if ( $tempo_neste_momento < "12") {
        echo "Tenha um bom dia!<br>";

    // Se a Hora for menor que 20, entra neste bloco
    } elseif ($tempo_neste_momento < "20") {

        // Então perceba que, pelo valor da Hora ser 16, ele entrou e executou tudo que está neste bloco.
        echo "Tenha uma boa tarde!<br>";

    // Se nenhuma das condições acima foram satisfeitas, entra automaticamente no ELSE (se não)
    } else {

        echo "Tenha uma boa noite!<br>";
    }

    // Neste momento minha variavel pode ser sim considerada como true, pois ela possui conteudo.
    // Uma unica letra, pode considerar uma variavel como verdadeira.
    // Se eu quiser realmente verificar se ela é TRUE ou FALSE, eu devo seguir à risca a sintaxe de comparação por tipos,
    // que são 3 iguais ===

    // Uma outra forma de verificar se a variavel é true, é só colocar ela mesma

    // E posso verificar diretamente se ela é false, com o sinal !
    if ( !$minha_nova_variavel ) {

        echo 'variavel falsa!!<br>';
    }
    else {
        echo 'minha variavel é true!<br>';
    }
?>

</body>
</html>