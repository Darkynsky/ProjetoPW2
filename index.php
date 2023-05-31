<?php include("conexao.php") ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script defer="defer" src="config.js"></script>
    <title>LOGIN</title>
</head>
<body>
    <a href="adm\home.php"><button>ADM</button></a>
    <a href="user\home.php"><button>USUARIO</button></a>
    <div id="totalPage">

        <!--LOGIN-->
        <div id="container1">
        <form method="post" action="iniciar-sessão-user.php" id="formLogin">
            <h4>Já possui cadastro? <br/> Faça o login</h4>
            <label for="usuario">Usuário</label><br />
            <input type="text" placeholder="Ex.:Félix" name="usuario" required="" oninvalid="setCustomValidity('Informe seu usuário')" oninput="setCustomValidity('')"><br />
            <label for="password">Senha</label><br />
            <input type="password" placeholder="Digite a senha" name="password" required="" oninvalid="setCustomValidity('Informe sua senha')" oninput="setCustomValidity('')"><br />
            <input type="submit" value="Entrar">               
        </form>        
        </div>
        <!--FIM LOGIN-->


        <!--CADASTRO DE USUARIO-->
        <div id="container2">
        <form method="post" action="cadastrar-usuario.php" id="formCadastro">            
            <h4>Não possui cadastro? <br/> Cadastre-se!</h4>
            <label for="usuario">Usuário</label>
            <input type="text" placeholder="Ex.:Félix" name="txUsuario" required><br/>
            <label for="emailUser">Email</label><br/>
            <input type="text" placeholder="Ex.:felix@teste.com" name="txEmailUser" required><br/>
            <label for="txSenha">Senha</label>
            <input type="password" placeholder="Digite a senha" id="password" name="txSenha" require><br/>
            <label for="txSenha">Repita a senha</label>
            <input type="password" placeholder="Digite a senha novamente" id="confirm_password" name="txSenha" require><br/>
            <input type="submit" value="Cadastrar">
        </form>
        </div>
        <!-- FIM CADASTRO DE USUARIO-->
    </div>
</body>
</html>