<?php
include 'BD.class.php';
$conn = new BD();
if (!empty($_POST)) {
    try {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            throw new Exception(" Formato de e-mail inválido. ");
        }
        if (empty($_POST['id'])) {
            $conn->inserir($_POST);
        }
    } catch (Exception $e) {
        $id = $_POST['id'];
        header("location: form.php?id=$id&error=" . $e->getMessage());
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
</head>

<body>

    <div class="container text-center ">

        <div class="card mx-auto p-8" style="width: 18rem;">
            <span class="border border-secondary">
                <h1>Register</h1>
            </span>


            <form action="form.php" method="post">
                <?php echo (!empty($_GET["error"]) ? $_GET['error'] : "") ?>

                <input type="hidden" name="id" value="">
                <p><Label>Informe seu nome:</Label>
                    <br />
                    <input type="text" name="nome" id="" required>
                </p>
                <p><Label>Informe o nome do usuario:</Label>
                    <br />
                    <input type="text" name="user" id="" required>
                </p>

                <p><Label>Informe o seu email:</Label>
                    <br />
                    <input type="text" name="email" id="">
                </p>
                <p><Label>Informe a sua senha:</Label>
                    <br />
                    <input type="password" name="senha" id="">
                </p>
                <p><Label>Confirme sua senha:</Label>
                    <br />

                    <input type="password" name="confSenha" id="">
                </p>

                <button type="submit" class="btn btn-success" name="submit">Cadastrar</button>
                <!-- <a href="index.php" class="btn btn-danger">Cancel</a> -->

            </form>


        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>