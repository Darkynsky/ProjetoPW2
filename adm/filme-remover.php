<?php

    $id = $_GET['id'];

    //echo $id;

    include("../conexao.php");
    
    $stmt = $pdo->prepare("delete from tbfilmes where idFilmes = $id");	    
	$stmt ->execute();    

    header("location:addfilme.php"); 



?>