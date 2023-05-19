<?php
include 'BD.class.php';
$conn = new BD();

if (!empty($_POST)) {
    try {
    } catch (Exception $e) {
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container text-center">
        <div class="card mx-auto p-8" style="width: 18rem;">
            <span class="border border-secondary">
                <h1>login</h1>
            </span>
            <?php if (isset($_GET['msg'])) {
                $msg = $_GET['msg'];
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            ' . $msg . '
          </div>';
            }
            if (isset($_GET['sucesso'])) {
                $sucesso = $_GET['sucesso'];
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        ' . $sucesso . '
      </div>';
            } ?>
            <form action="login.php" method="POST">

                <p><Label>Informe o usuario</Label>
                    <input type="text" name="user" id="" required>
                </p>
                <p><Label>Informe a senha</Label>
                    <input type="password" name="senha" id="" required>
                </p>
                <p> <button type="submit" name="submit" class="btn btn-success">Entrar</button>
                    <a href="form.php" class="btn btn-secondary">register</a>

                </p>


            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>