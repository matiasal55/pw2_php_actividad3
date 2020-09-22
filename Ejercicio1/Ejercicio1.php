<?php

class Ejercicio1
{
//    public function semaforo($color){
//        if(strtolower($color)==='rojo')
//            $estado='frene';
//        else if(strtolower($color)==='amarillo')
//            $estado='precaución';
//        else if(strtolower($color)==='verde')
//            $estado='avance';
//        else $estado='estado desconocido';
//        return $estado;
//    }

//    public function semaforo($color){
//        $color==='rojo' ? $estado='frene' : ($color==='amarillo' ? $estado='precaución' : ($color==='verde' ? $estado='avance' : $estado='estado desconocido'));
//        return $estado;
//    }
//
    public function semaforo($color){
        switch(strtolower($color)){
            case 'rojo': $estado='frene';break;
            case 'amarillo': $estado='precaución';break;
            case 'verde':$estado='avance';break;
            default: $estado='estado desconocido';
        }
        return $estado;
    }
}