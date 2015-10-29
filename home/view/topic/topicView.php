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
            <ul class="nav navbar-nav">
                <li><a href="#">HOME</a></li>
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
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Topics</a></li>
    </ol>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">Topics</a></li>
        <li><a href="#tab2" data-toggle="tab">Learning Corner</a></li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="tab1">
            <div class="constainer">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="pagination">
                            <li><a href="#">Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Next</a></li>
                            <span class="pages">Total:105,5 pages</span>
                        </ul>
                    </div>
                    <div class="col-md-4 text-right post-button">
                        <input class="btn btn-primary" type="button" value="Post">
                        <input class="btn btn-info" type="button" value="Refresh">
                    </div>
                </div>
            </div>

            <table class="table">
                <tr>
                    <td><a class="btn btn-default btn-block" role="button" href="#">All Topics</a></td>
                    <td><a class="btn btn-default btn-block" role="button" href="#">Game Strategy</a></td>
                    <td><a class="btn btn-default btn-block" role="button" href="#">Game Experience</a></td>
                    <td><a class="btn btn-default btn-block" role="button" href="#">Resource Sharing</a></td>
                    <td><a class="btn btn-default btn-block" role="button" href="#">Game Activities</a></td>
                </tr>
            </table>


            <div class="content">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Topic Title</th>
                        <th>Author</th>
                        <th>Reply Times</th>
                        <th>Last Reply</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $topicAttr = $_REQUEST['topicAttr'];
                        foreach($topicAttr as $topic){
                            echo '<tr>';
                            echo  '<td>';
                                    echo '<span>[Resource Sharing]</span>'.'&nbsp;';
                                    echo '<a href="#" target="_blank">'.$topic['title'].'</a>';
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

                    <!--
                    <tr>
                        <td>
                            <span>[<a href="#">Game Strategy</a>]</span>
                            <a href="#" target="_blank">I have passed all levels</a>
                        </td>
                        <td>
                            <a href="#" rel="nofollow" target="_blank">Tom</a><br />
                            <span class="">09-23 09:05</span></td>
                        <td>0</td>
                        <td class="tc">
                            <a href="#" rel="nofollow" target="_blank" title="zhucezhanghu1">Lily</a><br />
                            <span class="">09-24 10:15</span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span>[<a href="#">Game Activities</a>]</span>
                            <a href="#" target="_blank">Who want to play the second level with me?</a>
                        </td>
                        <td>
                            <a href="#" rel="nofollow" target="_blank">Tom</a><br />
                            <span class="">09-23 09:05</span></td>
                        <td>0</td>
                        <td class="tc">
                            <a href="#" rel="nofollow" target="_blank" title="zhucezhanghu1">Lily</a><br />
                            <span class="">09-24 10:15</span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span>[<a href="#">Game Activities</a>]</span>
                            <a href="#" target="_blank">Go to the 3rd level?</a>
                        </td>
                        <td>
                            <a href="#" rel="nofollow" target="_blank">Tom</a><br />
                            <span class="">09-23 09:05</span></td>
                        <td>0</td>
                        <td class="tc">
                            <a href="#" rel="nofollow" target="_blank" title="zhucezhanghu1">Lily</a><br />
                            <span class="">09-24 10:15</span>
                        </td>
                    </tr>
                    -->
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
                            <li><a href="#">Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Next</a></li>
                            <span class="pages">Total:105,5 pages</span>
                        </ul>
                    </div>
                    <div class="col-md-4 text-right post-button">
                        <input class="btn btn-primary" type="button" value="Post">
                        <input class="btn btn-info" type="button" value="Refresh">
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab2">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Download Times</th>
                </tr>

                <tbody>
                <tr>
                    <td>
                        <span>[<a href="#">Video</a>]</span>
                        <a href="#" target="_blank">How can you become a greate player</a>
                    </td>
                    <td>10 MB</td>
                    <td>102
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>[<a href="#">PDF</a>]</span>
                        <a href="#" target="_blank">Learning Theseus and the Minotaur Step by Step</a>
                    </td>
                    <td>6 MB</td>
                    <td>202
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="<?php echo ROOT_PATH;?>/public/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo ROOT_PATH;?>/public/js/bootstrap.min.js"></script>
</body>

</html>