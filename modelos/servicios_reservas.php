<?php 
require_once("./config/ConectorBd.php");
class servicios_reservas{
    //atributo-propiedades
    private $reserva_id;
    private $servicio_id;
    private $cantidad;
    private $conectarse;
    //metodos-funciones

    public function __construct(){
        $this->conectarse = new ConectorBd();
    }
    
    //getter y setter
    public function getreserva_id(){
        return $this->reserva_id;
    }

    public function setreserva_id($reserva_id){
        $this->reservas_id=$reserva_id;
    }

    public function getservicio_id (){
        return $this->servicio_id;
    }

    public function setservicio_id ($servicio_id){
        $this->servicio_id =$servicio_id ;
    }
    
    public function getcantidad(){
        return $this->cantidad;
    }

    public function setcantidad($cantidad){
        $this->cantidad=$cantidad;
    }
   
   

    //listar los datos
    public function listAll(){
        $cadenaSql = "SELECT * FROM servicios_reservas";    
        $resultado = $this->conectarse->consultaConRetorno($cadenaSql);
        $datos = $resultado->fetch_all();
        return $datos;
    }

    //create, upadete, delete

    public function create(){
        $cadenaSql ="INSERT INTO servicios_reserva (reserva_id, servicio_id, cantidad) VALUES ('$this->reserva_id', '$this->servicio_id', '$this->cantidad')"; 
        $this->conectarse->consultaSinRetorno($cadenaSql);
    }


}