<?php
require_once("./modelos/pago.php");

class PagoController{
    //atributos-propiedades
    private $pago;

    public function __construct(){
        $this->pago = new Pago();
    }
    
    //metodos
    public function listar(){
        $listado = $this->pago->listAll();
        return $listado;
    }

    //faltarian los otros metodos

    public function crear($id,$reserva_id,$monto,$fecha_pago,){
        $this->pago->setid($id);
        $this->pago->setreserva_id ($reserva_id);
        $this->pago->setmonto($monto);
        $this->pago->setfecha_pago($fecha_pago);

        $this->pago->create();
        
    }             

}
