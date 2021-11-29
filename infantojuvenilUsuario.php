<?php
  
    include_once('config.php');

    
  

    $sql = "SELECT * FROM livros ORDER BY idlivros DESC";
    $result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html>
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
            <a href="./pi_biblioteca_front/categories.php" class="btn btn-primary me-5">Voltar</a>
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
                          </td>";

                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </div>
</body>
</html>