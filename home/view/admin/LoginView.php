<!DOCTYPE html>
<!--
	/**
	*	The about page of the website
	************************************************************************
	*	@Author Xiaoming Yang
	*	@Initial date
	************************************************************************
	*	update time			editor				updated information
	*   2015-11-28          Xiaoming Yang       change login form using bootstrap
	*   02-12-2015          Xiaoming Yang       optimize the error output
	*/
-->
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH; ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH; ?>/public/css/style.css">
    <title>Social Network for Theseus and the Minotaur Gaming</title>
    <style>
        #msg{
            display:none;
            color:#ff0000;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2" id="logindev">
        <form class="form" action="<?php echo ROOT_FILE;?>/login/login" method="post">
            <h2>Please Sign In</h2>
                <div id="msg">Sorry! The user name or password is not correct!</div>
            <label for="username" class="sr-only">User Name:</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="User Name" required="" autofocus="">
            <label for="userpwd" class="sr-only">Password:</label>
            <input type="password" id="userpwd" name="userpwd" class="form-control" placeholder="Password" required="">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button type="button"  class="btn btn-lg btn-primary btn-block" onclick="doSignIn()" name="doSubmit" value="Sign In">Sign In</button>
        </form>
    </div>
</div>
<script src="<?php echo ROOT_PATH;?>/public/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo ROOT_PATH;?>/public/js/bootstrap.min.js"></script>
<script src="<?php echo ROOT_PATH;?>/public/js/admin/login.js"></script>
</body>

</html>