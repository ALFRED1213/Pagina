<?php
$id_cliente=$_POST['id_cliente'];
$nombre=$_POST['nombre'];
$AP_Paterno=$_POST['AP_Paterno'];
$AP_Materno=$_POST['AP_Materno'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$tipo_habitacion=$_POST['tipo_habitacion'];
$fecha=$_POST['fecha'];
$noches=$_POST['noches'];

echo $id_cliente;
echo $nombre;
echo $AP_Paterno;
echo $AP_Materno;
echo $email;
echo $telefono;
echo $tipo_habitacion;
echo $fecha;
echo $noches;
echo "id_cliente: ".$id_cliente."nombre: ".$nombre."AP_Paterno: ".$AP_Paterno."AP_Materno: ".$AP_Materno."email: ".$email."telefono: ".$telefono."tipo_habitacion: ".$tipo_habitacion."fecha: ".$fecha."noches: ".$noches;


$conexion =new mysqli('localhost','root','','bdweb');
if($conexion->connect_error){
die("werror de conexion".$conexion->connect_error);
}else{
$sql = "INSERT INTO cliente(id_cliente,nombre,AP_Paterno,AP_Materno,email,telefono,tipo_habitacion,fecha,noches) VALUES ('".$id_cliente."','".$nombre."','".$AP_Paterno."','".$AP_Materno."','".$email."','".$telefono."','".$tipo_habitacion."','".$fecha."','".$noches."');";
if($conexion->query($sql)){
    echo "registo insertado";
}else{
    echo "error en la insercion" .$conexion ->error;
    
}

}
echo "<a href='index.html'>Regresar</a>"
?>