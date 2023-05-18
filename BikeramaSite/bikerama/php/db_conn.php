<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginbike";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Conecção falhou" . mysqli_connect_error());
} //else {
//     echo "conectou";
// }