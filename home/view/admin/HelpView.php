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
                        <li><a href="#" onclick='callModal()'>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main>
    <div class="container wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <h1 class="page-header">What is this social network for</h1>
                This social network is designed for several kinds of communities. For example, a Theseus and the Minotaur Gaming community, or a Language learning community.
                <h2 class="page-header">Key Features</h2>
                <h3>Players can discuss any topic in the virtual community</h3>
                <p>
                    They can post a topic
                </p>
                <p>
                    They can reply others' topics
                </p>
                <p>
                    They can manage their own topics
                </p>
                <h3>Players can download useful information from Learning Corner
                </h3>
            </div>
        </div>
    </div>
    <div id = "exitModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Confirm</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure to exit?</p>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-primary" id="deleteBtn" onclick="doExit()">Quit</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</main>
<script src="<?php echo ROOT_PATH;?>/public/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo ROOT_PATH;?>/public/js/bootstrap.min.js"></script>
<script src="<?php echo ROOT_PATH;?>/public/js/base.js"></script>
</body>

</html>