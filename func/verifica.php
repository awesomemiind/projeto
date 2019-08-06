<?php
session_start();
include_once('connectionDB.php');
if ((!empty($_POST['username'])) and (!empty($_POST['password']))) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $codPass = md5($password);
    
    // Pesquisar o usuario na DB
    $select = "SELECT id,username,password,ativo,nivel FROM users WHERE (username='$username') AND (password='$codPass') AND (ativo='1')"
} else {
    echo ("Error");
    header("Location: ../index.html");
}
?>