<!DOCTYPE html> 

<?php include("conexao.php");

    $grupo = selectAlltaxonomica();
    
?>

<html lang="pt-br"> 
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Taxonômia Animal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/tabela.css">
    <link rel="shortcut icon" href="css/icon.png" type="image/x-icon">
</head>
<div class="container">
    <body>
     <div class="posicionarCabecalho">
          <img src="css/animais.png" alt="banner" class="banner" width="1050px" height="400px">
      </div>
      <div class="text-center">
      <a href="inserir.php"><button type="button" class="btn btn-primary">Adicionar taxonomica</button></a>
      </div>
      <table id="tabela" border="1" class="table">
          <thead class="thead-light">
              <tr>
                  <th>Reino</th>
                  <th>Filo</th>
                  <th>Classe</th>
                  <th>Ordem</th>
                  <th>Familia</th>
                  <th>Genero</th>
                  <th>Especie</th>
                  <th>Nome Vernácular</th>
                  <th>Editar</th>
                  <th>Excluir</th>
              </tr>
          </thead>
          <tbody>
             <?php 
                foreach($grupo as $taxonomica) { ?> 

                   <tr>
                      <th><?=$taxonomica["reino"]?></th>
                      <th><?=$taxonomica["filo"]?></th>
                      <th><?=$taxonomica["classe"]?></th>
                      <th><?=$taxonomica["ordem"]?></th>
                      <th><?=$taxonomica["familia"]?></th>
                      <th><?=$taxonomica["genero"]?></th>
                      <th><?=$taxonomica["especie"]?></th>
                      <th><?=$taxonomica["nome"]?></th>
                      <th>
                          <form name="alterar" action="alterar.php" method="post">
                              <input type="hidden" class="button" name="id" value="<?=$taxonomica["id"]?>">
                              <input type="submit" class="button" name="editar" value="Editar">
                          </form>
                      </th>
                      <th>
                          <form name="excluir" action="conexao.php" method="post">
                              <input type="hidden" class="button" name="id" value="<?=$taxonomica["id"]?>">
                              <input type="hidden" class="button" name="acao" value="excluir">
                              <input type="submit" class="button" name="excluit" value="Excluir">
                          </form>
                      </th>
                  </tr>   
                <?php }
              ?>
          </tbody>
     </table>
     <br> <br> <br>
     <div id="animais" class="animaisdomundo">

     <div class="vt">
     <img class="animais" src="css/mamiferos.png" alt="Mamíferos">
         <h2>Mamíferos</h2>
            <p>Quantidade de espécies <br> de mamíferos no Mundo: 5.416</p>
     </div>

     <div class="vt">
     <img class="animais" src="css/inseto.png" alt="Aves">
         <h2>Insetos</h2>
            <p>Quantidade de espécies <br> de insetos no Mundo: 900.000</p>
     </div>

     <div class="vt">
     <img class="animais" src="css/peixe.png" alt="plantas">
       <h2>Peixes</h2>
            <p>Quantidade de espécies <br> de peixes  no Mundo: 31.000</p>
     </div>

    </div>
    <br>
    <div class="nos">
<div class="img">
<img class="imgsobre" src="css/sobre.png">
</div>

<div class="texto">
    <h3 class="titu">Sobre Nós</h3>
<p class="sobre">Nosso objetivo com esse banco de dados e buscar mostrar a você o quão grande é nosso mundo animal <br> por tal motivo utilizando esse banco podemos catalogar animais novos e existentes, <br> o site ainda passa por melhorias e mais em breve teremos muitas alterações <br> tambem temos o objetivo de ganhar nota em biologia (hahahaha)</p>
</div>
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
    </body>
</html>