<?php
// login.php
session_start();
include('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuario encontrado
        $_SESSION['email'] = $email;
        header("location: welcome.php");
    } else {
        $_SESSION['error'] = "Usuario o clave incorrectos.";
        header("location: index.php");
        exit();
    }
}
?>