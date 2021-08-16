<?php 
function conectar() {

    //Variable environments
    $host = "localhost";
    $user = "root";
    $password = "";
    $bd = "electrorecicla";

    //Metodo de conexión con los parametros necesarios.
    $con = mysqli_connect($host, $user, $password);

    //Seleccionamos la base de datos a utilizar.
    mysqli_select_db($con, $bd);

    //Retornas la conexión.
    return $con;

}
?>