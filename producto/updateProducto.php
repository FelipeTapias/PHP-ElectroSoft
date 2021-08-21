<?php 
    include("../DB/connection.php");
    $con = conectar();

    $text = "'¡Producto modificado correctamente!'";
    $productId = $_POST['productoId'];
    $productName = $_POST['name'];
    $productType = $_POST['type'];
    $produtcDescription = $_POST['description'];
    $sql = "UPDATE producto SET nombre='$productName', tipo='$productType', descripcion='$produtcDescription'
                    WHERE idProducto = '$productId'";
    
    $query = mysqli_query($con, $sql);
    if($query) {
        Header("Location: ../Inicio-usuario.php");
    }
?>