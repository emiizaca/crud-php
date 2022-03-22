<?php

include("db.php");

if (isset($_POST['save_cliente'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    $query = "INSERT INTO cliente(nombre,apellido,email) VALUES ('$nombre', '$apellido', '$email')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query error");
    }

    $_SESSION['mensaje'] = 'Cliente guardado';

    header("Location: index.php");
}

?>