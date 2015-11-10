<?
session_start();
if(!session_is_registered("SESSION")){
echo "<script>alert('Usuario no registrado');location.replace('../index.php');</script>";
}else{
$usuario=session_register("SESSION");
include('../mysql.php');
include('../script.php');
}
?>
	<?php
        $nombre=" ";
		$direccion=" ";
		$ncontacto=" ";
		$telefono=" ";
		$cel=" ";
        $email=" ";

	if($_POST)
	
			</body>
			</html>
";
?>