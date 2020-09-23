<?php
    require_once './Ejercicio1/Ejercicio1.php';
    require_once './Ejercicio2/Ejercicio2.php';
    require_once './Ejercicio3/Ejercicio3.php';
    require_once './Ejercicio4/Ejercicio4.php';
    require_once './Ejercicio5/Ejercicio5.php';
    require_once './Ejercicio6/NombreCompleto.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trabajo 3 - Alarcón</title>
        <link rel="stylesheet" href="./index.css">
    </head>
    <body>
        <h1>Matias Alarcón</h1>
        <div class="ejercicio" id="ejercicio1">
            <div class="enunciado">
                <h2>Ejercicio 1: Semáforo</h2>
                <p>Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”“amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,“avance” o  “estado desconocido” ante un caso no esperado.</p>
                <ol type="a">
                    <li>Resuelva la solución utilizando if else</li>
                    <li>Resuelva la solución utilizando if inline (return ?: )</li>
                    <li>Resuelva la solución utilizando switch</li>
                </ol>
            </div>
            <form action="./index.php#ejercicio1" method="POST">
                <label for="color">Color: </label>
                <input type="text" name="color" required>
                <input type="submit" value="Enviar" name="submit">
                <p>
                    <?php
                        include './Ejercicio1/message.php';
                    ?>
                </p>
            </form>
        </div>
        <div class="ejercicio" id="ejercicio2">
            <div class="enunciado">
                <h2>Ejercicio 2: Binomio cuadrado perfecto</h2>
                <p>Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:recibe dos parámetros y  devuelve el cuadrado de la suma de ambos (a+b)<sup>2</sup></p>
                <ol type="a">
                    <li>Resuelva la solución utilizando la función de potencia</li>
                    <li>Resuelva la solución utilizando la fórmula desarrollada del binomio: a<sup>2</sup>+ 2*a*b + b<sup>2</sup></li>
                </ol>
            </div>
            <form action="./index.php#ejercicio2" method="POST">
                <label for="valor1">Ingrese un número a: </label>
                <input type="number" name="numero_a" required>
                <br>
                <label for="valor2">Ingrese un número b: </label>
                <input type="number" name="numero_b" required>
                <br>
                <input type="submit" value="Enviar" name="submit">
                <p>
                    <?php
                        include './Ejercicio2/message.php';
                    ?>
                </p>
            </form>
        </div>
        <div class="ejercicio" id="ejercicio3">
            <div class="enunciado">
                <h2>Ejercicio 3: Concatenar textos</h2>
                <p>Cree una función llamada concatenar que reciba dos textos y devuelva ambos textos concatenadoscomo uno solo.</p>
            </div>
            <form action="./index.php#ejercicio3" method="POST">
                <label for="txt1">Ingrese un texto: </label>
                <input type="text" name="txt1" required>
                <br>
                <label for="txt2">Ingrese otro texto: </label>
                <input type="text" name="txt2" required>
                <br>
                <input type="submit" value="Enviar" name="submit">
                <p>
                    <?php
                        include './Ejercicio3/message.php';
                    ?>
                </p>
            </form>
        </div>
        <div class="ejercicio" id="ejercicio4">
            <div class="enunciado">
                <h2>Ejercicio 4: Incrementar</h2>
                <p>Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno dela función, el valor del parámetro haya sido incrementado en 1 (Ver pasaje de parámetros porreferencia)</p>
            </div>
            <form action="./index.php#ejercicio4" method="POST">
                <label for="numero">Ingrese un número: </label>
                <input type="number" name="numero" required>
                <input type="submit" value="Enviar" name="submit">
                <p>
                    <?php
                        include './Ejercicio4/message.php';
                    ?>
                </p>
            </form>
        </div>
        <div class="ejercicio" id="ejercicio5">
            <div class="enunciado">
                <h2>Ejercicio 5: Sumatoria</h2>
                <p>Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos susvalores.</p>
                <ol type="a">
                    <li>Resuelva la solución utilizando la estructura de control for</li>
                    <li>Resuelva la solución utilizando la estructura de control for each</li>
                    <li>Resuelva la solución utilizando la estructura de control while</li>
                </ol>
            </div>
            <form action="./index.php#ejercicio5" method="POST">
                <label for="numero">Ingrese números separados por coma y sin espacios: </label>
                <input type="text" name="lista_numeros" required>
                <input type="submit" value="Enviar" name="submit">
                <p>
                    <?php
                        include "./Ejercicio5/message.php";
                    ?>
                </p>
            </form>
        </div>
        <div class="ejercicio" id="ejercicio6">
            <div class="enunciado">
                <h2>Ejercicio 6: Nombre completo</h2>
                <p>Cree una clase llamada NombreCompleto, la misma tendra un constructor que reciba nombre,apellido y sexo por parámetro.</p>
                <p>Dicha clase debe implementar el método saludoFormal() el cual debe responder "Estimado Sr/Estimada Sra" según corresponda, nombre y apellido. Ej: "Estimado Sr. Facundo D’Aranno"</p>
                <p>Dicha clase debe implementar también el método saludoInformal()  el cual debe responder “HolaNombre”. Ej: “Hola Facundo”</p>
            </div>
            <form action="./index.php#ejercicio6" method="POST">
                <label for="nombre">Ingrese su nombre: </label>
                <input type="text" name="nombre" required>
                <br>
                <label for="apellido">Ingrese su apellido: </label>
                <input type="text" name="apellido" required>
                <br>
                <label for="sexo">Elija su sexo: </label>
<!--                <select multiple name="sexo[]">-->
                    <select name="sexo" required>
                    <option selected disabled>Elegir sexo</option>
                    <option name="masculino">Masculino</option>
                    <option name="femenino">Femenino</option>
                </select>
                <br>
                <input type="submit" value="Enviar" name="submit">
                <p>
                    <?php
                        include './Ejercicio6/message.php';
                    ?>
                </p>
            </form>
        </div>
    </body>
</html>