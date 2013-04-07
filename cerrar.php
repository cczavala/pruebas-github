<?php
  session_start();
  include_once('funciones.php');
  $base = conecta_mysql();
  $id_usuario = $_SESSION['id_usuario'];
  $ses = "update usuarios set sesion=0 where id=$id_usuario";        
  $sesi = mysql_query($ses,$base);
  session_unset();
  $_SESSION = array();
  session_destroy();
  header("Location:index.php"); //envío al usuario a la pag. de autenticación
?>