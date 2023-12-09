<?php 
require_once("conexao.php");
@session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query_con = $pdo->prepare("SELECT * from colaboradores WHERE (email = :usuario) and senha = :senha");
$query_con->bindValue(":usuario", $usuario);
$query_con->bindValue(":senha", $senha);
$query_con->execute();
$res_con = $query_con->fetchAll(PDO::FETCH_ASSOC);

if(@count($res_con) > 0){
	$nivel = $res_con[0]['nivel_id'];

	$_SESSION['nome_usuario'] = $res_con[0]['nome'];
	$_SESSION['nivel_usuario'] = $res_con[0]['nivel_id'];
	$_SESSION['id_usuario'] = $res_con[0]['id'];


	if($nivel == 1 ){
		echo "<script language='javascript'>window.location='index.php'</script>";
	}

		if($nivel == 2){
			echo "<script language='javascript'>window.location='index.php'</script>";
		}
/*
		if($nivel == 'Tesoureiro'){
			echo "<script language='javascript'>window.location='painel-tesoureiro'</script>";
		}
		*/

	}else{

		echo "<script language='javascript'>window.alert('Dados Incorretos!')</script>";

		echo "<script language='javascript'>window.location='login.php'</script>";
	}

?>