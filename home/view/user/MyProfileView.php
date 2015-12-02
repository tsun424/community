<?php
    $userArr = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>/public/css/style.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>/public/css/summernote.css">
    <link href="<?php echo ROOT_PATH; ?>/public/css/font-awesome.min.css" rel="stylesheet">

    <title>Social Network for Theseus and the Minotaur Gaming</title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Community</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav nav-color">
                <li><a href="<?php echo ROOT_FILE?>/topic/listTopics">HOME</a></li>
                <li><a href="<?php echo ROOT_FILE?>/login/about">About</a></li>
                <li><a href="<?php echo ROOT_FILE?>/login/contact">Contact US</a></li>
                <li><a href="<?php echo ROOT_FILE?>/login/help">Help</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">My Profile</a></li>
                        <li><a href="<?php echo ROOT_FILE?>/user/myTopics">My Topics</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

    <main class="wrapper">
        <h1 class="page-header">Personal Information</h1>
        <div class="content">
            <table class="table table-striped table-hover table-bordered">
                <tbody>
                    <tr>
                        <td width="20%">Name:</td>
                        <td width="80%"><?php echo $userArr['userName'] ?></td>
                    </tr>
                    <tr>
                        <td>Nickname:</td>
                        <td><?php echo $userArr['userNickname'] ?></td>
                    </tr>
                    <tr>
                        <td>Sex:</td>
                        <td><?php echo $userArr['userSex'] ?></td>
                    </tr>
                    <tr>
                        <td>User Level:</td>
                        <td><?php echo $userArr['userLevel'] ?></td>
                    </tr>
                    <tr>
                        <td>Birthday:</td>
                        <td><?php echo $userArr['userBirthday'] ?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><?php echo $userArr['userEmail'] ?></td>
                    </tr>
                    <tr>
                        <td>Register Time:</td>
                        <td><?php echo $userArr['registerTime'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
<script src="<?php echo ROOT_PATH; ?>/public/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>/public/js/bootstrap.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>/public/js/summernote.min.js"></script>
</body>
</html>