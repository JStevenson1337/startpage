<!-- login.php -->
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Hardcoded credentials (in practice, passwords should always be hashed)
    $stored_username = "admin";
    $stored_password = password_hash("admin123", PASSWORD_DEFAULT); // Hashed password

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password match
    if ($username === $stored_username && password_verify($password, $stored_password)) {
        // Set the session and redirect the user to the index page
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <form action="login.php" method="POST">
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
