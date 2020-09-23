<?php
if($_POST!==[] && isset($_POST['lista_numeros']) && $_POST['lista_numeros']) {
    $numeros = str_replace(" ", "", $_POST['lista_numeros']);
    $lista=explode(",",$numeros);
    $ejercicio=new Ejercicio5();
    $resultado=$ejercicio->sumatoria($lista);
    echo "El resultado es $resultado";
}