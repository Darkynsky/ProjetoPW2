<?php include("elementos_da_pagina/cabecalho.php") ?>
<div class="conteudo">
    <div id="gerenciadorFilmes">

        <!-- FORMULARIO ADD GENERO -->
        <form action="adicionar-genero.php" enctype="multipart/form-data" method="post" id="containerGeneroAdd">
            
            <table>
                    <tr>
                        <td>
                        <input type="text" placeholder="Genero" name="txAddGenero" class="campTextGenero"/>
                        </td>
                        <td>
                            <input type="file" name="arqimageGenero" id="arqimageGenero"/>
                            <label for="arqimageGenero">Imagem Genero</label>
                        </td>
                        <td>
                            <span class="textGenero">nenhuma imagem escolhida</span>
                        </td>
                        <td>
                            <input type="submit" value="ADD GENERO" class="btn_addGenero"/>
                        </td>
                    </tr>
            </table>
        </form>

        <!-- FIM FORMULARIO ADD GENERO -->
        <!-- FORMULARIO ADD FILME -->
        <div id="addFilme">
            <P>ADICIONAR FILME</P>
            <form action="filme-salvar.php" enctype="multipart/form-data" method="post">
                <input type="text" placeholder="Filme" name="txFilme" class="campText"/>
                <input type="text" placeholder="Diretor" name="txDiretor" class="campText"/>
                <input type="text" placeholder="Duração" name="txDuracao" class="campText"/>
                <input type="text" placeholder="Classificação" name="txClassificacao" class="campText"/>
                <input type="text" placeholder="Ano de Lançamento" name="txAnoL" class="campText"/>

                <select name="txGenero" class="campText">
                <option value="" class="campOption"></option>
                    <?php
                    $stmt = $pdo->prepare("select * from tb_genero");
                    $stmt ->execute();
                    while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                        ?>
                        <option value="<?php echo $row['genero'] ?>" class="campOption">
                        <?php echo $row['genero'] ?>
                    </option>
                    <?php }	?>
                </select>

                <table>
                    <tr>
                        <td>
                            <input type="file" name="arqimageP" id="arqimageP"/>
                            <label for="arqimageP">Imagem Principal</label>
                        </td>
                        <td>
                            <span class="text1">nenhuma imagem escolhida....</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="file" name="arqimageI" id="arqimageI"/>
                            <label for="arqimageI">Imagem Interna</label></th>
                        <td>
                            <span class="text2">nenhuma imagem escolhida....</span>
                        </td>
                    </tr>
                </table>              
                    

                <textarea placeholder="Descrição do filme" name="txDescricao" class="campTextArea"></textarea><br/>
                
                <textarea placeholder="Link do Trailer" name="txTrailer" class="campTextTrailer"></textarea><br/>
                <input type="submit" value="SALVAR FILME" class="btn_salvar"/>
            </form>
        </div>
        <!-- FIM FORMULARIO ADD FILME -->

        <!-- FORMULARIO EDITAR FILME -->
        <div id="addFilme">
            <P>ATUALIZAR FILME</P>
            <form action="filme-editar.php" enctype="multipart/form-data" method="post">

                <input type="hidden" name="id" value="<?php echo @$_GET['idFilme']; ?>" />	

                <input type="text" placeholder="Filme" name="txFilme" class="campText" value="<?php echo @$_GET['filme']; ?>"/>
                <input type="text" placeholder="Diretor" name="txDiretor" class="campText" value="<?php echo @$_GET['diretor']; ?>"/>
                <input type="text" placeholder="Duração" name="txDuracao" class="campText" value="<?php echo @$_GET['duracao']; ?>"/>
                <input type="text" placeholder="Classificação" name="txClassificacao" class="campText" value="<?php echo @$_GET['classificacao']; ?>"/>
                <input type="text" placeholder="Ano de lançamento" name="txAnoL" class="campText" value="<?php echo @$_GET['ano']; ?>"/>

                <select name="txGenero" class="campText">
                    <option value="" class="campOption"></option>
                    <?php
                    $stmt = $pdo->prepare("select * from tb_genero");
                    $stmt ->execute();
                    while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                        ?>
                        <option value="<?php echo $row['genero'] ?>" class="campOption">
                        <?php echo $row['genero'] ?>
                    </option>
                    <?php }	?>
                </select> 

                <table>
                    <tr>
                        <td>
                            <input type="file" name="arqimageP" id="arqimagePEdit" value="<?php echo @$_GET['imagemPrincipal']; ?>"/>
                            <label for="arqimagePEdit">Imagem Principal</label>
                        </td>
                        <td>
                            <span class="text3">nenhuma imagem escolhida....</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="file" name="arqimageI" id="arqimageIEdit" value="<?php echo @$_GET['imagemInterna']; ?>"/>
                            <label for="arqimageIEdit">Imagem Interna</label></th>
                        <td>
                            <span class="text4">nenhuma imagem escolhida....</span>
                        </td>
                    </tr>
                </table>       

                <textarea placeholder="Descrição do filme" name="txDescricao" class="campTextArea">
                    <?php echo @$_GET['descricao']; ?> 
                </textarea><br/>

                <textarea placeholder="Link do Trailer" name="txTrailer" class="campTextTrailer">
                    <?php echo @$_GET['linkTrailer']; ?> 
                </textarea><br/>
                <input type="submit" value="ATUALIZAR FILME" class="btn_salvar"/>

            </form>
        </div>
        <!-- FIM FORMULARIO EDITAR FILME -->
    

    
    <!-- LISTA EXIBIR FILMES -->
    <table class="tbExibicao">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Filme</th>
                <th scope="col">Diretor</th>
                <th scope="col">Duração</th>                
                <th scope="col" >Descrição</th>
                <th scope="col">Classificação</th>
                <th scope="col" >Ano</th>
                <th scope="col">Gênero</th>
                <th scope="col">imagemPrincipal</th>
                <th scope="col">imagemInterna</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $stmt = $pdo->prepare("select * from tbfilmes");	
                $stmt ->execute();
                
                while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                  echo "<tr class='celula'>";
                    echo "<td> $row[0] </td>";						
                    echo "<td> $row[1] </td>";						
                    echo "<td> $row[2] </td>";						
                    echo "<td> $row[3] </td>";											
                    echo "<td class='celulaDescricao'> $row[4] </td>";											
                    echo "<td> $row[5] </td>";											
                    echo "<td> $row[6] </td>";											
                    echo "<td> $row[7] </td>";											
                    echo "<td class='celulaImagem'> $row[8] </td>";											
                    echo "<td class='celulaImagem'> $row[9] </td>";
                    echo "<td> 
                            <a href='?idFilme=$row[0]&filme=$row[1]&diretor=$row[2]&duracao=$row[3]&descricao=$row[4]
                            &classificacao=$row[5]&ano=$row[6]&genero=$row[7]&imagemPrincipal=$row[8]&imagemInterna=$row[9]&trailer=$row[10]'>
                                <img src='img/icon/editar.png' style='width: 20px'>
                            </a>
                            <a href='filme-remover.php?id=$row[0]'> 
                                <img src='img/icon/remover.png' style='width: 20px'>
                            </a>
                          </td>";
                  echo "</tr>";
                }	
            ?>
        </tbody>
    </table>
    <!-- FIM LISTA EXIBIR FILMES -->
    </div>
</div>

<?php include("elementos_da_pagina/rodape.php") ?>