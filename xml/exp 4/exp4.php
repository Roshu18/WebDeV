<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    echo "Thank you, <strong>$name</strong>!<br>";
    echo "We received your message:<br>";
    echo "<em>$message</em><br>";
    echo "We will reply to <strong>$email</strong> soon.";
} else {
    echo "Invalid request.";
}
?>
