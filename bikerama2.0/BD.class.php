<?php
class BD
{
    private $host = "localhost";
    private $dbname = "db_bike";
    private $usuario = "root";
    private $senha = "";

    public function conn()
    {
        $conn = mysqli_connect($this->host, $this->usuario, $this->senha, $this->dbname);
        return $conn;
    }
    public function inserir($dados)
    {
        $conn = $this->conn();
        $sql = "INSERT INTO `usuario`(`id`, `nome`, `user`, `senha`, `email`) VALUES (?,?,?,?,?)";
        $st = $conn->prepare($sql);
        $st->execute(['null', $dados['nome'], $dados['user'], $dados['senha'], $dados['email']]);
    }
    public function login($dados)
    {
        $conn = $this->conn();
        $sql = "SELECT `id`, `nome`, `user`, `senha`, `email` FROM `usuario` WHERE user=? ";
        $st = $conn->prepare($sql);
        $st->execute($dados['user']);
    }
}
