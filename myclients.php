<?php

/*
$connection = mysql_connect("localhost", "root", "password"); // Establishing Connection with Server..
$db = mysql_select_db("formulario", $connection); // Selecting Database
//etraggo le singole categories`
$sqlcat="SELECT * FROM `clientes`  WHERE 1  order by id ASC";
$result=mysql_query($sqlcat);
 
$arraynames=array();
while ($data = mysql_fetch_assoc($result)) 
{
$arraynames[]=$data;
}
// print_r($arraynames);
 header('Content-Type: application/json');
$res = json_encode($arraynames);

echo $res;
*/
$connection = mysql_connect("localhost", "root", "Ignazio01!"); // Establishing Connection with Server..
$db = mysql_select_db("formulario", $connection); // Selecting Database
//etraggo le singole categories`
$sqlcat="SELECT * FROM formulario.clientes
inner join formulario.articulos on formulario.articulos.id = formulario.clientes.id 
;";
$result=mysql_query($sqlcat);
 
$todos=array();

while ($row = mysql_fetch_array($result)) 
{

   // $row_array['id'] = $row['id'];
    $array_01["justIn"][]['nombre']= $row['nombre'];
   // $row_array['apellido'] = $row['apellido'];
  //  $row_array['nc'] = $row['nc'];
    $array_02["Articulos"][]['name_article'] = $row['txt'];


$todos = array($array_01,$array_02);
  
}


$res =  json_encode($todos);
echo $res;

?>

