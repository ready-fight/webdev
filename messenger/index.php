<?php include 'init.php'; ?>

<?php if(!isset($_SESSION['user_id'])): ?>
    <?php header("location: login.php"); ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <?php include 'components/css.php'; ?>
</head>
<body>
    <?php if(isset($_SESSION['loader'])): ?>
    <div class="loader-area">
        <div class="loader">
            <div class="loader-item">
            </div>
        </div>
    </div>
    <?php unset($_SESSION['loader']); ?>
    <?php endif ?> 
</body>
</html>