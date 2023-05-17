<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Recepción de los datos enviados mediante POST desde el JS   

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$institucion = (isset($_POST['institucion'])) ? $_POST['institucion'] : '';
$edad = (isset($_POST['edad'])) ? $_POST['edad'] : '';
$nivel = (isset($_POST['nivel'])) ? $_POST['nivel'] : '';
$carrera = (isset($_POST['carrera'])) ? $_POST['carrera'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO estudiantes (nombre, institucion, edad, nivel, carrera) VALUES('$nombre', '$institucion', '$edad', '$nivel', '$carrera') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, nombre, institucion, edad, nivel, carrera FROM estudiantes ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE estudiantes SET nombre='$nombre', institucion='$institucion', edad='$edad', nivel='$nivel', carrera='$carrera' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id, nombre, institucion, edad, nivel, carrera FROM estudiantes WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM estudiantes WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
