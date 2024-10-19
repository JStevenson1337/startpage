<!-- index.php -->
<?php
session_start();
if (!isset($_SESSION['username'])) {
    // Redirect the user to the login page if they're not logged in
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to the protected area</h1>
        <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
        <a href="logout.php">Logout</a>
    </header>
</body>
</html>
