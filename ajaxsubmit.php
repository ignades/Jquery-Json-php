<?php
$connection = mysql_connect("localhost", "root", "Ignazio01!"); // Establishing Connection with Server..
$db = mysql_select_db("formulario", $connection); // Selecting Database
//Fetching Values from URL
 $nombre=$_POST['nombre'];
 $apellido=$_POST['apellido'];
 $nc=$_POST['nc'];
//Insert query
$query = mysql_query("insert into clientes(nombre, apellido, nc) values ('$nombre', '$apellido', '$nc')");
 

mysql_close($connection); // Connection Closed
?>