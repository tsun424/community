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
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="wrapper">
    <ol class="breadcrumb">
        <li><a href="listTopics">Home</a></li>
        <li id="secondM"><a href="listTopics">My Topics</a></li>
    </ol>

    <div class="tab-content">
        <div class="tab-pane active" id="tab1">
            <div class="constainer">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <ul class="pagination">
                            <?php echo $_REQUEST['pagination']->outputPage();?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th width="44%">Topic Title</th>
                        <th width="16%">Author</th>
                        <th width="10%">Reply Times</th>
                        <th width="16%">Last Reply</th>
                        <th width="14%">Management</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $myTopicsArr = $_REQUEST['myTopicsArr'];

                        foreach($myTopicsArr as $topic){
                            echo '<tr>';
                            echo  '<td>';
                            echo '<span>['.$topic['section'].']</span>'.'&nbsp;';
                            echo "<a href='queryTopic?topicNo=".$topic['topicNo']."'>".$topic['title']."</a>";
                            echo  '</td>';
                            echo  '<td>';
                            echo          $topic['author'].'<br />';
                            echo         '<span class="">'.$topic['posttime'].'</span></td>';
                            echo      '<td>'.$topic['replytimes'].'</td>';
                            echo      '<td class="tc">';
                            echo          $topic['lastreply'].'<br />';
                            echo          '<span class="">'.$topic['lasttime'].'</span>';
                            echo    '</td>';
                            echo    "<td><a href='modify?topicNo=".$topic['topicNo']."'"." class='btn btn-default btn-sm'>modify</a>&nbsp;&nbsp;&nbsp;";
                            echo        "<button type='button' onclick='callModal(this)' topicNo='".$topic['topicNo']."' class='btn btn-default btn-sm'>delete</button></td>";
                            echo   '</tr>';
                        }
                    ?>
                    </tbody>
                    <thead>
                    <tr>
                        <th>Topic Title</th>
                        <th>Author</th>
                        <th>Reply Times</th>
                        <th>Last Reply</th>
                        <th>Management</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="constainer">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="pagination">
                            <?php echo $_REQUEST['pagination']->outputPage();?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id = "myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirm</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure to delete this topic?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="deleteBtn" onclick="doDelete(this)">Delete</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script src="<?php echo ROOT_PATH;?>/public/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo ROOT_PATH;?>/public/js/bootstrap.min.js"></script>
<script src="<?php echo ROOT_PATH;?>/public/js/user/myTopics.js"></script>
</body>

</html>