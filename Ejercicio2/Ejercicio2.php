<?php


class Ejercicio2
{

//    public function binomioCuadradoPerfecto($numero1,$numero2)
//    {
//        $resultado=pow($numero1+$numero2,2);
//        return $resultado;
//    }

    public function binomioCuadradoPerfecto($numero1,$numero2){
        $resultado=pow($numero1,2)+2*$numero1*$numero2+pow($numero2,2);
        return $resultado;
    }
}