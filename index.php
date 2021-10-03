<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{   $controll = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controll = 'pages';
    $action = 'home';
}?>
<html>
<head></head>
<body>
    <?php echo "controller =".$controller.",action = ".$action.;?>
    <br>[<a href="">Home </a>] <br>
    <?php require_once("routes.php");?>
</body>
</html>
