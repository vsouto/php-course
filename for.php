<!DOCTYPE html>
<html>
<body>

<?php

    // O For funciona de forma semelhante, mas é geralmente pra quando sabemos o limite do objeto ou array que temos.

    // Ao invés de 2, são 3 statements pra definir o for
    // O primeiro é a inicialização da variavel, no caso com valor 0
    // O segundo define até onde o loop vai, ou seja, vai iterar enquanto x for menor igual a 10
    // e o terceiro define de quanto em quanto o valor x vai ser incrementado. $x++ significa que está sendo incrementado 1
    for ($x = 0; $x <= 10; $x++) {

        echo "The number is: $x <br>";
    }
?>

</body>
</html>