<?php

    require_once "conexion.php";

    $usuario = $_POST['email'];
    $pass=  $_POST['pass'];

    ejecutarConsulta($usuario, $pass);


?>