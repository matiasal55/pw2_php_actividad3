<?php
if($_POST!==[] && isset($_POST['txt1']) && isset($_POST['txt2']) && $_POST['txt1'] && $_POST['txt2']) {
    $ejercicio = new Ejercicio3();
    $resultado = $ejercicio->concatenar($_POST['txt1'], $_POST['txt2']);
    echo "Resultado: $resultado";
}