<?php

session_start();

//print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])){

    //acessar o cadastro
    include_once('config.php');
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    //print_r('usuario: ' . $usuario);
    //print_r('senha: ' . $senha);

    $sql = "SELECT * FROM login_acesso WHERE usuario = '$usuario' and senha = '$senha'";

    $result = $conexao->query($sql);

    //print_r($result);

    if(mysqli_num_rows($result) < 1){

        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
         
        header('Location: login');
   
    } else{

        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;

        header('Location: formcadastrolivro.php');
        
    }


} else {

    header('Location: login.php');
}

?>