<!DOCTYPE html>
<html>
<body>

<?php
    class Car {

        function __construct() {
            $this->model = "BMW";
        }

    }

    // create an object
    $fusca = new Car();

    // show object properties
    echo $fusca->model;
?>

</body>
</html>