<?php 
    
    $idFilmes= $_POST['id']; 
    $filme = $_POST['txFilme'];
    $diretor = $_POST['txDiretor'];
    $duracao = $_POST['txDuracao'];
    $descricao = $_POST['txDescricao'];
    $classificacao = $_POST['txClassificacao'];
    $anoL = $_POST['txAnoL'];   
    $genero = $_POST['txGenero'];
    
    include("../conexao.php");

    $stmt = $pdo->prepare("
        update tbfilmes set
        filme='$filme',
        diretor='$diretor',
        duracao='$duracao',
        descricao='$descricao',
        classificacao='$classificacao',
        anoLancamento='$anoL',
        genero='$genero'
        where idFilmes ='$idFilmes';
        ");	 
		    
    $stmt ->execute();    

    header("location:addfilme.php"); 
    
?>