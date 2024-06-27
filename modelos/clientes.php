<?php 
require_once("./config/ConectorBd.php");
class Cliente{
    //atributo-propiedades
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $telefono;
    private $fechallegada;
    private $fechasalida;
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

    public function getnombre (){
        return $this->nombre;
    }

    public function setnombre ($nombre){
        $this->nombre =$nombre ;
    }
    
    public function getapellido(){
        return $this->apellido;
    }

    public function setapellido($apellido){
        $this->apellido=$apellido;
    }
    public function getcorreo(){
        return $this->correo;
    }

    public function setcorreo($correo){
        $this->correo=$correo;
    }
    public function gettelefono(){
        return $this->telefono;
    }

    public function settelefono($telefono){
        $this->telefono=$telefono;
    }
    public function getfechallegada(){
        return $this->fechallegada;
    }

    public function setfechallegada($fechallegada){
        $this->fechallegada=$fechallegada;
    }
    public function getfechasalida(){
        return $this->fechasalida;
    }

    public function setfechasalida($fechasalida){
        $this->fechasalida=$fechasalida;
    }
   

    //listar los datos
    public function listAll(){
        $cadenaSql = "SELECT * FROM clientes";    
        $resultado = $this->conectarse->consultaConRetorno($cadenaSql);
        $datos = $resultado->fetch_all();
        return $datos;
    }

    //create, upadete, delete

    public function create(){
        $cadenaSql ="INSERT INTO clientes (nombre, apellido, correo, telefono, fecha_llegada, fecha_salida) VALUES ('$this->nombre', '$this->apellido', '$this->correo', '$this->telefono', '$this->fechallegada', '$this->fechasalida')"; 
        $this->conectarse->consultaSinRetorno($cadenaSql);
    }


}