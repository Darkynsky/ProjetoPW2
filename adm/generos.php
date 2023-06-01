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
                <?php echo $row[1]; ?>        
                <img src="<?php echo $row[2]; ?>" />   
            </div>
            <?php }	?>
        </div>
    </div>
</div>

<?php include("elementos_da_pagina/rodape.php") ?>