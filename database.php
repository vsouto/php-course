<?php

    // Uso essas variáveis então pra definir as credenciais da database
    // aqui digo o servidor que vou acessar
    $servername = "localhost";

    // Qual o username que acessa o banco
    $username = "root";
    $password = "";

    // e a database que eu quero, dentro do servidor mysql localhost
    $db = "php-course";

    // Create connection
    // Com essa função nativa do PHP mysqli, a gente abre uma conexão com o banco, passando as credenciais que definimos
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    // Aqui estamos apenas verificando se deu algum erro na conexão
    // Se não der erro nenhum, segue .
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Connected successfully";

    // MYSQL Select statement
    // Aqui colocamos dentro de uma variavel, o Statement mysql, ou seja, a instrução de consulta, na linguagem que a database entende.
    // Mais pra frente vamos entender melhor a linguagem mysql, usando funções como UPDATE, DELETE, etc.. Ou mesmo lendo de multiplas
    // tabelas ao mesmo tempo.

    // Então aqui a instrução é: Selecione todos ( * ) os itens da tabela user.
    $sql = "SELECT * FROM users";

    // E com a função nativa query, dentro do objeto de conexão, ele vai fazer a consulta.
    $result = $conn->query($sql);

    // Got results?
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            var_dump($row);
            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    /*
    // Got results 2
    // Se a consulta tiver mais de 0 itens (rows no caso = linhas), vamos fazer um loop (usando o while aqui no caso)
    // Para imprimir uma por uma
    if ($result->num_rows > 0) {

        $meus_resultados_coerentes = [];

        $results = $result->fetch_assoc();

        // Aqui percorremos o array de resultados, entregando cada valor para $result
        // Se eu coloco um indice dessa forma, eu sei exatamente qual indice está sendo iterado, e posso usá-lo dentro do meu loop.
        foreach ( $results as $indice => $result ) {

            // Quero apenas o user de ID 2

            var_dump($result);

        }

    } else {
        echo "0 results";
    }

    $conn->close();
    var_dump($meus_resultados_coerentes);
    */

    // Uma forma mais elegante e avançada de fazermos esse if, seria usando Ternários. Fica assim:
    //$existe = $row['name'] == 'Vladmir'? true : false;

?>