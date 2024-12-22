<?php

$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $interes = trim($_POST['interes']);


    if (empty($username) || empty($password) || empty($email) || empty($interes)) {
        $error_message = 'Semua kolom wajib diisi!';
        header("Location: login.php?error=" . urlencode($error_message));
        exit();
    }
    else {
        header("Location: login.php?error=" . urlencode($error_message));
        exit();
    }
           
}
?>