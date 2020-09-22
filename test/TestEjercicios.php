<?php

require_once '../Ejercicio1/Ejercicio1.php';
require_once '../Ejercicio2/Ejercicio2.php';
require_once '../Ejercicio3/Ejercicio3.php';
require_once '../Ejercicio4/Ejercicio4.php';
require_once '../Ejercicio5/Ejercicio5.php';
require_once '../Ejercicio6/NombreCompleto.php';

class TestEjercicios extends PHPUnit\Framework\TestCase
{
    public function testEjercicio1() {
        $color='rojo';
        $semaforo=new Ejercicio1();
        $this->assertEquals("frene",$semaforo->semaforo($color));
    }

    public function testEjercicio2(){
        $numero1=2;
        $numero2=2;
        $ejercicio=new Ejercicio2();
        $this->assertEquals(16,$ejercicio->binomioCuadradoPerfecto($numero1,$numero2));
    }

    public function testEjercicio3(){
        $texto1='Hola';
        $texto2='Mundo';
        $ejercicio=new Ejercicio3();
        $this->assertEquals("Hola Mundo",$ejercicio->concatenar($texto1,$texto2));
    }

    public function testEjercicio4(){
        $variable=8;
        $ejercicio=new Ejercicio4();
        $ejercicio->incrementar($variable);
        $this->assertEquals(9,$variable);
    }

    public function testEjercicio5(){
        $vector=[1,2,3,4];
        $ejercicio=new Ejercicio5();
        $this->assertEquals(10,$ejercicio->sumatoria($vector));
    }

    public function testEjercicio6Formal(){
        $nombre='Matias';
        $apellido='Alarcón';
        $sexo='Masculino';
        $nombreCompleto=new NombreCompleto($nombre,$apellido,$sexo);
        $this->assertEquals("Estimado Sr. Matias Alarcón",$nombreCompleto->saludoFormal());
    }

    public function testEjercicio6Informal(){
        $nombre='Matias';
        $apellido='Alarcón';
        $sexo='Masculino';
        $nombreCompleto=new NombreCompleto($nombre,$apellido,$sexo);
        $this->assertEquals("Hola Matias",$nombreCompleto->saludoInformal());
    }
}