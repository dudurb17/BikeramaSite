<?php

use LDAP\Result;

include "db_conn.php";
if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $senha = $_POST['senha'];
    $sql_code = "SELECT `id`, `nome`, `user`, `email`, `senha` FROM `usuario` WHERE user='$user' LIMIT 1";
    $sql_query = mysqli_query($conn, $sql_code);
    $usuario = mysqli_fetch_assoc($sql_query);

    if ($sql_query == false || password_verify($senha, $usuario['senha']) == false) {
        header("Location: index.php?msg=Usuario ou senha incorreto");
    } else {
        header('Location: ../index.php');
        session_start();
        $_SESSION["user"] = $user; //salvando o user na sessão

    }
}