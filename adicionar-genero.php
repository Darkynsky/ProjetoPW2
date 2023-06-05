<?php 

    //imagem do marcador
    if(isset($_FILES["arqimageGenero"])){
        $arqINomeGenero = $_FILES["arqimageGenero"]["name"];
        $arqITipoGenero = $_FILES["arqimageGenero"]["type"];
        $arqITamanhoGenero = $_FILES["arqimageGenero"]["size"];
        $arqINomeTempGenero = $_FILES["arqimageGenero"]["tmp_name"];
        $erroImgMarcGenero = $_FILES["arqimageGenero"]["error"];

        if($erroImgMarcGenero==0){
            if(is_uploaded_file($arqINomeTempGenero)){
                if(move_uploaded_file($arqINomeTempGenero,"img/capas_generos/". $arqINomeGenero)){
                    $caminhoIGenero = $arqINomeGenero;

                    $generoAdd = $_POST['txAddGenero'];
    
                    include("conexao.php");

                    $stmt = $pdo->prepare("insert into tb_genero 
                    values(null,'$generoAdd', 'img/capas_generos/$arqINomeGenero')");	    
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