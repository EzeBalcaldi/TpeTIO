<?php
function Connect(){
  return new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root', '');
}
function GetEquipos(){
    $db = Connect();
    $sentencia = $db->prepare( "select * from equipos");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}
function insertEquipos(){
  $s = 1;
  $ejemplo = "";
  $a = 25;
  $b = 40;
  $nombreEquipo = $_POST[$ejemplo];
  var_dump($nombreEquipo);
}

 $equipos = GetEquipos();
 var_dump($equipos);
  ?>
