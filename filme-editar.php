<?php 

    //imagem do marcador
    if(isset($_FILES["arqimageI"]) && isset($_FILES["arqimageP"])){
        $arqINomeI = $_FILES["arqimageI"]["name"];
        $arqITipoI = $_FILES["arqimageI"]["type"];
        $arqITamanhoI = $_FILES["arqimageI"]["size"];
        $arqINomeTempI = $_FILES["arqimageI"]["tmp_name"];
        $erroImgMarcI = $_FILES["arqimageI"]["error"];

        
        $arqINomeP = $_FILES["arqimageP"]["name"];
        $arqITipoP = $_FILES["arqimageP"]["type"];
        $arqITamanhoP = $_FILES["arqimageP"]["size"];
        $arqINomeTempP = $_FILES["arqimageP"]["tmp_name"];
        $erroImgMarcP = $_FILES["arqimageP"]["error"];

        if($erroImgMarcI==0 && $erroImgMarcP==0){
            if(is_uploaded_file($arqINomeTempI) && is_uploaded_file($arqINomeTempP)){
                if(move_uploaded_file($arqINomeTempI,"img/filmes/interna/". $arqINomeI) && move_uploaded_file($arqINomeTempP,"img/filmes/". $arqINomeP)){
                    $caminhoII = $arqINomeI;
                    $caminhoIP = $arqINomeP;
                    
    
    $idFilmes= $_POST['id']; 
    $filme = $_POST['txFilme'];
    $diretor = $_POST['txDiretor'];
    $duracao = $_POST['txDuracao'];
    $descricao = $_POST['txDescricao'];
    $classificacao = $_POST['txClassificacao'];
    $anoL = $_POST['txAnoL'];   
    $genero = $_POST['txGenero'];
    
    include("conexao.php");

    $stmt = $pdo->prepare("
        update tbfilmes set
        filme='$filme',
        diretor='$diretor',
        duracao='$duracao',
        descricao='$descricao',
        classificacao='$classificacao',
        anoLancamento='$anoL',
        genero='$genero',
        imagemPrincipal='img/filmes/$arqINomeP',
        imagemInterna='img/filmes/interna/$arqINomeI'
        where idFilmes ='$idFilmes';
        ");	 
		    
    $stmt ->execute();    

    header("location:addfilme.php"); 
}
    else{
        $erro = "Falha ao mover imagem do marcador";
        echo "$erro";
    }
}
else{
    $erro = "Erro no envio: A imagem do marcador não foi recebida com sucesso.";
    echo "$erro";
}
}
else{
$erro = "Erro no envio: " . $erro;
echo "$erro";
}
}
else{
$erro = "Imagem do Marcador enviado não encontrado";
echo "$erro";
}


?>

