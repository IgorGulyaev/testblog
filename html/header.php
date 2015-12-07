<?php
/**
 * Created by PhpStorm.
 * User: Igor Gulyaev
 * Date: 10/5/2015
 * Time: 3:52 PM
 */

session_start();
$ServerName = 'http://'.$_SERVER['SERVER_NAME'].'/';
?>

<?php
/*** Test Blog */
?>
<!DOCTYPE html>
<!--[if IE 7 ]>
<html class="ie7 ielt9" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie8 ielt9" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <title>Test Blog</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<div class="container">

    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $ServerName; ?>">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo $ServerName; ?>">Home</a></li>
                    <?php
                    // Проверяем, пусты ли переменные логина и id пользователя
                    if (!empty($_SESSION['login']) or !empty($_SESSION['id'])): ?>
                        <li><a href="<?php echo $ServerName; ?>projects.php">Projects</a></li>
                    <?php endif; ?>
                    <li><a href="#">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <?php
                    // Проверяем, пусты ли переменные логина и id пользователя
                    if (empty($_SESSION['login']) or empty($_SESSION['id']))
                    {
                        echo "<li><a href='#'>Guest</a></li>";
                    } else
                    {
                        echo "<li class='active'><a href='#'>".$_SESSION['login']."</a></li>";
                        echo "<li class='active'><a href='logout.php'>Logout</a></li>";
                    }
                    ?>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <?php include("login.php"); ?>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Register <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <?php include("reg.php"); ?>
                        </div>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

</div>

