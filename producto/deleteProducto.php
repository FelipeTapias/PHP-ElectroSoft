<?php 

    include("../DB/connection.php");
    $con = conectar();

    $id = (!empty ($_GET['id']) ) ? $_GET['id'] : NULL; 

    if($id) {
    $sql = "DELETE FROM producto WHERE idProducto = '$id'";
    $query = mysqli_query($con, $sql);

    if($query) {
        Header("Location: ../Inicio-usuario.php");
    }
    }
?>