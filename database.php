<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "php-course";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Connected successfully";

    // MYSQL Select statement
    $sql = "SELECT * FROM users";
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

    $conn->close();

?>