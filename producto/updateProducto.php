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

    function consoleLog($text) {
        echo '<script type="text/javascript">' .
        'alert(' . $text . ');
        window.location.href="../index.php";</script>';
        Header("Location: ../Inicio-usuario.php");
    }



        $query = mysqli_query($con, $sql);
        if($query) {
            consoleLog($text);
        }
?>