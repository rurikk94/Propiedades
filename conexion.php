<?php

require_once("mysql.php"); //Get MYSQL Connection Info

$conexion=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db) or
    die("Problemas con la conexión");
?>