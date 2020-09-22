<?php


class Ejercicio5
{

//    public function sumatoria($vector){
//        $resultado=0;
//        for($i=0;$i<sizeof($vector);$i++)
//            $resultado+=$vector[$i];
//        return $resultado;
//    }

//    public function sumatoria($vector)
//    {
//        $resultado=0;
//        foreach ($vector as $num){
//            $resultado+=$num;
//        }
//        return $resultado;
//    }

    public function sumatoria($vector){
        $resultado=0;
        $i=0;
        $maximo=sizeof($vector);
        while($i<$maximo) {
            $resultado += $vector[$i];
            $i++;
        }

        return $resultado;
    }
}