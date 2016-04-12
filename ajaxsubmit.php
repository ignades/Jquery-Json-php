<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<?php
$connection = mysql_connect("localhost", "root", "password"); // Establishing Connection with Server..
$db = mysql_select_db("formulario", $connection); // Selecting Database
//Fetching Values from URL
 $nombre=$_POST['nombre'];
 $apellido=$_POST['apellido'];
 $nc=$_POST['nc'];
//Insert query
$query = mysql_query("insert into clientes(nombre, apellido, nc) values ('$nombre', '$apellido', '$nc')");
 

mysql_close($connection); // Connection Closed
?>
>>>>>>> f9428754c9311b9767869e890ede730800c9237f
=======
<?php
$connection = mysql_connect("localhost", "root", "password"); // Establishing Connection with Server..
$db = mysql_select_db("formulario", $connection); // Selecting Database
//Fetching Values from URL
 $nombre=$_POST['nombre'];
 $apellido=$_POST['apellido'];
 $nc=$_POST['nc'];
//Insert query
$query = mysql_query("insert into clientes(nombre, apellido, nc) values ('$nombre', '$apellido', '$nc')");
 

mysql_close($connection); // Connection Closed
?>
>>>>>>> ec644fa0cd372c10d798ce5492e7014a04878181
