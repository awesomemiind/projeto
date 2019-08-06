<?php
session_start();
include_once('connectionDB.php');
if ((!empty($_POST)) AND (!empty($_POST['username'])) AND (!empty($_POST['password']))) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    // echo ($username.$password);
    
    // VERIFICA SE EXISTE REGISTRO COM OS DADOS
    $select = "select id,username,password,ativo,nivel from users where (username='$username') and (password='$password') and (ativo='1') limit 1";
    $query = mysqli_query($conn, $select);
    $row = mysqli_num_rows($query);
    echo ($row);
    if ($row > 0) {
        $resultado = mysqli_fetch_assoc($query);
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['username'] = $resultado['username'];
        header('Location: ../painel.html');
    } else {
        $_SESSION['msg'] = 'Login e/ou senha incorretos.';
        header("Location: ../index.html");
        exit();
    }
} else {
    $_SESSION['msg'] = 'Login e/ou senha incorretos.';
    header("Location: ../index.html");
    exit();
}
?>