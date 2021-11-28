

<?php
    session_start();
   // print_r($_SESSION);

    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
       
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);

        header('Location: login.php');
    }


//$sql = "SELECT * FROM livros ORDER BY idlivros DESC";
//$result = $conexao->query($sql);
?>



<?php

if(isset($_POST['submit'])){

       
    include_once('config.php');

    $titulo = $_POST['titulolivro'];
    $nomeautor = $_POST['nomeautor'];
    $edicao = $_POST['anoedicao'];
    $categoria = $_POST['categ'];


    $result = mysqli_query($conexao, "INSERT INTO livros(titulo,autor,edicao,categoria) 
    VALUES ('$titulo','$nomeautor','$edicao','$categoria')");
}

$logado = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomulário | cadastro livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel ="stylesheet" href="./css/form.css">
    <link href="./https://fonts.googleapis.com/css2?family=Oswald&family=Rasa:wght@400;700&family=Roboto:ital,wght@1,500&display=swap" 
    rel="stylesheet">

</head>


<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Biblioteca Municipal de Rio Das Pedras</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="infantoJuvenil.php" class="btn btn-primary me-5">Lista</a>
        </div>

        <div class="flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
      
    </nav>

  

    <br>


    <div class="campos">
    <form action="formcadastrolivro.php" method="POST">

     

            
          <legend><b>CADASTRO DE LIVROS</b></legend>   
      <br><br>
          
          <div class="preencher">
             
              <input type="text" name="titulolivro" class="input" required>
              <label for="titulolivro" class="etiqueta">Título do Livro</label>
              
          </div>

          <br><br>
          

          <div class="preencher">
            <input type="text" name="nomeautor" class="input" required>
            <label for="name" class="etiqueta">Nome do autor(a)</label>
          </div>
       
        <br><br>

        <div class="preencher">
          
            <input type="year" name="anoedicao" id="anoedicao" class="input" required>
            <label for="year" class="etiqueta">Ano de edição</label>
        </div>

        <br><br>

        <div class="preencher">
            <label for="options">Categoria</label>
            <select id="categorias" name="categ">
                <option value="Selecionar"></option>
                <option value="InfantoJuvenil">InfantoJuvenil</option>
                <option value="Romance">Romance</option>
                <option value="Bibliográfias">Bibliográfias</option>
                <option value="Drama">Drama</option>
                <option value="Ficção">Ficção</option>
                <option value="Terror e Suspense">Terror e Suspense</option>
                <option value="Concurso Público">Concurso Público</option>
                <option value="Gibi e Revistas">Gibi e Revistas</option>
                <option value="Concurso Público">Poesias e Crônicas</option>
                <option value="Clássicos">Clássicos</option>
          </select>
          </div>
          
     
        <br><br>

           <!--<div class="fotocapa">
                <input type="image" src="logo.png" class="input" required>
                
            </div>-->
            <br><br>
          

            <input type="submit" name="submit" id ="submit">

        </select>
         


   

        
    </form>

    </div>
    
</body>
</html>