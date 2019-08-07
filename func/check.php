<?php
session_start();
include_once('connectionDB.php');
if ((!empty($_POST)) AND (!empty($_POST['username'])) AND (!empty($_POST['password']))) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    // VERIFICA SE EXISTE REGISTRO COM OS DADOS
    $select = "SELECT id,username,password,ativo,nivel FROM users WHERE (username='$username') and (password='$password') and (ativo='1') limit 1";
    $query = mysqli_query($conn, $select);
    $row = mysqli_num_rows($query);
    if ($row > 0) {
        $resultado = mysqli_fetch_assoc($query);
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['nivel'] = $resultado['nivel'];
        $_SESSION['username'] = $resultado['username'];
        header("Location: ../painel.html");
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