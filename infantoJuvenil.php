<?php
  
    include_once('config.php');

    
  

    $sql = "SELECT * FROM livros ORDER BY idlivros DESC";
    $result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Biblioteca|Rio das Pedras</title>
    <style>
        body{
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
            text-align: center;
        }
        .table-bg{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
        }
        </style>
</head>
<body>
<!--<a href="formcadastrolivro.php">Voltar</a>-->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Biblioteca Municipal de Rio Das Pedras</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="formcadastrolivro.php" class="btn btn-primary me-5">Voltar</a>
        </div>

        <div class="flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
      
    </nav>

   
   
    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">titulo</th>
                    <th scope="col">autor</th>
                    <th scope="col">edicao</th>
                    <th scope="col">categoria</th>
                   
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                            echo "<td>".$user_data['idlivros']."</td>";
                            echo "<td>".$user_data['titulo']."</td>";
                            echo "<td>".$user_data['autor']."</td>";
                            echo "<td>".$user_data['edicao']."</td>";
                            echo "<td>".$user_data['categoria']."</td>";
                            echo "<td>
                            
                                <a class= 'btn btn-sm btn-danger'  href='delete.php?idlivros=$user_data[idlivros]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>

                                </a>
                          </td>";

                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </div>
</body>
</html>