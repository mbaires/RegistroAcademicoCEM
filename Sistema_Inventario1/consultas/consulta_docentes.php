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

<script language=Javascript>
function validar(form){
	for(i=0; i <form. length; i++){
		if(form.item(i).value == ""){
			self.alert("Debe de rellenar el campo " + form.item(i).name + " para continuar");
			form.item(i).focus();
			return false;
		}
	}
}
</script>

<?php
include("../mysql.php");
include('../script.php');
include("./consultaexistencias.inc.php");
$dataview = new DataView();
$dataview->SetPageSize(20);
$dataview->ShowHeader(true);
$dataview->ShowPageNumber(true);
echo "
<

 ?>
 </body>
</html>