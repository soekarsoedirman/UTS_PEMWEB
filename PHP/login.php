<?php
$valid_users = [
    'sabiq' => 'imam123',
    'himam' => 'abiq123',
];

$error_message = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        $error_message = 'Username dan password wajib diisi!';
        header("Location: login.php?error=" . urlencode($error_message));
        exit();
    }

    if (isset($valid_users[$username]) && $valid_users[$username] === $password) {
        header("Location: dasboard.php");
        exit();
    } else {
        $error_message = 'Username atau password salah!';
        header("Location: login.php?error=" . urlencode($error_message));
        exit();
    }
}

if (isset($_GET['error'])) {
    $error_message = $_GET['error'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
    <div class="countainer">
        <div class="judul">
            <a href="../index.html"><h1>Soekar Course</h1></a>
            <h3>the best course to be programmer</h3>
        </div>
        <div class="login">
            <form method="post" action="login.php">
                <h3>Log in to your account</h3>
                <br>
                
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <br>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                
                
                <?php if (!empty($error_message)): ?>
                    <p style="color:red;"><?php echo htmlspecialchars($error_message); ?></p>
                <?php endif; ?>

                <br>

                <button type="submit">Submit</button>
                <br>
                <p>Don't have an account? <a href="../HTML/registrasi.html">Register</a></p>
            </form>
        </div>
    </div>
</body>
</html>