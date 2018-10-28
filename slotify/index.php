<?php
    // Database configuration
    require 'includes/config.php';

    // Classes
    require 'includes/classes/Constants.php';

    if(isset($_SESSION['userLoggedIn'])) {
        $userLoggedIn = $_SESSION['userLoggedIn'];
    } else {
        header('Location: register.php');
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo Constants::$title; ?></title>
</head>
<body>
    <h1>Welcome to Slotify -- User Page</h1>
    <p>
        User Info: <?php echo $userLoggedIn; ?>
    </p>

    <p>
        <button name="Logout">Logout</button>
    </p>
</body>
</html>