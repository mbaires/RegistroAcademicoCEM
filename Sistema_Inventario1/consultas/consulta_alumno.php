<?
@session_start();
if(!session_is_registered("SESSION")){
echo "<script>alert('Usuario no registrado');location.replace('../index.php');</script>";
}else{

include('../mysql.php');
}
?>
<?php
include("../mysql.php");
include("./consultacompra.inc.php");
$dataview = new DataView();
$dataview->SetPageSize(20);
$dataview->ShowHeader(true);
$dataview->ShowPageNumber(true);
echo "
<html>
	

 ?>