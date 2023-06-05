<?php

    $user = $_POST['usuario'];
    $pass = $_POST['password'];

    include("conexao.php");

    $stmt = $pdo->prepare("select * from tb_usuario 
                            where usuario='$user' and senha='$pass'"
                        );	
    $stmt ->execute();
    
    $row = $stmt ->fetch(PDO::FETCH_BOTH);
        
    //echo $row[1] . " ";
    
    if($row[1]==null){                 
        header("location:login.php");
    }
    else{
        // echo "Usuário logado";
        header("location:index.php");
    }
?>