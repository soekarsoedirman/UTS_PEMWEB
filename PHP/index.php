<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Form dikirimkan<br>";
    
    if (isset($_POST['action'])) {
        echo "Tombol ditekan: " . $_POST['action'] . "<br>";
        
        $action = $_POST['action'];
        
        if ($action == "login") {
            echo "Akan redirect ke login.html<br>";
            header("Location: login.php");
            exit();
        } elseif ($action == "register") {
            echo "Akan redirect ke registrasi.html<br>";
            header("Location: ../HTML/registrasi.html");
            exit();
        }
    }
}
?>
