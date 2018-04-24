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
    <title>Home | Medicine App</title>
    <style>
        body{
            background-image: url("images/bk_3.jpg");
            background-size: 100%;
        }
    </style>
</head>
<body>
    <?php include "elements/navbar.php"?>
    <!-- <div class="container">
        <div class="row">
            <h1 class="text-center" style="color:#000;">Hello <?=$_SESSION['USER']['fname'];?> !</h1>
        </div>
    </div> -->
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <h2 class="text-center">Enter Medicine Details</h2><br>
                <form method="post" >
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Medicine Id Number" name="mid">                
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name of diseases" name="diseases">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Type of Medicine" name="type">
                    </div>                    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name of heathcare center" name="center_name">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include "elements/footer.php" ?>
</body>
</html>