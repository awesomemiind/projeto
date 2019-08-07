<?php
session_start();
$nivel = $_SESSION['nivel'];
if ($nivel < 3) {
    $_SESSION['msg'] = 'Acesso não autorizado.';
    header("Location: index.html");
}
?>