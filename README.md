## [Programación Web 2] Actividad 3 - PHP

### Descripción:
Actividad de la materia Programación Web 2 correspondiente a la Tecnicatura en Desarrollo Web. En la actividad se deben resolver los problemas dados mediante la técnica de TDD (Test-Driven Development o Desarrollo Guiado por Pruebas), donde se debe desarrollar el código en base a los tests o pruebas propuestas.
El index forma parte del Ejercicio 7 donde se pide presentar los ejercicios y agregarle estilos, con el objetivo de integrar HTML, CSS y PHP. 
<br>
En mi caso le agregué la opción de completar con un formulario para cada ejercicio y que ante cada resultado se dirija hacia donde se encuentra el ejercicio.

### Ejercicio 1: Semáforo
Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”, “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”, “avance” o “estado desconocido” ante un caso no esperado.

a) Resuelva la solución utilizando if else
<br>
b) Resuelva la solución utilizando if inline (return ?: )
<br>
c) Resuelva la solución utilizando switch

### Ejercicio 2: Binomio cuadrado perfecto
Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)<sup>2</sup>.

a) Resuelva la solución utilizando la función de potencia
<br>
b) Resuelva la solución utilizando la fórmula desarrollada del binomio: a<sup>2</sup> + 2*a*b + b<sup>2</sup>

### Ejercicio 3: Concatenar textos
Cree una función llamada concatenar que reciba dos textos y devuelva ambos textos concatenados como uno solo.

### Ejercicio 4: Incrementar
Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
la función, el valor del parámetro haya sido incrementado en 1 (Ver pasaje de parámetros por
referencia)

### Ejercicio 5: Sumatoria
Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
valores.

a) Resuelva la solución utilizando la estructura de control for
<br>
b) Resuelva la solución utilizando la estructura de control for each
<br>
c) Resuelva la solución utilizando la estructura de control while

### Ejercicio 6: Nombre completo
Cree una clase llamada NombreCompleto, la misma tendra un constructor que reciba nombre,
apellido y sexo por parámetro.

Dicha clase debe implementar el método saludoFormal() el cual debe responder “Estimado Sr
/Estimada Sra” según corresponda, nombre y apellido. Ej: “Estimado Sr. Facundo D’Aranno”
Dicha clase debe implementar también el método saludoInformal() el cual debe responder “Hola
Nombre”. Ej: “Hola Facundo”

### Ejercicio 7: Integrando PHP, HTML y CSS
Cree una web a modo de demostrar las funciones resueltas en el trabajo práctico.
Puede llevarlo adelante creando un archivo index.php, que contenga cómo título su nombre, a
continuación liste los ejercicios a resolver, y en cada caso comente con qué valores se llama a la
función, la llame efectivamente y muestre por pantalla el resultado utilizando la función “echo” .
