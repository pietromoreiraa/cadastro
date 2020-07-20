<?php
include ("db.php");

if(isset($_POST['save'])){
    $marca = $_POST['marca'];
    $sabor = $_POST['sabor'];
    $peso = $_POST['peso'];

    $query = "INSERT INTO salgadinho(marca, sabor, peso) VALUES ('$marca', '$sabor', '$peso')";
    $result = mysqli_query($conn, $query);

    if(!$result) {
        die("Querry fails");
    }

        $_SESSION['msg'] = 'Salgadinho adicionado!';
        $_SESSION['msg_type'] = 'success';

        header("Location: cadastro.php");

}