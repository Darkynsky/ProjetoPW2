<?php include("elementos_da_pagina/cabecalho.php"); ?>
<div class="conteudo">
    <div class="container">
        <div class="tb_exibeFilmes">
            <?php
                // Verifica se o parâmetro 'genero' está presente na URL
                if(isset($_GET['genero'])){
                    $genero = $_GET['genero'];
                    
                    // Consulta os filmes correspondentes ao gênero selecionado
                    $stmt = $pdo->prepare("SELECT * FROM tbFilmes WHERE genero = '$genero'");
                    $stmt->execute();

                    while($row = $stmt->fetch(PDO::FETCH_BOTH)){
                        // Exibe os filmes
                        ?>
                        <a href="filme-interno.php?id=<?php echo $row[0]; ?> ">
                            <figure class="elemento">
                                <img src="<?php echo $row[8]; ?>"/>
                                <?php echo $row[1]; ?>
                                <?php echo $row[3]; ?>
                            </figure>
                        </a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
</div>

<?php include("elementos_da_pagina/rodape.php"); ?>
