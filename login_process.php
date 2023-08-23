<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once('config.php');
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT id, username, email FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = $user["username"];
        $_SESSION["email"] = $user["email"];
        header("Location: dashboard.php");
    } else {
        $error = "Invalid username or password.";
    }

    mysqli_close($conn);
}
?>