<?php
session_start();
//this fun is required to reach to new dashboard page after setting some value
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["username"] == "user" && $_POST["password"] == "password") {
        $_SESSION['user_id'] = 1;
        header("Location: dashboard.php");
        exit();
    } else {
        $error_message = "Invalid credential";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <!-- <?php
        if($error_message){
            echo "$error_message ";
        }
    ?> -->
    <h2>Login Form</h2>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" ><br>
        <label for="password">Password:</label>
        <input type="password" name="password" ><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>