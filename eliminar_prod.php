<?php
	include "conexion.php";

	EliminarProducto($_GET['id']);

	function EliminarProducto($id)
	{
		$cliente="DELETE FROM cliente WHERE no='".$id."' ";
		mysql_query($cliente) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Producto Eliminado exitosamente");
	window.location.href='index.php';
</script>