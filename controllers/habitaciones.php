
<?php
require_once("./modelos/habitaciones.php");

class habitacionescontroller{
    //atributos-propiedades
    private $habitaciones;

    public function __construct(){
        $this->habitaciones= new habitaciones();
    }
    
    //metodos
    public function listar(){
        $listado =$this->habitaciones->listAll();
        return $listado;
    }

    ///faltarian los otros metodos

    public function crear($id, $tipo, $precio, $estado,){
        $this->habitaciones->setid($id);
        $this->habitaciones->settipo($tipo);
        $this->habitaciones->setprecio($precio);
        $this->habitaciones->setestado($estado);
       
        $this->habitaciones->create();
        
    }
                   

}