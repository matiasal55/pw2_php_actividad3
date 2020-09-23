<?php
if($_POST!==[] && isset($_POST['numero_a']) && isset($_POST['numero_b']) && $_POST['numero_a'] && $_POST['numero_b']) {
    $ejercicio = new Ejercicio2();
    $resultado = $ejercicio->binomioCuadradoPerfecto($_POST['numero_a'], $_POST['numero_b']);
    echo "El resultado es $resultado";
}