<?php 
    /* THE SOCIAL NETWORK */
    /* Adrian Ruiz © Copyright January 23rd, 2019 */
    /* Created with PHP, Javascript, MySQl */
    /* With the assistance of the CSS Framework Bootstrap v4.2.1  */
    /* Develop with ambition, create something amazing!  */

    require 'includes/config.php';

    // Declaring variables to prevent error
    $fname = "";
    $lname = "";
    $email = "";
    $email2 = "";
    $pwd = "";
    $pwd2 = "";
    $date = ""; // Sign-up date
    $error_array = []; // Hold error messages

    if(isset($_POST['register_button'])) {

        // Registration form values

        // First name
        $fname = strip_tags($_POST['reg_fname']); // Remove html tags
        $fname = str_replace(' ', "", $fname); // Remove spaces
        $fname = ucfirst(strtolower($fname));
        $_SESSION['reg_fname'] = $fname;

        // Last name
        $lname = strip_tags($_POST['reg_lname']); // Remove html tags
        $lname = str_replace(' ', "", $lname); // Remove spaces
        $lname = ucfirst(strtolower($lname));
        $_SESSION['reg_fname'] = $lname;

        // Email
        $email = strip_tags($_POST['reg_email']); // Remove html tags
        $email = str_replace(' ', "", $email); // Remove spaces
        $email = ucfirst(strtolower($email));
        $_SESSION['email'] = $email;

        // Email 2
        $email2 = strip_tags($_POST['reg_email2']); // Remove html tags
        $email2 = str_replace(' ', "", $email2); // Remove spaces
        $email2 = ucfirst(strtolower($email2));
        $_SESSION['email2'] = $email2;

        // Password
        $pwd = strip_tags($_POST['reg_password']); // Remove html tags
        $pwd2 = strip_tags($_POST['reg_password2']); // Remove html tags

        // Current date
        $date = date("Y-m-d");

        if($email !== $email2) {
            array_push($error_array, "Emails do not match.");
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($error_array, "Invalid email format<br>");
        } else if($email == $email2) {
            $e_check = mysqli_query($con, "SELECT email from users WHERE email = '$email'");
            $num_rows = mysqli_num_rows($e_check);
            
            if($num_rows > 0) {
                array_push($error_array, "Email already in use<br>");
            } else {
                // mysqli_query($con, "INSERT INTO users VALUES(NULL, '$fname', '$lname', '')");
            }
        }

        if(strlen($fname) > 25 || strlen($fname) < 2) {
            array_push($error_array, "Your first name must be between 2 and 25 characters<br>");
        }

        if(strlen($lname) > 25 || strlen($lname) < 2) {
            array_push($error_array, "Your last name must be between 2 and 25 characters<br>");
        }

        if($pwd !== $pwd2) {
            array_push ($error_array, "Passwords do not match.<br>");
        } else if(preg_match('/[^A-Za-z0-9]/', $pwd)) {
            array_push($error_array, "Your password can only contain English letters or numbers.<br>");
        }

        if(strlen($pwd) > 30 || strlen($pwd) < 5) {
            array_push($error_array, "Your password must be between 5 and 30 characters.<br>");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Social</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <form action="register.php" method="POST">
        <input type="text" name="reg_fname" placeholder="First Name" value="<?php if (isset($_SESSION['reg_fname'])) {
            echo $_SESSION['reg_fname'];
        }
        ?>" id="" required>
        <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) {
            echo "Your first name must be between 2 and 25 characters<br>";
        }
        ?>
        <input type="text" name="reg_lname" placeholder="Last Name" value="<?php if (isset($_SESSION['reg_lname'])) {
            echo $_SESSION['reg_lname'];
        }
        ?>" id="" required>
        <?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) {
            echo "Your last name must be between 2 and 25 characters<br>";
        }
        ?>
        <input type="email" name="reg_email" placeholder="Email" value="<?php if (isset($_SESSION['email'])) {
            echo $_SESSION['email'];
        } 
        ?>" id="" required>
        <input type="email" name="reg_email2" placeholder="Confirm Email" value="<?php if (isset($_SESSION['email2'])) {
            echo $_SESSION['email2'];
        }
        ?>" id="" required>
        <?php if(in_array("Emails do not match.<br>", $error_array)) echo "Emails do not match.<br>";
        else if(in_array("Invalid email format.<br>", $error_array)) echo "Invalid email format.<br>";
        else if(in_array("Email already in use<br>", $error_array)) echo "Email already in use.<br>";
        ?>
        <input type="password" name="reg_password" placeholder="Password" id="" required>
        <input type="password" name="reg_password2" placeholder="Confirm Password" id="" required>
        <?php if(in_array("Passwords do not match.<br>", $error_array)) echo "Passwords do not match<br>";
        else if(in_array("Your password can only contain English letters or numbers.<br>", $error_array)) echo "Your password can only contain English letters or numbers.<br>";
        else if(in_array("Your password must be between 5 and 30 characters.<br>", $error_array)) echo "Your password must be between 5 and 30 characters.<br>";
        ?>
        <input type="submit" name="register_button" value="Register">
    </form>
</body>
</html>