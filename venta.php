<?php
include_once "moto.php";
include_once "cliente.php";
/**1. Se registra la siguiente información: número, fecha, referencia al cliente, referencia a una colección de
motos y el precio final.*/
class Venta{
    private $numero;
    private $fecha;
    private $referenciaCliente;
    private $referenciaColcMotos;
    private $precioFinal;
    /*2. Método constructor que recibe como parámetros cada uno de los valores a ser asignados a cada
    atributo de la clase.*/
    public function __construct($num, $fech,$refeClien,$refeColecMot,$precFin){
        $this->numero = $num;
        $this->fecha = $fech;
        $this->referenciaCliente = $refeClien;
        $this->referenciaColcMotos = $refeColecMot;
        $this->precioFinal = $precFin;
    }
    /**3. Los métodos de acceso de cada uno de los atributos de la clase.*/
    public function getNumero(){
        return $this->numero;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function getReferenciaCliente(){
        return $this->referenciaCliente;
    }

    public function getReferenciaColcMotos(){
        return $this->referenciaColcMotos;
    }
    public function setReferenciaColcMotos($refeColecMot){
        $this->referenciaColcMotos = $refeColecMot;
    }

    public function getPrecioFinal(){
        return $this->precioFinal;
    }
    public function setPrecioFinal($precFin){
        $this->precioFinal = $precFin;
    }
    /*4. Redefinir el método _toString para que retorne la información de los atributos de la clase. */
    public function __toString(){
        $inf="Numero de Venta: ".$this->getNumero()."\nFecha: ".$this->getFecha()."\nCliente: ".$this->getReferenciaCliente().
        "\nColeccion de Motos: \n";
        for($i=0;$i<count($this->getReferenciaColcMotos());$i++){
            $inf.= "Moto ".($i+1).":\n".$this->getReferenciaColcMotos()[$i].
            "\n**************************************************\n";
        } 
        $inf .= "Presio Final: ".$this->getPrecioFinal();
        return $inf;
    }
    /**5. Implementar el método incorporarMoto($objMoto) que recibe por parámetro un objeto moto y lo
     * incorpora a la colección de motos de la venta, siempre y cuando sea posible la venta. El método cada
     * vez que incorpora una moto a la venta, debe actualizar la variable instancia precio final de la venta.
     * Utilizar el método que calcula el precio de venta de la moto donde crea necesario.*/
    public function incorporarMoto($objMoto){
        $venta = $objMoto->darPrecioVenta();
        $nuevaCol = $this->getReferenciaColcMotos();
        if($venta!=-1){
            $np = count($this->getReferenciaColcMotos());
            $nuevaCol[$np]= $objMoto;
            $this->setReferenciaColcMotos($nuevaCol);
            $this->setPrecioFinal($venta);
            $resp = true;
        }else{
            $resp = false;
        }
        return $resp;
    }
}