<?php
class Conexion {
  protected $server="localhost";
  protected $user="root";
  protected $pass="Fastfood";
  protected $bdd="Fastfood";
  protected $cone;
  public function conectar()
  {
    $s=$this->server;
    $u=$this->user;
    $p=$this->pass;
    $bd=$this->bdd;
    $this->cone=new mysqli($s,$u,$p,$bd);
    if($this->cone->connect_errno){
        echo "Errorr al conectarse con la base de datos:
         ".$this->cone->connect_error;
    }
    return $this->cone;
  }
}
class buscaru extends Conexion{
  public function validar($u,$p)
  {
    $con=$this->cone->query("SELECT *FROM usuarios
     where user='$u' and contraseña='$p' ");
     $filas=$con->num_rows;

      if($filas>0) echo "HOLA BIENVENIDO". $u;
      else echo "NO EXISTES EN EL SISTEMA :("; 
  }
}
?>