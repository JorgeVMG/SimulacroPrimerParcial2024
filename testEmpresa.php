<?php
include_once "empresa.php";
include_once "cliente.php";
include_once "venta.php";
include_once "moto.php";
function retornarVentas($colecVentaClien,$objCliente){
    $inf=""; 
    if(count($colecVentaClien)>0){
        $inf .= "Compras del Cliente: ".$objCliente->getNombre()." ".$objCliente->getApellido()."\n**************************************************\n";
        for($i=0;$i<count($colecVentaClien);$i++){
            $inf .= $colecVentaClien[$i]."\n**************************************************\n";
        }
    }else{
        $inf .= "El cliente ".$objCliente->getNombre()." ".$objCliente->getApellido()." no hizo ninguna compra:\n**************************************************\n";
    }
    return $inf;   
}
/**Implementar un script TestEmpresa en la cual:
1. Cree 2 instancias de la clase Cliente: $objCliente1, $objCliente2.
2. Cree 3 objetos Motos con la información visualizada en la tabla: código, costo, año fabricación,
descripción, porcentaje incremento anual, activo.
código costo anio_fabricacion Descripcion porc_increment activo
4. Se crea un objeto Empresa con la siguiente información: denominación =” Alta Gama”, dirección= “Av
Argenetina 123”, colección de motos= [$obMoto1, $obMoto2, $obMoto3] , colección de clientes =
[$objCliente1, $objCliente2 ], la colección de ventas realizadas=[].
5. Invocar al método registrarVenta($colCodigosMoto, $objCliente) de la Clase Empresa donde el
$objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
punto 1) y la colección de códigos de motos es la siguiente [11,12,13]. Visualizar el resultado obtenido.
6. Invocar al método registrarVenta($colCodigosMotos, $objCliente) de la Clase Empresa donde el
$objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
punto 1) y la colección de códigos de motos es la siguiente [0]. Visualizar el resultado obtenido.
7. Invocar al método registrarVenta($colCodigosMotos, $objCliente) de la Clase Empresa donde el
$objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
punto 1) y la colección de códigos de motos es la siguiente [2]. Visualizar el resultado obtenido.
8. Invocar al método retornarVentasXCliente($tipo,$numDoc) donde el tipo y número de documento se
corresponden con el tipo y número de documento del $objCliente1.
9. Invocar al método retornarVentasXCliente($tipo,$numDoc) donde el tipo y número de documento se
corresponden con el tipo y número de documento del */
$ventasRealizadas=[];
$objCliente1 = new Cliente("Juan","Castillo",true,"DNI",232425);
$objCliente2 = new Cliente("Maria","Salas",true,"DNI",353675);
$objMoto1= new Moto(11,2230000,2022,"Benelli Imperiale 400",85,true);
$objMoto2= new Moto(12,584000,2021,"Zanella Zr 150 Ohe",70,true);
$objMoto3= new Moto(13,999900,2023,"Zanella Patagonia Eagle 250",55,false);
$empresa = new Empresa("Alta Gama","AV. Argentina 123",[$objCliente1,$objCliente2],[$objMoto1,$objMoto2,$objMoto3],$ventasRealizadas);
$colCodigosMoto= [11,12,13];
if ($empresa->registrarVenta($colCodigosMoto,$objCliente2)>0){
    echo "las ventas fueron realizadas\n";
}else{
    echo "las ventas no fueron realizadas, porque ya la moto fue comprada o el cliente esta dado de baja\n";
}
if ($empresa->registrarVenta($colCodigosMoto[0],$objCliente1)>0){
    echo "las ventas fueron realizadas\n";
}else{
    echo "las ventas no fueron realizadas, porque ya la moto fue comprada o el cliente esta dado de baja\n";
}
if ($empresa->registrarVenta($colCodigosMoto[2],$objCliente1)>0){
    echo "las ventas fueron realizadas\n";
}else{
    echo "las ventas no fueron realizadas, porque ya la moto fue comprada o el cliente esta dado de baja\n";
}
echo "\n**************************************************\n";
$tipo = $objCliente1->getTipo();
$numDoc = $objCliente1->getNumeroDocumento();
$ventasClientes=$empresa->retornarVentasXCliente($tipo,$numDoc);
echo retornarVentas($ventasClientes,$objCliente1);
$tipo = $objCliente2->getTipo();
$numDoc = $objCliente2->getNumeroDocumento();
$ventasClientes=$empresa->retornarVentasXCliente($tipo,$numDoc);
echo retornarVentas($ventasClientes,$objCliente2);
echo $empresa;

