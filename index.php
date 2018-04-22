<?php
    session_start();
    if(!isset($_SESSION['USER'])){
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE .html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <?php include "elements/head.php"?>
    <title>Home| Medicine App</title>
</head>
<body>
    <?php include "elements/navbar.php"?>
<div class="container">
    <div class="row">
        <h3>Hello <?=$_SESSION['USER']['fname'];?> !</h3>
    </div>
</div>
<?php include "elements/footer.php" ?>
</body>
</html>