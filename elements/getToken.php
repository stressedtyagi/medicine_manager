<!DOCTYPE .html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <?php include "head.php"?>
    <title>Token | Medicine App</title>
    <style>
        body{
            background-image: url("images/bk_3.jpg");
            background-size: 100%;
        }
    </style>
</head>
<body>
    <?php include "navbar.php"?>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <h3 class="text-center">Enter Medicine Details</h3>
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
    <?php include "footer.php" ?>
</body>
</html>