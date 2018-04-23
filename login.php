<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        //Default Values
        $fname = '';
        $lname = '';
        $address = '';
        $email = '';
        $password = '';
    }else {
        //Get Values
        $email = $_POST['email'];
        $password = $_POST['password'];

        //Error Message
        $err_msg = array();
        if($email == ''){
            $err_msg['email'] = 'Please Fill your email.';
        }
        if($password == ''){
            $err_msg['password'] = 'Please Fill your password.';
        }

        if(empty($err_msg)){
            include "elements/connect.php";
            // Save Data
            $insertQuery = "SELECT * FROM users WHERE email = '$email'";
            $insertQueryRun = mysqli_query($conn,$insertQuery);
            $insertQueryResult = mysqli_fetch_assoc($insertQueryRun);
            mysqli_close($conn);
            if(!$insertQueryResult){
                $err_msg['login'] = "Invalid email or password.";
            }else {
                session_regenerate_id(true);
                $_SESSION['USER'] = $insertQueryResult;
                header("Location: index.php");
            }
        }
    }
?>
<!DOCTYPE .html>
<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <?php include "elements/head.php"?>
        <title>Login | Medicine App</title>
    </head>
<body>  
    <?php include "elements/navbar.php"?>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <img src="favicon.png" style="width:20%;" class="img-responsive center-block" alt="logo">
                <h3 class="text-center">Login</h3>

                <?php if(!empty($err_msg['login'])): ?>
                    <div class="alert alert-danger"><?=$err_msg['login']; ?></div>
                <?php endif;?>

                <form method="post">
                <div class="form-group <?php if(!empty($err_msg['email'])) echo "has-error";?>">
                        <input type="email" class="form-control" placeholder="Email" name="email" value="<?=$email;?>">
                        <?php if(!empty($err_msg['email'])): ?>
                            <span class="help-block">*<?=  $err_msg['email']; ?></span>
                        <?php endif;?>
                    </div>
                    <div class="form-group <?php if(!empty($err_msg['password'])) echo "has-error";?>">
                        <input type="password" class="form-control" placeholder="Password" name="password" value="<?=$password;?>">
                        <?php if(!empty($err_msg['password'])): ?>
                            <span class="help-block">*<?=  $err_msg['password']; ?></span>
                        <?php endif;?>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label><input type="checkbox">Remember Me</label>
                        </div>  
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>
                <a href="forgot_pass.php">Forgot Password?</a><br>
                <a href="register.php">Create your own Account</a>
            </div>
        </div>
    </div>
    <?php include "elements/footer.php" ?>
</body>
</html>