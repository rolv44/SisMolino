<?php 
class Cpersona{
  public $documento;
  public $nombre;
  public $apellidos;
  public $direccion;
  public $telefono;
  
  function __construct(){
    
  }
  
  function getDni(){
    return $this->dni;
  }
  function getNombre(){
    return $this->nombre;
  }
  function getApellidos(){
    return $this->apellidos;
  }
  function getDireccion(){
    return $this->direccion;
  }
  function getTelefono(){
    return $this->telefono;
  }        
  function setDni($param){
    $this->dni=$param;
  }
  function setNombre($param){
    $this->nombre=$param;
  }
  function setApellidos($param){
    $this->apellidos=$param;
  }
  function setDireccion($param){
    $this->direccion=$param;
  }
  function setTelefono($param){
    $this->telefono=$param;
  }
  
}

?>