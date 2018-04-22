<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        //Default Values
        $fname = '';
        $lname = '';
        $address = '';
        $email = '';
        $password = '';
    }else {
        //Get Values
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //Error Message
        $err_msg = array();
        if($fname == ''){
            $err_msg['fname'] = 'Please Fill your first name.';
        }
        if($lname == ''){
            $err_msg['lname'] = 'Please Fill your last name.';
        }
        if($address == ''){
            $err_msg['address'] = 'Please Fill your address.';
        }
        if($email == ''){
            $err_msg['email'] = 'Please Fill your email.';
        }
        if($password == ''){
            $err_msg['password'] = 'Please Fill your password.';
        }

        if(empty($err_msg)){
            include "elements/connect.php";
            // Save Data
            $insertQuery = "INSERT INTO users (fname, lname, address, email, password, created_at, modified_at) VALUES ('$fname','$lname','$address','$email','$password',now(),now())";
            mysqli_query($conn,$insertQuery);

            mysqli_close($conn);

            header('Location:login.php');
        }
    }
?>
<!DOCTYPE .html>
<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <?php include "elements/head.php"?>
        <title>Create Your Account| Medicine App</title>
    </head>
<body>  
    <?php include "elements/navbar.php"?>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <h3 class="text-center">Create Your Account</h3>
                <form method="post" >
                    <div class="form-group <?php if(!empty($err_msg['fname'])) echo "has-error";?>">
                        <input type="text" class="form-control" placeholder="First Name" name="fname" value="<?=$fname;?>">
                        <?php if(!empty($err_msg['fname'])): ?>
                            <span class="help-block">*<?=  $err_msg['fname']; ?></span>
                        <?php endif;?>
                    </div>
                    <div class="form-group <?php if(!empty($err_msg['lname'])) echo "has-error";?>">
                        <input type="text" class="form-control" placeholder="Last Name" name="lname" value="<?=$lname;?>">
                        <?php if(!empty($err_msg['lname'])): ?>
                            <span class="help-block">*<?=  $err_msg['lname']; ?></span>
                        <?php endif;?>
                    </div>
                    <div class="form-group <?php if(!empty($err_msg['address'])) echo "has-error";?>">
                        <input type="text" class="form-control" placeholder="Address" name="address" value="<?=$address;?>">
                        <?php if(!empty($err_msg['address'])): ?>
                            <span class="help-block">*<?=  $err_msg['address']; ?></span>
                        <?php endif;?>
                    </div>                    
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
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </form>
                <a href="login.php">Cancel</a>
            </div>
        </div>
    </div>
    <?php include "elements/footer.php" ?>
</body>
</html>