<nav class = "navbar navbar-default">
    <div class = "container-fluid">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">Medicine Manager</a>
        </div>
        <?php if(isset($_SESSION['USER'])):?>
        <ul class="nav navbar-nav">
            <li><a href="add.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add Medicine</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    <?=$_SESSION['USER']['fname'];?>
                    <span class="caret"></span> 
                </a>
                <ul class="dropdown-menu">
                    <li><a href="my_account.php">My Account</a></li>
                    <li><a href="change_pass.php">Change Password</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </li>
        </u>
    <?php endif;?>
    </div>
</nav>