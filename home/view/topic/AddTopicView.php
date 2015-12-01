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
                <li><a href="listTopics">HOME</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact US</a></li>
                <li><a href="#">Help</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">My Profile</a></li>
                        <li><a href="#">Password Modification</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="wrapper">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <h1 class="page-header">Post a New Topic</h1>
            <form class="form-horizontal" id="topic_form" action="<?php echo ROOT_FILE?>/topic/addTopic" method="post">
                <input type="hidden" name="content" id="content">

                <div class="form-group">
                    <div class="col-lg-8 col-md-8 col-xs-8 col-sm-8">
                        <input type="text" class="form-control" id="topic_title" name="topic_title" placeholder="Topic Title" required="required">
                    </div>
                </div>

                <div id="summernote"></div>
                <div class="form-group">
                    <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                        <select class="form-control" name="section" id="section">
                            <option value="1">Game Strategy</option>
                            <option value="2">Game Experience</option>
                            <option value="3">Resource Sharing</option>
                            <option value="4">Game Activity</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center post-button">
                    <input class="btn btn-primary" type="button" onClick="doSubmit()" value="Post">
                    <input class="btn btn-primary" type="button" value="Cancel">
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?php echo ROOT_PATH; ?>/public/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>/public/js/bootstrap.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>/public/js/summernote.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>/public/js/topic/addTopic.js"></script>
</body>
</html>