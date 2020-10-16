<?php

/**
 * casos de usos de PDO
 * 1)Al conectarse con otros motores de bases de datos que no sean MySQL
 * 2) Al quere desacoplar/desgloraz/dividir el código
 * 
 */


// CONECTAR CON LA BASE DE DATOS
//BASADO EN LA CLASE PDO
$db = false;
try {
    $db = new PDO('mysql:host=localhost;dbname=ecommerce_ljv','root','');
    
}
catch(Exception $ex){
    die('Error al conectarse con la base de datos');
}




 /*
$db = mysqli_connect('localhost', 'root', '', 'ecommerce_ljv');

if(!$db) die('Error al conectarse con la base de datos'); */