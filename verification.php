<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInput = $_POST['captcha'];

    if ($userInput === $_SESSION['captcha']) {
        echo "CAPTCHA correct !";
    } else {
        echo "CAPTCHA incorrect !";

    }
} else {
    header("Location: index.html");
}
?>
