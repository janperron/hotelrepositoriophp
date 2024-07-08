<?php 
require_once("./config/ConectorBd.php");
class Pago{
    //atributo-propiedades
    private $id;
    private $reserva_id;
    private $monto;
    private $fecha_pago;
    private $conectarse;
    //metodos-funciones

    public function __construct(){
        $this->conectarse = new ConectorBd();
    }
    
    //getter y setter
    public function getid(){
        return $this->id;
    }

    public function setid($id){
        $this->id=$id;
    }

    public function reserva_id (){
        return $this->reserva_id;
    }

    public function setreserva_id ($reserva_id){
        $this->nombre =$reserva_id ;
    }
    
    public function getmonto(){
        return $this->monto;
    }

    public function setmonto($monto){
        $this->monto=$monto;
    }
    public function getfecha_pago(){
        return $this->fecha_pago;
    }

    public function setfecha_pago($fecha_pago){
        $this->fecha_pago=$fecha_pago;
    }
 

    //listar los datos
    public function listAll(){
        $cadenaSql = "SELECT * FROM pagos";    
        $resultado = $this->conectarse->consultaConRetorno($cadenaSql);
        $datos = $resultado->fetch_all();
        return $datos;
    }

    //create, upadete, delete

    public function create(){
        $cadenaSql ="INSERT INTO pagos (id, reserva_id, monto, fecha_pago) VALUES ('$this->id', '$this->reserva_id', '$this->monto', '$this->fecha_pago')"; 
        $this->conectarse->consultaSinRetorno($cadenaSql);
    }


}