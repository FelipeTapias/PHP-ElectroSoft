<?php 
    include("../DB/connection.php");
    $con = conectar();

    $text = "'¡Credenciales incorrectas!'";
    $userUser = $_POST['user'];
    $userClave = $_POST['password'];
    $sql = "SELECT * FROM usuario WHERE usuario = '$userUser'";

        $query = mysqli_query($con, $sql);
        if($query) {
            
            $filas = mysqli_fetch_assoc($query);
            $usuarioId = $filas['idUsuario'];
            
            if($userUser == $filas['usuario'] && $userClave == $filas['clave']) {

                Header("Location: ../Inicio-usuario.php?id=$usuarioId");
            }else {
                function consoleLog($text) {
                    echo '<script type="text/javascript">' .
                    'alert(' . $text . ');
                    window.location.href="../index.php";</script>';
                }
                consoleLog($text);
            }
        }
?>