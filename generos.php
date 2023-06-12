<?php include("elementos_da_pagina/cabecalho.php") ?>
<div class="conteudo">
    <div class="container">
        <div class="tb_exibeGeneros">
            <?php
                    $stmt = $pdo->prepare("select * from tb_genero");	
                    $stmt ->execute();
        
                    while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
            ?>
            <div class="tb_exibeGeneroIMG">
                <a href="genero-interno.php?genero=<?php echo urlencode($row[1]); ?>">
                    <?php echo $row[1]; ?>        
                    <img src="<?php echo $row[2]; ?>" />   
                </a>
            </div>
            <?php }	?>
        </div>
    </div>
</div>

<?php include("elementos_da_pagina/rodape.php") ?>