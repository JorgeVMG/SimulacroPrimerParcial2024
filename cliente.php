<?php
class Cliente{
    private $nombre;
    private $apellido;
    private $estado;
    private $tipo;
    private $numeroDocumento;

    public function __construct($nom, $apel, $estado,$tip,$numDoc){
        $this->nombre = $nom;
        $this->apellido = $apel;
        $this->estado = $estado;
        $this->tipo = $tip;
        $this->numeroDocumento = $numDoc;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getNumeroDocumento(){
        return $this->numeroDocumento;
    }
    public function __toString(){
        return "Nombre y Apellido: ".$this->getNombre()." ".$this->getApellido()."\nEstado: ".$this->getEstado()."\nTipo: ".$this->getTipo()."\nNumero De Documento: ".$this->getNumeroDocumento();
    }
}