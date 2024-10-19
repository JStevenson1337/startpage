<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="path_to_logo/logo.png" alt="Site Logo">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php" class="<?php if($page == 'home') { echo 'active'; } ?>">Home</a></li>
                <li><a href="about.php" class="<?php if($page == 'about') { echo 'active'; } ?>">About</a></li>
                <li><a href="services.php" class="<?php if($page == 'services') { echo 'active'; } ?>">Services</a></li>
                <li><a href="contact.php" class="<?php if($page == 'contact') { echo 'active'; } ?>">Contact</a></li>
                <?php if (isset($_SESSION['username'])): ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <button id="theme-toggle" onclick="toggleTheme()">Switch Theme</button>
    </header>
