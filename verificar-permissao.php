<?php 

//VERIFICAR PERMISSÃO DO USUÁRIO
if(@$_SESSION['nivel_usuario'] != 1){
	if (@$_SESSION['nivel_usuario'] != 2){
	echo "<script language='javascript'>window.location='login.php'</script>";
	}
}
 ?>