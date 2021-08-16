<?php 
    include("../DB/connection.php");
    $con = conectar();

    $userName = $_POST['name'];
    $userLastname = $_POST['surname'];
    $userEmail = $_POST['email'];
    $userPhone = $_POST['phone'];
    $userUser = $_POST['user'];
    $userClave = $_POST['password'];
    $sql = "INSERT INTO usuario(nombre, apellido, correo, telefono, usuario, clave) 
                VALUES('$userName', '$userLastname ', '$userEmail', '$userPhone', '$userUser', '$userClave')";

        $query = mysqli_query($con, $sql);
        if($query) {
            Header("Location: ../Inicio-usuario.php");
        }
?>