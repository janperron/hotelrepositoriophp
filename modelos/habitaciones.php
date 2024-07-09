<?php 
require_once("./config/ConectorBd.php");
class habitaciones{
    //atributo-propiedades
    private $id;
    private $tipo;
    private $precio;
    private $estado;
    private $conectarse;
    //metodos-funciones
    
    public function __construct(){
        $this->conectarse = new ConectorBd();
    }
    
    //getter y setter
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function gettipo (){
        return $this->tipo;
    }

    public function settipo ($tipo){
        $this->tipo=$tipo;
    }

    public function setprecio ($precio){
        $this->precio =$precio;
    }
    
    public function getestado(){
        return $this->estado;
    }

    public function setestado ($estado){
        $this->estado=$estado;
    }

    //listar los datos
    public function listAll(){
        $cadenaSql = "SELECT * FROM habitaciones";
        $resultado = $this->conectarse->consultaConRetorno($cadenaSql);
        $datos = $resultado->fetch_all();
        return $datos;
    }

    //create, upadete, delete

    public function create(){
        $cadenaSql ="INSERT INTO habitaciones (id, tipo, precio, estado) VALUES ('$this->id', '$this->tipo', '$this->precio', '$this->estado')";
        $this->conectarse->consultaSinRetorno($cadenaSql);
    }


}