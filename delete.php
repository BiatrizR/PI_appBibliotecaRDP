<?php

if(!empty($_GET['idlivros'])){


    include_once('config.php');

    $idlivros = $_GET['idlivros'];

    $sqlSelect = "SELECT * FROM livros WHERE idlivros=$idlivros";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){

        $sqlDelete = "DELETE FROM livros WHERE idlivros=$idlivros";
        $resultDelete = $conexao->query($sqlDelete);
    }
}

header('Location: infantoJuvenil.php');

?>