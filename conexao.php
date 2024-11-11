<?php

    $servername = "localhost:3309";
    $username ="root";
    $password ="";
    $dbname ="informações";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn -> connect_error){

    echo "Erro conexão" . $conn -> connect_error;

}

?>