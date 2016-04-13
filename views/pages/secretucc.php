<?php if(isset($_SESSION["accessLevel"]) && $_SESSION["accessLevel"] == 1){ ?>

<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">UCC Manager</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="<?= URL?>logout<?php echo "?url=http://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>">My Profile</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /Header -->

<!-- Page content -->
<div class="container-fluid">
    <div class="row">
         <!-- Col gauche-->
        <div class="col-sm-3">
            <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Administrator Panel</strong></a>
            <hr>
            <ul class="nav nav-stacked">
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Navigation <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul class="nav nav-stacked collapse in" id="userMenu">
                        <li class="active"><a href="<?= URL?>"><i class="glyphicon glyphicon-cog"></i> Home</a></li>
                        <li><a href="<?= URL?>secretucc"><i class="glyphicon glyphicon-cog"></i> Manager</a></li>
                        <li><a href="<?= URL?>login<?php echo "?url=http://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>"><i class="glyphicon glyphicon-cog"></i> Login</a></li>
                        <li><a href="<?= URL?>logout<?php echo "?url=http://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>"><i class="glyphicon glyphicon-cog"></i> Log Out</a></li>                       
                    </ul>
                </li>
            </ul>
            <hr>         
            <a href="#"><strong><i class="glyphicon glyphicon-cog"></i> Social Medias</strong></a>
            <hr>
            <ul class="nav nav-pills nav-stacked">
                <li class="nav-header"></li>
                <li><a href="https://twitter.com/" target="_blank"><i class="glyphicon glyphicon-cog"></i> Twitter</a></li>
                <li><a href="https://fr-fr.facebook.com/" target="_blank"><i class="glyphicon glyphicon-cog"></i> Facebook</a></li>
                <li><a href="https://plus.google.com/collections/featured" target="_blank"><i class="glyphicon glyphicon-cog"></i> Google+</a></li>
                <li><a href="https://www.instagram.com/" target="_blank"><i class="glyphicon glyphicon-cog"></i> Instagram</a></li>
            </ul>        
             <hr>
            <a href="#"><strong><i class="glyphicon glyphicon-cog"></i> Resources</strong></a>
            <hr>
            <ul class="nav nav-pills nav-stacked">
                <li class="nav-header"></li>
                <li><a href="https://www.themoviedb.org/?language=fr" target="_blank"><i class="glyphicon glyphicon-cog"></i> Movie Database</a></li>
                <li><a href="http://docs.themoviedb.apiary.io/" target="_blank"><i class="glyphicon glyphicon-cog"></i> API Docs</a></li>
                <li><a href="https://apps.twitter.com/" target="_blank"><i class="glyphicon glyphicon-cog"></i> Apps.Twitter</a></li>
            </ul>
            <hr>
        </div>
        <!-- Col central-->
        <div class="col-sm-9">          
            <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Manager</strong></a>
            <hr>
            <div class="row">
                <!--Message pannel-->
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             Create Your UCC Tournament
                        </div>
                    </div>
                     <!--Message pannel End-->
                    <hr>
                     <!-- Search Bar-->    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Suggestion search</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="form form-vertical">
                                <div class="control-group">
                                    <label>Research by</label>
                                    <div class="controls">
                                        <select class="form-control">
                                            <option>KeyWords</option>
                                            <option>Movie Name</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="control-group">
                                    <label>Search Bar</label>
                                    <div class="controls">
                                        <input type="text" name ='inputkeyword'  class="form-control" id="inputkeyword" placeholder="Type Here">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label></label>
                                    <div class="controls">
                                       <input type="button" id="validate" value="validate" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /SearchBar-->    
                    </div>   
                    <hr>
                </div>
                <!--Search results-->
                 <!-- Col droite-->
                <div class="col-md-6">
                     <div class="panel panel-default" id ="fieldResult">
                        <div class="panel-heading">                       
                            <h4>Suggestion Results</h4></div>
                        <div class="panel-body" id ="resultBox">
                            <div class="list-group">
                                <div class="row"  id="results">              
                                    <div id="item">
                                     <!--Search results ajax call->Php-->
                                    </div>
                                </div>        
                            </div>
                        </div>
                    </div>        
                </div>
                <!--/Search results-->
            </div>
        </div>
    </div>
</div>

<?php } else { ?>
    <p>Unauthorized to access this page. <a href="<?= URL ?>">Return to home</a></p>
<?php } ?>

