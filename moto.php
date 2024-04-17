<?php
/**1. Se registra la siguiente información: código, costo, año fabricación, descripción, porcentaje
 * incremento anual, activa (atributo que va a contener un valor true, si la moto está disponible para 
 * laventa y false en caso contrario).
 */
class Moto{
    private $codigo;
    private $costo;
    private $anioFabricacion;
    private $descripcion;
    private $porcentajeAnual;
    private $activa;
    /**2. Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la
    * clase.*/
    public function __construct($cod,$cost,$anio,$desc,$porc,$act){
        $this->codigo = $cod;
        $this->costo = $cost;
        $this->anioFabricacion = $anio;
        $this->descripcion = $desc;
        $this->porcentajeAnual = $porc;
        $this->activa = $act;
    }
    /**3. Los métodos de acceso de cada uno de los atributos de la clase.*/
    public function getCodigo(){
        return $this->codigo;
    }

    public function getCosto(){
        return $this->costo;
    }

    public function getAnioFabricacion(){
        return $this->anioFabricacion;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function getPorcentajeAnual(){
        return $this->porcentajeAnual;
    }

    public function getActiva(){
        return $this->activa;
    }
    public function setActiva($act){
        $this->activa=$act;
    }
    /*4. Redefinir el método toString para que retorne la información de los atributos de la clase.*/
    public function __toString(){
        return "Codigo de Moto: ".$this->getCodigo()."\nCosto: ".$this->getCosto()."\nAño de fabricacion: ".$this->getAnioFabricacion().
        "\nDescripcion: ".$this->getDescripcion()."\nPorcentaje Anual: ".$this->getPorcentajeAnual()."\nActiva: ".$this->getActiva();
    }
    /**5. Implementar el método darPrecioVenta el cual calcula el valor por el cual puede ser vendida una moto.
     * Si la moto no se encuentra disponible para la venta retorna un valor < 0. Si la moto está disponible para
     * la venta, el método realiza el siguiente cálculo:
     * $_venta = $_compra + $_compra * (anio * por_inc_anual)
     * donde $_compra: es el costo de la moto.
     * anio: cantidad de años transcurridos desde que se fabricó la moto.
     * por_inc_anual: porcentaje de incremento anual de la moto. */
    public function darPrecioVenta(){
        if($this->getActiva()==true){
            $anio = 2024 - $this->getAnioFabricacion();
            $venta = $this->getCosto() + ($this->getCosto()*($anio*$this->getPorcentajeAnual()));
            $this->setActiva(false);
        }else{
            $venta = -1;
        }
        return $venta;
    }
}