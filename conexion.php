<?php
  $host_name = 'localhost';
  $database = 'db869295093';
  $user_name = 'dbo869295093';
  $password = 'Expediente*1';

  $link = new mysqli($host_name, $user_name, $password, $database);

  if ($link->connect_error) {
    die('<p>Error al conectar con servidor MySQL: '. $link->connect_error .'</p>');
  } else {
    echo '<p>Se ha establecido la conexión al servidor MySQL con éxito.</p>';
  }
?>