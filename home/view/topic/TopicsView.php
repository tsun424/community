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
                <li><a href="listTopics">HOME</a></li>
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
    <ol class="breadcrumb">
        <li><a href="listTopics">Home</a></li>
        <li id="secondM"><a href="listTopics">Topics</a></li>
    </ol>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" onClick="topics();doRefresh()" data-toggle="tab">Topics</a></li>
        <li><a href="#tab2" data-toggle="tab" onClick="learning()">Learning Corner</a></li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="tab1">
            <div class="constainer">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <ul class="pagination">
                            <?php echo $_REQUEST['pagination']->outputPage();?>
                        </ul>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-2 text-right post-button">
                        <input class="btn btn-primary" type="button" onClick="addPost()" value="Post">
                        <input class="btn btn-info" type="button" onClick="doRefresh()" value="Refresh">
                    </div>
                </div>
            </div>

            <table class="table">
                <tr>
                    <td><a class="btn btn-default btn-block" role="button" href="#">All Topics</a></td>
                    <td><a class="btn btn-default btn-block" role="button" href="#">Game Strategy</a></td>
                    <td><a class="btn btn-default btn-block" role="button" href="#">Game Experience</a></td>
                    <td><a class="btn btn-default btn-block" role="button" href="#">Resource Sharing</a></td>
                    <td><a class="btn btn-default btn-block" role="button" href="#">Game Activity</a></td>
                </tr>
            </table>


            <div class="content">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th width="61">Topic Title</th>
                        <th width="18">Author</th>
                        <th width="5">Reply Times</th>
                        <th width="18">Last Reply</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $topicAttr = $_REQUEST['topicAttr'];
                    foreach($topicAttr as $topic){
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
                    <div class="col-md-4 text-right post-button">
                        <input class="btn btn-primary" type="button" value="Post">
                        <input class="btn btn-info" type="button" onClick="doRefresh()" value="Refresh">
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab2">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>Name</th>
                    <th>Size</th>
                </tr>

                <tbody>
                <tr>
                    <td>
                        <span>[PDF]</span>
                        <a href="/community/download/d1.pdf" target="_blank">How can you become a great player</a>
                    </td>
                    <td>112 KB</td>
                </tr>
                <tr>
                    <td>
                        <span>[PDF]</span>
                        <a href="/community/download/d2.pdf" target="_blank">Learning Theseus and the Minotaur Step by Step</a>
                    </td>
                    <td>115 KB</td>
                </tr>
                </tbody>
            </table>
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
</div><!-- /.modal -->

<script src="<?php echo ROOT_PATH;?>/public/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo ROOT_PATH;?>/public/js/bootstrap.min.js"></script>
<script src="<?php echo ROOT_PATH;?>/public/js/topic/topic.js"></script>
<script src="<?php echo ROOT_PATH;?>/public/js/base.js"></script>
</body>

</html>