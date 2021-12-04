
<?php
$conexion =new mysqli('localhost','root','','bdweb');
$sql="SELECT*FROM cliente";
$cliente=$conexion->query($sql);
if($cliente->num_rows>0){

while($c=$cliente->fetch_assoc()){
   

//echo"id_cliente: ".$c["id_cliente"]."nombre: ".$c["nombre"]."AP_Paterno: ".$c["AP_Paterno"]."AP_Materno: ".$c["AP_Materno"]."Email: ".$c["Email"]."telefono: ".$c["telefono"]."tipo_habitacion: ".$c["tipo_habitacion"]."fecha: ".$c["fecha"]."noches: ".$c["noches"];
    
echo"<table border='1'>";
    echo"<tr>";
    echo"<td>";
    echo $c["id_cliente"];
    echo "</td>";
    echo"<td>";
    echo $c["nombre"];
    echo "</td>";
    echo"<td>";
    echo $c["AP_Paterno"];
    echo "</td>";
    echo"<td>";
    echo $c["AP_Materno"];
    echo "</td>";
    echo"<td>";
    echo $c["Email"];
    echo "</td>";
    echo"<td>";
    echo $c["telefono"];
    echo "</td>";
    echo"<td>";
    echo $c["tipo_habitacion"];
    echo "</td>";
    echo"<td>";
    echo $c["fecha"];
    echo "</td>";
    echo"<td>";
    echo $c["noches"];
    echo "</td>";
    echo"<td>";
    echo"<a href='altas.html'>Editar</a>";
   echo"</td>";
    echo"</tr>";
    

  //  echo "rfc:".$c["rfc"]."Nombre:".$c["Nombre"]."Ape_pat:".$c["Ape_pat"]."Ape_mat".$c["Ape_mat"]."Sexo:".$c["Sexo"]."Edad".$c["Edad"];
}
echo"</table>";

}else{
echo"no existen registros";
}
echo"<a href='index.html'>Regresar</a>";

?>
