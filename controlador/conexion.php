<?php
class Conexion {
  protected $server="localhost";
  protected $user="root";
  protected $pass="Besiddes97";
  protected $bdd="fastfood";
  protected $cone;
  public function conectar()
  {
    $s=$this->server;
    $u=$this->user;
    $p=$this->pass;
    $bd=$this->bdd;
    $this->cone=new mysqli($s,$u,$p,$bd);
    if($this->cone->connect_errno){
        echo "Error al conectarse con la base de datos:
         ".$this->cone->connect_error;
    }
    return $this->cone;
  }
}
class buscaru extends Conexion{
  public function validar($u,$p)
  {
    $consulta=$this->cone->query("SELECT *FROM usuarios
     where usuario='$u' and contra='$p' ");
     $filas=$consulta->num_rows;

      if($filas>0) echo "BIENVENIDO". $u;
      else echo "NO EXISTES EN EL SISTEMA :("; 
  }
}
?>