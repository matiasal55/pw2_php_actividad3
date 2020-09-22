<?php


class NombreCompleto
{
     private $nombre;
     private $apellido;
     private $sexo;

    public function __construct(string $nombre, string $apellido, string $sexo)
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->sexo=$sexo;
    }

    public function saludoFormal()
    {
        if(strtolower($this->sexo)==="masculino")
            $formalidad="Estimado Sr.";
        else
            $formalidad="Estimada Sra.";
        return "$formalidad $this->nombre $this->apellido";
    }

    public function saludoInformal()
    {
        return "Hola $this->nombre";
    }


}