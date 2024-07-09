<?php
require_once("./modelos/servicios_reservas.php");

class servicios_reservaController{
    //atributos-propiedades
    private $servicios_reserva;

    public function __construct(){
        $this->servicios_reserva= new servicios_reserva();
    }
    
    //metodos
    public function listar(){
        $listado =$this->servicios_reserva->listAll();
        return $listado;
    }

    ///faltarian los otros metodos

    public function crear($reserva, $servicio,$cantidad,){
        $this->servicios_reserva->setreserva_id($reserva_id );
        $this->servicios_reserva->setservicio_id ($servicio_id );
        $this->servicios_reserva->setcantidad($cantidad);
    
        $this->servicios_reserva->create();
        
    }
                   

}