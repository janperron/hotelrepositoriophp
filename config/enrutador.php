<?php

class Enrutador{

    //metodo-funcion
    public function CargarVista($vistas){
        //echo $vista;//cliente/inicio
        $carpetaArchivo = explode("/",$vistas);
        switch ($carpetaArchivo[1]) {
            case 'inicio':
               require_once("./vistas/". $carpetaArchivo[0]. "/".$carpetaArchivo[1].".php");
                break;
            case 'crear':
                require_once("./vistas/". $carpetaArchivo[0]. "/".$carpetaArchivo[1].".php");
                break;
                case 'editar':
                    require_once("./vistas/". $carpetaArchivo[0]. "/".$carpetaArchivo[1].".php");
                     break;
                 case 'eliminar':
                     require_once("./vistas/". $carpetaArchivo[0]. "/".$carpetaArchivo[1].".php");
                     break;
            default:
            require_once("./vistas/pageNotFound.php");
                break;
        }

        


    }
    
}