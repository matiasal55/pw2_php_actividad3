<?php
if($_POST!=[] && isset($_POST['color']) && $_POST['color']) {
    $semaforo = new Ejercicio1();
    $estado = $semaforo->semaforo($_POST['color']);
    echo "<p>El valor ingresado es: $estado</p>";
}