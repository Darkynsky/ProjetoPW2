<?php

    $generoAdd = $_POST['txAddGenero'];
    
    include("../conexao.php");

    $stmt = $pdo->prepare("insert into tb_genero 
    values(null,'$generoAdd')");	    
	$stmt ->execute();    

    header("location:addfilme.php");    
    
?>