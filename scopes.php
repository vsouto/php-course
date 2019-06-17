<!DOCTYPE html>
<html>
<body>

<?php
//        $minha_primeira_variavel = 'meu texto';
//
//        var_dump($minha_primeira_variavel);
?>

<?php
    $x = 5; // variavel definida em escopo global

    // Função simples myTest, para tentar imprimir o conteudo da variavel X
    function myTest( $x ) {

        $x = $x + 4;

        // O PHP me dá um erro fatal, pois a variavel X não vai ser acessível dentro do escopo da função myTest.
        // O que temos que fazer no caso, é passar a variavel por parametro, dessa forma
        // Portanto agora o erro que ele me dá é: Ao chamar a função myTest, você agora deve passar o parametro x.
        echo "<p>o valor da variavel x dentro da funcao é: $x</p>";
    }


    // Então aqui é que a função está sendo realmente chamada.
    // Se não tivesse essa chamada, a função seria apenas declarada, mas nunca executada.
    // Vamos então passar o valor de x para dentro da função.
    myTest( $x );

    // Digamos agora que eu queira incrementar o valor de X, dentro da função myTest.
    // Dessa forma, a impressão do valor da variavel X vai mudar apenas dentro da função.
    // Pois x dentro da função myTest é uma variavel.
    // Do lado de fora da função ela é outra variavel.

    echo "<p>o valor da variavel, do lado de fora da funcao é: $x</p>";
?>

<?php
//    function myTest() {
//        $x = 5; // local scope
//        echo "<p>Variable x inside function is: $x</p>";
//    }
//    myTest();
//
//    // using x outside the function will generate an error
//    echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>