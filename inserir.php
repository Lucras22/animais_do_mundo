<?php
 

?>
<title>Cadastro de Taxonômica</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/form.css">
<meta charset="UTF-8">
<div class="container">
    <br>
<div class="posicionarCabecalho">
          <img src="css/animais1.png" alt="banner" class="banner" width="1050px" height="400px">
      </div>
      <br>
    <form  class="formu" name="dadostaxonomica" action="conexao.php" method="post">
    <div>
        <table>
            <tbody> 
            <h3 class="tituloform">Cadastre um Animal</h3>
            <div class="divisao">
                <tr>
                    <td><label for="reino">reino:</label><br><select name="reino" class="select">
                    <option value="Animalia">Animalia</option>
                    
                    </select></span></td>
                </tr>
                <tr>
                    <td><label for="filo">Filo:</label><br><input class="input" type="text" name="filo" value=""><span class="input-border"></span></td>
                </tr>
                <tr>
                    <td><label for="classe">Classe:</label><br><input class="input" type="numb" name="classe" value=""><span class="input-border"></span></td>
                </tr>
                <tr>
                    <td><label for="ordem">ordem:</label><br><input class="input" type="numb" name="ordem" value=""><span class="input-border"></span></td>
                </tr>
                </div>
                <div class="divisao">
                <tr>
                    <td><label for="familia">Familia:</label><br><input class="input" type="text" name="familia" value=""><span class="input-border"></span></td>
                </tr>
                <tr>
                    <td><label for="genero">Genero:</label><br><input class="input" type="text" name="genero" value=""><span class="input-border"></span></td>
                </tr>
                <tr>
                    <td><label for="especie">Especie:</label><br><input class="input" type="numb" name="especie" value=""><span class="input-border"></span></td>
                </tr>
                <tr>
                    <td><label for="nome">Nome Vernácular:</label><br><input class="input" type="numb" name="nome" value=""><span class="input-border"></span></td>
                </tr>
                </div>
                
                <tr>
                    <td><input type="hidden" name="acao" value="inserir"></td>
                    <td><input class="button" type="submit" name="Enviar" value="Enviar"></td>

                    <td><a href="javascript:history.back()"><button class="button">Voltar</button></a></td>
                    
                </tr>
            </tbody>
        </table> 
    </form>
</div>
<br>
<footer class="rodape" id="contato">
    <div class="rodape-div">

        <div class="rodape-div-1">
            <div class="rodape-div-1-coluna">
                <!-- elemento -->
                <span><b>LOGO</b></span>
                <p>Rua David Vieira Caprichano 137 - Varzea do Canto, Boa Viagem - CE, 63870-000</p>
            </div>
        </div>

        <div class="rodape-div-2">
            <div class="rodape-div-2-coluna">
                <!-- elemento -->
                <span><b>Contatos</b></span>
                <p>animaisdomundo@gmail.com</p>
                <p>+55 88 98811-3749</p>
            </div>
        </div>

        <div class="rodape-div-3">
            <div class="rodape-div-3-coluna">
                <!-- elemento -->
                <span><b>Links</b></span>
                <p><a href="#tabela">Tabela</a></p>
                <p><a href="#animais">Animais</a></p>
                <p><a href="#sobre">Sobre</a></p>
            </div>
        </div>

        <div class="rodape-div-4">
            <div class="rodape-div-4-coluna">
                <!-- elemento -->
                <span><b>Outros</b></span>
                <p>Políticas de Privacidade</p>
            </div>
        </div>

    </div>
    <p class="rodape-direitos">Copyright © 2023 – Todos os Direitos Reservados.</p>
</footer>