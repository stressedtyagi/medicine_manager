<nav class = "navbar navbar-default">
    <div class = "container-fluid">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand"><b>Medicine Manager</b></a>
        </div>
        <?php if(isset($_SESSION['USER'])):?>
        <ul class="nav navbar-nav">
            <li><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Get Token </a></li>
            <li><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Medicine </a></li>
            <li><a href="#"> Beneficiary Corner </a></li>
            <li><a href="#"> Downloads </a></li>
            <li><a href="#"> Related Links </a></li>
            <li><a href="#"> Grievances </a></li>
            <li><a href="#"> RTI </a></li>
            <li><a href="#"> Downloads </a></li>
            <li><a href="#"> FAQs </a></li>
            <li><a href="#"> About Us </a></li>
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
                    <li><a href="logout.php">Logout<span class="glyphicon glyphicon-log-out" aria-hidden="true" style="padding:5px;"></span></a></li>
                </ul>
            </li>
        </u>
    <?php endif;?>
    </div>
</nav>