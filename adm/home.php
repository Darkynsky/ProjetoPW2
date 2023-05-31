<?php include("elementos_da_pagina/cabecalho.php") ?>

    <!-- EXIBIDOR DE FILMES -->
    <?php
        $stmt = $pdo->prepare("select * from tbFilmes");	
        $stmt ->execute();
        
        while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
    ?>    
            <a href="filme-interno.php?id=<?php echo $row[0]; ?> ">    
                <figure>
                    <img src="<?php echo $row[8]; ?>" />
                    <figcaption>
                        <h1> <?php echo $row[1]; ?> </h1>
                        <p> <?php echo $row[3]; ?> </p>                        
                    </figcaption>        
                </figure>
            </a>

    <?php }	?>
    <!-- FIM EXIBIDOR DE FILMES -->
    
<?php include("elementos_da_pagina/rodape.php") ?>