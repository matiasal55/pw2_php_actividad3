<?php

require_once './Ejercicio6/NombreCompleto.php';

if($_POST!==[] && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['sexo']) && $_POST['nombre'] && $_POST['apellido'] && $_POST['sexo']){
    $ejercicio=new NombreCompleto($_POST['nombre'],$_POST['apellido'],$_POST['sexo']);
    $formal=$ejercicio->saludoFormal();
    $informal=$ejercicio->saludoInformal();
    echo "Saludo formal: $formal<br>";
    echo "Saludo informal: $informal";
}