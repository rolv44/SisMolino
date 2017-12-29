<?php
include("../controlador/conexion.php");
$cn=new conexion();
$con=$cn->conectar();
$nombre=$_POST['nombre'];
$password=$_POST['password'];
$usuario=array();
$resultado=mysqli_query($con,"select FC_VALIDAR('$nombre','$password') as i")or die(mysqli_error($con));
$r=mysqli_fetch_array($resultado);
$op=$r['i'];
if($op==1){
  $resultado1=mysqli_query($con,"select IDuser,user,tipo,pass,estado from usuarios where user='$nombre'")or die(mysqli_error($con));
  while($row=mysqli_fetch_array($resultado1)){ 
      array_push($usuario,array("res"=>"ok","id"=>$row[0],"nombre"=>$row[1],"tipo"=>$row[2],"estado"=>$row[4]));
  }
}elseif ($op==0) {
  $resultado2=mysqli_query($con,"select IDuser,user,tipo,pass,estado from usuarios where user='$nombre'")or die(mysqli_error($con));
  $r=mysqli_fetch_array($resultado2);
  if(mysqli_num_rows($resultado2)==1){
    array_push($usuario,array("res"=>"fail","id"=>"usu","nombre"=>$r[1]));
  }else{
    array_push($usuario,array("res"=>"fail","id"=>"pass"));
  }
}else {
  array_push($usuario,array("res"=>"fail"));
}

echo json_encode($usuario);

?>