<?php
require_once("./modelos/clientes.php");

class ClienteController{
    //atributos-propiedades
    private $cliente;

    public function __construct(){
        $this->cliente = new Cliente();
    }
    
    //metodos
    public function listar(){
        $listado =$this->cliente->listAll();
        return $listado;
    }

    ///faltarian los otros metodos

    public function crear($nombre,$apellido,$correo,$telefono,$fechallegada,$fechasalida,){
        $this->cliente->setnombre($nombre);
        $this->cliente->setapellido($apellido);
        $this->cliente->setcorreo($correo);
        $this->cliente->settelefono($telefono);
        $this->cliente->setfechallegada($fechallegada);
        $this->cliente->setfechasalida($fechasalida);

        $this->cliente->create();
        
    }
                   

}