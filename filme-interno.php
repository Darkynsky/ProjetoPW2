<?php include("elementos_da_pagina/cabecalho.php") ?>
<div class="conteudo">
<?php 
        $id = $_GET['id'];
        // echo $id;
    ?>
    <?php
        $stmt = $pdo->prepare("select * from tbfilmes where idFilmes='$id'");	
        $stmt ->execute();
        
        while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
    ?>  
        <div class="exibirFilmeInterno">
			<h1> <?php echo $row[1]; ?> </h1>
            
            <p class="center-text">			
				Diretor: <?php echo $row[2]; ?>                          
            	| Gênero: <?php echo $row[7]; ?>                          
            	| Classificação: <?php echo $row[5]; ?>                          
            	| Ano: <?php echo $row[6]; ?> 
			</p>
			<p class="justify-text">
				<img src="<?php echo $row[9]; ?>" align="left"/>                        
            	<?php echo $row[4]; ?>
			</p>
        </div>
        
    <?php }	?>
</div>

<?php include("elementos_da_pagina/rodape.php") ?>