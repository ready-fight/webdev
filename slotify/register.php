<?php
    // Handlers
    require "includes/handlers/login-handler.php";
    require "includes/handlers/register-handler.php";
?>

<html lang="en">
<head>
    <title>Welcome to Slotify!</title>
</head>
<body>
    <div id="inputContainer">
        <form action="register.php" id="loginForm" method="POST">
            <h2>Login to your account</h2>
            
            <p>
                <?php if(isset($_POST['loginButton'])) : ?>
                <?php echo $account->getError() ?>
                <?php endif; ?>
                <label for="loginUsername">Username: </label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. adrianRuiz" required />
            </p>
            <p>
                <label for="loginPassword">Password: </label>
                <input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required />
            </p>

            <button type="submit" name="loginButton">LOG IN</button>

        </form>

        <form action="register.php" id="registerForm" method="POST">

            <h2>Create your account</h2>
            
            <p>
                <?php echo $account->getError(); ?>
                <label for="username">Username: </label>
                <input id="username" name="username" type="text" placeholder="e.g. adrianRuiz" value="<?php $account->getInputValue('username'); ?>" required />
            </p>

            <p>
                <label for="firstName">First Name: </label>
                <input id="firstName" name="firstName" type="text" placeholder="e.g. Adrian" value="<?php $account->getInputValue('firstName'); ?>" required />
            </p>

            <p>
                <label for="lastName">Last Name: </label>
                <input id="lastName" name="lastName" type="text" placeholder="e.g. Ruiz" value="<?php $account->getInputValue('lastName'); ?>" required />
            </p>

            <p>
                <label for="email">Email: </label>
                <input id="email" name="email" type="email" placeholder="e.g. aRuiz@gmail.com" value="<?php $account->getInputValue('email'); ?>" required />
            </p>

            <p>
                <label for="email2">Confirm Email: </label>
                <input id="email2" name="email2" type="email" placeholder="e.g. aRuiz@gmail.com" value="<?php $account->getInputValue('email2'); ?>" required />
            </p>

            <p>
                <label for="password">Password: </label>
                <input id="password" name="password" type="password" placeholder="Your password" required />
            </p>

            <p>
                <label for="password2">Confirm Password: </label>
                <input id="password2" name="password2" type="password" placeholder="Your password" required />
            </p>

            <button type="submit" name="registerButton">SIGN UP</button>

        </form>
    </div>
</body>
</html>