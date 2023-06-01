<?php include("elementos_da_pagina/cabecalho.php") ?>
<div class="containerPHP">
    <div class="conteudoPHP">

        <?php
        $stmt = $pdo->prepare("select * from tbFilmes");	
        $stmt ->execute();
        
        while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
    ?>

        <a href="filme-interno.php?id=<?php echo $row[0]; ?> ">
            <figure>
                <img src="<?php echo $row[8]; ?>"/>
                <?php echo $row[1]; ?>
                <?php echo $row[3]; ?>
            </figure>
        </a>

        <?php }	?>

    </div>
</div>
<?php include("elementos_da_pagina/rodape.php") ?>