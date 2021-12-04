<?php
include('consultas.php');//incluye el archivo php que contiene la conexion
$con=cliente();//variable que almacena la conexión ala base de datos
if(isset($_REQUEST['buscar'])){
$codigo=$_REQUEST['codigo'];
$query="select * from persona where id='$codigo'";
$cierto=mysql_query($query,$con);//ejecutando consulta


if(!$cierto){
echo "No existe!";
echo "<a href='index.html'>Regresar</a>";
}else
{
if($row=mysql_fetch_array($cierto)){
echo "<form action='Modificardatosfinal.php' method='post'>
<input type='hidden' name='codigo' value='$row[id_cliente]'>
<input type='text' name='nombre' value='$row[nombre]'>
<input type='text' name='apellido' value='$row[AP_apellido]'>
<input type='text' name='correo' value='$row[email]'>
<input type='submit' name='Modificar' value='Modificar'>
</form>";
}
else{
echo "No existe!";
echo "<a href='index.html'>Regresar</a>";
}
}
}
?>