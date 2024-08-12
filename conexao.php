<?php

// Verifica se o POST existe antes de inserir uma nova taxonomia
if(isset($_POST["acao"])){
    if ($_POST["acao"]=="inserir"){
        inserirtaxonomica();
    }
    if ($_POST["acao"]=="alterar"){
        alterartaxonomica();
    }
    if($_POST["acao"]=="excluir"){
        excluirtaxonomica();
    }
}

// Responsável por criar uma conexão com meu banco
function abrirBanco() {
    $conexao = new mysqli("localhost: 3306", "root", "", "bio");
    return $conexao;
}

// Função responsável inseir uma taxonomia no meu banco de dados
    function inserirtaxonomica() {
        $banco = abrirBanco();
        $sql = "INSERT INTO taxonomica (reino, filo, classe, ordem, familia, genero, especie, nome) 
        VALUES ('{$_POST["reino"]}','{$_POST["filo"]}','{$_POST["classe"]}','{$_POST["ordem"]}','{$_POST["familia"]}','{$_POST["genero"]}','{$_POST["especie"]}','{$_POST["nome"]}')";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

// Função responsável editar uma taxonomia no meu banco de dados
    function alterartaxonomica() {
        $banco = abrirBanco();
        $sql = "UPDATE taxonomica SET reino='{$_POST["reino"]}',filo='{$_POST["filo"]}',classe='{$_POST["classe"]}',ordem='{$_POST["ordem"]}',familia='{$_POST["familia"]}',genero='{$_POST["genero"]}',especie='{$_POST["especie"]}',nome='{$_POST["nome"]}' WHERE id='{$_POST["id"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

// Função responsável excluir uma taxonomia no meu banco de dados
    function excluirtaxonomica() {
        $banco = abrirBanco();
        $sql = "DELETE FROM taxonomica WHERE id='{$_POST["id"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

    function selectAlltaxonomica() {
        $banco = abrirBanco();
        $sql = "SELECT * FROM taxonomica ORDER BY nome";
        $resultado = $banco->query($sql);
        $banco->close();
        // Laço que pega as informações do meu banco, organiza linha a linha e armazena na var $grupo
        while($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }

    function selectIdtaxonomica($id) {
        $banco = abrirBanco();
        $sql = "SELECT * FROM taxonomica WHERE id=".$id;
        $resultado = $banco->query($sql);
        $banco->close();
        // Laço que pega as informações do meu banco, organiza linha a linha e armazena na var $grupo
        $taxonomica = mysqli_fetch_assoc($resultado);
        return $taxonomica;
    }

// Após inserir uma nova taxonomia, retorna para a página principal
    function voltarIndex(){
        header("Location:index.php");
    }

?>