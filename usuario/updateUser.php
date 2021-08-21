<?php 
    include("../DB/connection.php");
    $con = conectar();

    $userId = $_POST['usuarioId'];
    $userName = $_POST['name'];
    $userLastname = $_POST['surname'];
    $userEmail = $_POST['email'];
    $userPhone = $_POST['phone'];
    $userUser = $_POST['user'];
    $userClave = $_POST['password'];
    $sql = "UPDATE usuario SET nombre='$userName', apellido='$userLastname', correo='$userEmail', 
                                telefono='$userPhone', usuario='$userUser', clave='$userClave' WHERE idUsuario = '$userId'";

        $query = mysqli_query($con, $sql);
        if($query) {
            Header("Location: ../Inicio-usuario.php?id=$userId");
        }
?>