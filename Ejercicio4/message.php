<?php
if($_POST!==[] && isset($_POST['numero']) && $_POST['numero']) {
    $ejercicio = new Ejercicio4();
    $ejercicio->incrementar($_POST['numero']);
    echo "El resultado incrementado es ".$_POST['numero'];
}