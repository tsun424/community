<?php
    $userArr = $_SESSION['user'];
    $mainTopicAttr = $_REQUEST['mainTopic'][0];
    $replyArr = $_REQUEST['replyArr'];
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
                        <li><a href="<?php echo ROOT_FILE?>/user/myProfile">My Profile</a></li>
                        <li><a href="<?php echo ROOT_FILE?>/user/myTopics">My Topics</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#" onclick='callModal()'>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div class="wrapper">
    <h3 class="page-header"><?php echo $mainTopicAttr['topicTitle'] ?></h3>
    <table class="table topictable">
        <tr class="userInfo">
            <td rowspan="3" width="20%"><?php echo $userArr['userNickname'] ?></td>
        </tr>
        <tr class="topicInfo"><td>Posted at:&nbsp;<?php echo $mainTopicAttr['postTime']?></td></tr>
        <tr class="topicInfo"><td><?php echo $mainTopicAttr['topicContent']?></td></tr>
    </table>

    <?php
        $i = 1;
        foreach($replyArr as $reply){
            echo '<table class="table topictable">';
            echo '<tr class="userInfo">';
            echo "<td rowspan='3' width='20%'>".$reply["userNickname"]."</td>";
            echo "<tr class='topicInfo'>";
            echo "<td>&nbsp;<strong>#".$i++."</strong>&nbsp;&nbsp;Replied at:&nbsp;".$reply['replyTime']."</td></tr>";
            echo "<tr class='topicInfo'><td>".$reply['replyContent']."</td></tr>";
            echo "</table>";
        }
    ?>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <h4 class="page-header">Reply This Topic</h4>
            <form class="form-horizontal" id="topic_form" action="<?php echo ROOT_FILE?>/topic/addReply" method="post">
                <input type="hidden" name="content" id="content">
                <input type="hidden" name="topicNo" id="topicNo" value="<?php echo $mainTopicAttr['topicNo']?>">
                <div id="summernote"></div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center post-button">
                    <input class="btn btn-primary" type="button" onClick="doSubmit()" value="Post">
                    <input class="btn btn-primary" type="button" value="Cancel">
                </div>
            </form>
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
<script src="<?php echo ROOT_PATH; ?>/public/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>/public/js/bootstrap.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>/public/js/summernote.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>/public/js/topic/oneTopic.js"></script>
<script src="<?php echo ROOT_PATH;?>/public/js/base.js"></script>
</body>
</html>