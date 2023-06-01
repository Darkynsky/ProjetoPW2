<?php include("elementos_da_pagina/cabecalho.php") ?>
<div class="conteudo">
<?php 
        $id = $_GET['id'];
        // echo $id;
    ?>
<!--
<div class="containerExibe" id="containerExibe">
		<div class="form-container log-in-container">
			<form action="#">
				<h1>Login</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
					<a href="#" class="social"><i class="fab fa fa-twitter fa-2x"></i></a>
				</div>
				<span>or use your account</span>
				<input type="email" placeholder="Email" />
				<input type="password" placeholder="Password" />
				<a href="#">Forgot your password?</a>
				<button>Log In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>HTML CSS Login Form</h1>
					<p>This login form is created using pure HTML and CSS. For social icons, FontAwesome is used.</p>
				</div>
			</div>
		</div>
	</div>

-->

    <?php
        $stmt = $pdo->prepare("select * from tbfilmes where idFilmes='$id'");	
        $stmt ->execute();
        
        while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
    ?>  
        <div class="exibirFilmeInterno">
            <img src="<?php echo $row[9]; ?>" />
            <h1> <?php echo $row[1]; ?> </h1>
            <p> <?php echo $row[2]; ?> </p>                        
            <p> <?php echo $row[3]; ?> </p>                        
            <p> <?php echo $row[4]; ?> </p>                        
            <p> <?php echo $row[5]; ?> </p>                        
            <p> <?php echo $row[6]; ?> </p>                        
            <p> <?php echo $row[7]; ?> </p> 
        </div>
        
    <?php }	?>
</div>

<?php include("elementos_da_pagina/rodape.php") ?>