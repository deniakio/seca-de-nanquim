<?php

$server = "localhost";
$user = "id10859370_adm";
$pass = "morracereda";
$db = "id10859370_sdn";

$conn = new mysqli($server, $user, $pass, $db);

if($conn == TRUE){
    mysqli_query($conn, "SET NAMES 'utf8'");
}
else{
    echo "Conexão falhou. Tente novamente.";
}

?>