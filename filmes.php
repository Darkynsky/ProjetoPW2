<?php include("elementos_da_pagina/cabecalho.php") ?>

<div class="bannerADM">
    <div class="bannerSubADM">
        <img src="img/catalogo.png" alt="">
    </div>
</div>

<div class="containerPHP">
    <div class="conteudoPHP">

        <?php
        $stmt = $pdo->prepare("select * from tbFilmes");	
        $stmt ->execute();
        
        $filmes = array();
        
        while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
            $filmes[] = $row;
        }
        
        usort($filmes, function($a, $b) {
            return strcmp($a[1], $b[1]);
        });
        
        foreach($filmes as $filme) {
    ?>

        <a href="filme-interno.php?id=<?php echo $filme[0]; ?> ">
            <figure class="elemento">
                <img src="<?php echo $filme[8]; ?>"/>
                <?php echo $filme[1]; ?>
                <?php echo $filme[3]; ?>
            </figure>

        </a>

        <?php }	?>


    </div>
</div>
<?php include("elementos_da_pagina/rodape.php") ?>