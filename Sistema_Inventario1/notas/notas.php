<html>
<body>
<head><meta content="text/html; charset=ISO-8859-15" http-equiv="Content-Type">
</head>
<?
@session_start();
if(!session_is_registered("SESSION")){
echo "<script>alert('Usuario no registrado');location.replace('../index.php');</script>";
}else{

include('../mysql.php');
}

?>
<?

$fecha=Date("d-m-Y");
if($_POST)
{
	$nfactura=$_POST["nfactura"];
	$cliente=$_POST["nombre"];
	$direccion=$_POST["direccion"];
	$fecha=$_POST["fecha"];
}
else
{
	$nfactura="";
	$cliente="";
	$direccion="";
	$fecha=$fecha;
}



}?>

 </body>
</html>


