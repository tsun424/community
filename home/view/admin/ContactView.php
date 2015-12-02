<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH; ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH; ?>/public/css/style.css">
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
                        <li><a href="<?php echo ROOT_FILE?>/user/myProfile">My Profile</a></li>
                        <li><a href="<?php echo ROOT_FILE?>/user/myTopics">My Topics</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main>
    <div id="info" class="container">
        <div class="row">
            <h1 id="about" class="page-header">Contact Us</h1>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <h3>Working Hours:</h3>
                <p>Monday – Friday: 7am – 4pm</p>
                <p>Saturday – Sunday: 8am – 3pm</p>

                <h3>Address:</h3>
                <p>130 Madras St, Christchurch Central, Christchurch 8011</p>
                <h3>Phone number:</h3>
                <p>064-123 4567</p>
                <p>enquiry@socialgaming.co.nz</p>
            </div>
        </div>
    </div>
</main>
<script src="<?php echo ROOT_PATH;?>/public/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo ROOT_PATH;?>/public/js/bootstrap.min.js"></script>
</body>

</html>