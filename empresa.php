<?php
include "moto.php";
include "cliente.php";
class Empresa{
    private $denominacion;
    private $direccion;
    private $colecClientes;
    private $colecMotos;
    private $colecVentasRealizadas;

    public function __construct($den, $dire, $colcClien,$colcMot,$colcVent){
        $this->denominacion = $den;
        $this->direccion = $dire;
        $this->colecClientes = $colcClien;
        $this->colecMotos = $colcMot;
        $this->colecVentasRealizadas = $colcVent;
    }

    public function getDenominacion(){
        return $this->denominacion;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getColeccionClientes(){
        return $this->colecClientes;
    }

    public function getColeccionMotos(){
        return $this->colecMotos;
    }

    public function getColeccionVentasRealizadas(){
        return $this->colecVentasRealizadas;
    }
    /**Implementar el método retornarMoto($codigoMoto) que recorre la colección de motos de la Empresa y
     * retorna la referencia al objeto moto cuyo código coincide con el recibido por parámetro. */
    public function retornarMoto($codigoMoto){
        $colcMotos=$this->getColeccionMotos();
        $encontrado = 0;
        $i=0;
        do{
            $j = $colcMotos[$i]->getCodigo();
            if($j==$codigoMoto){
                $encontrado = $colcMotos[$i];
            }else{
                $i++;
            }
        }while($i<count($colcMotos)&&$encontrado==0);

    }
    /**6. Implementar el método registrarVenta($colCodigosMoto, $objCliente) método que recibe por
     * parámetro una colección de códigos de motos, la cual es recorrida, y por cada elemento de la colección
     * se busca el objeto moto correspondiente al código y se incorpora a la colección de motos de la instancia
     * Venta que debe ser creada. Recordar que no todos los clientes ni todas las motos, están disponibles
     * para registrar una venta en un momento determinado.
     * El método debe setear los variables instancias de venta que corresponda y retornar el importe final de la venta. */
    public function registrarVenta($colCodigosMoto, $objCliente){
        
    }
}