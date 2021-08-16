<?php 
    include("../DB/connection.php");
    $con = conectar();

    $productName = $_POST['name'];
    $productType = $_POST['type'];
    $produtcDescription = $_POST['description'];
    $sql = "INSERT INTO producto(idUsuario, nombre, tipo, descripcion) 
                VALUES(2,'$productName', '$productType', '$produtcDescription')";

        $query = mysqli_query($con, $sql);
        if($query) {
            Header("Location: ../Inicio-usuario.php");
        }
?>