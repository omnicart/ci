<!DOCTYPE html>
<html lang="en" ng-app="sms_project">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

   

<?php
css('bootstrap.min');
css('sb-admin');
?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
          
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo cpath();?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo loadpage('register_view');?>"><i class="fa fa-fw fa-bar-chart-o"></i> Register</a>
                    </li>
                    <li>
                        <a href="<?php echo loadpage('login_view');?>"><i class="fa fa-fw fa-table"></i> Login</a>
                    </li>
                 <?php if(get('project_id') !=''){?>
                    <li>
                        <a  href="<?php echo loadpage('password_view');?>"><i class="fa fa-fw fa-edit"></i> Change Password</a>
                    </li>


                     <li>
                        <a  href="<?php echo loadpage('library_view');?>"><i class="fa fa-fw fa-edit"></i> Library</a>
                    </li>
                     <li>
                        <a  href="<?php echo loadpage('group_view');?>"><i class="fa fa-fw fa-edit"></i>GROUPS</a>
                    </li>
                     <li>
                        <a  href="<?php echo loadpage('msg_view');?>"><i class="fa fa-fw fa-edit"></i> Message</a>
                    </li>
                    <li>
                        <a  href="<?php echo loadpage('pay_view');?>"><i class="fa fa-fw fa-edit"></i> Pay</a>
                    </li>
                    <li>
                        <a  href="<?php echo loadpage('show_group_view');?>"><i class="fa fa-fw fa-edit"></i> Show Group</a>
                    </li>
                    
                     <li>
                        <a  href="<?php echo loadpage('contact_view');?>"><i class="fa fa-fw fa-edit"></i>Contact</a>
                    </li>

                     <li>
                        <a  href="<?php echo loadpage('profile_view');?>"><i class="fa fa-fw fa-edit"></i>Upload Profile</a>
                    </li>

                    <?php
                     if(get('project_status') == 1):
                    ?>
                    <li>
                        <a  href="<?php echo loadpage('sms_view');?>"><i class="fa fa-fw fa-edit"></i>Show SMS</a>
                    </li>

                <?php 
                endif;
                ?>
                    <li>
                        <a  href="<?php echo cpath('logout');?>"><i class="fa fa-fw fa-desktop"></i> Logout (<?php echo get('project_email')?>)</a>
                    </li>
                   <?php }?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>