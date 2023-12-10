<?php
class clase_repre
{   public $vlrep_id;
    public $vlrep_nombre;
    public $vlrep_apellido;
    public function __construct()
    {
        $this->vlrep_id="";
        $this->vlrep_nombre="";
        $this->vlrep_apellido="";
     
    }
    public function _insertar($vlrep_nombre, $vlrep_apellido){
        require_once("../../../conexion/conexion.php");
        //$dmlsentencia="insert into si_provincias(cur_nombre,cur_observacion) values ('vlcur_nombre ','vlcur_observacion')";
        $dmlsentencia="insert into snv_representantes(rep_nombre, rep_apellido) values ('" . $vlrep_nombre . "','" . $vlrep_apellido . "')";
        $registros=$pdo->query($dmlsentencia);
        return $registros;
    }
    public function _consultartodo($valor){
        require_once("../../../conexion/conexion.php");

        if($valor=='')
        {
            $dmlsentencia="select * from snv_representantes";
        }
        else
        {
            $dmlsentencia="select * from snv_representantes where rep_nombre like '%s', %".$valor."%";
        }
        $registros=$pdo->query($dmlsentencia);
        return $registros;
    }
    public function _actualizar($id, $nombre, $apellido)
       { //update
    }
    public function _eliminar(){
        //delete
    }
}
?>