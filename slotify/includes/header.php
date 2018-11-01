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
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body>

        <div id="mainContainer">
            <div id="topContainer">
                <?php require 'includes/navBarContainer.php'; ?>

                <div id="mainViewContainer">
                
                    <div id="mainContent">