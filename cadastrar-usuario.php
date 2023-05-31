<?php  
    $userLogin = $_POST['txUsuario'];
    $email = $_POST['txEmailUser'];
    $userSenha = $_POST['txSenha'];
    
    include("conexao.php");

    $stmt = $pdo->prepare("insert into tb_usuario 
    values(null,'$userLogin','$email','$userSenha')");	    
	$stmt ->execute();    

    header("location:index.php");    
    
?>