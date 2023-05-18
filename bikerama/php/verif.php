<?php

include "db_conn.php";
if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $user = $_POST['user'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $confSenha = $_POST['confSenha'];

    $verificacao = "SELECT `id`, `nome`, `user`, `email`, `senha` FROM `usuario` WHERE user='$user'";
    $resultveri = mysqli_query($conn, $verificacao);
    $quantidade = mysqli_num_rows($resultveri);
    if ($quantidade == 0) {

        if (empty($nome) || empty($user) || empty($senha)) {
            header("Location: register.php?msg=Preencha todos os campo");
        } elseif (password_verify($confSenha, $senha) == false) {
            header("Location: register.php?msg=As senhas nao conferem");
        } else {
            $sql = "INSERT INTO `usuario`(`id`, `nome`, `user`, `email`, `senha`) VALUES ('null','$nome','$user','$email','$senha')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("Location: index.php?sucesso=Usuario cadastrado com sucesso");
            } else {
                header("Location: register.php?msg=Ocorreu um erro");
            }
        }
    } else {
        header("Location: register.php?msg=Nome de usuario ja utilizado");
    }
}
