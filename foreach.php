<!DOCTYPE html>
<html>
<body>

<?php

    // Uma definição mais elegante de arrays tambem seria assim:
    $colors = ["red", "green", "blue", "yellow"];

    // Então aqui estamos Iterando sobre cada valor do array.
    // O foreach transforma cada item de $colors em um $value, ou seja, SUBSTITUINDO a variavel $value a cada iteração.

    foreach ($colors as $value) {
        echo "$value <br>";
    }
?>

</body>
</html>