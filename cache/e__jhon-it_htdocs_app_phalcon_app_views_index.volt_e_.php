a:1:{i:0;s:8206:"<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Aplication base PHP Phalcon</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
		<?= $this->tag->stylesheetLink('plugins/font-awesome/css/font-awesome.min.css') ?>
		<?= $this->tag->stylesheetLink('plugins/simple-line-icons/simple-line-icons.min.css') ?>
		<?= $this->tag->stylesheetLink('plugins/bootstrap/css/bootstrap.min.css') ?>
		<?= $this->tag->stylesheetLink('plugins/uniform/css/uniform.default.css') ?>
		<?= $this->tag->stylesheetLink('plugins/bootstrap-switch/css/bootstrap-switch.min.css') ?>
        <!-- END GLOBAL MANDATORY STYLES -->
		
        <!-- BEGIN THEME GLOBAL STYLES -->
		<?= $this->tag->stylesheetLink('css/components-rounded.css') ?>
		<?= $this->tag->stylesheetLink('css/plugins.min.css') ?>
        <!-- END THEME GLOBAL STYLES -->
		
        <!-- BEGIN THEME LAYOUT STYLES -->
		<?= $this->tag->stylesheetLink('layouts/layout/css/layout.min.css') ?>
		<?= $this->tag->stylesheetLink('layouts/layout/css/themes/light.min.css') ?>
		<?= $this->tag->stylesheetLink('layouts/layout/css/custom.min.css') ?>
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
	</head>
	
	<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-sidebar-fixed page-footer-fixed">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
						<?= $this->tag->image(['layouts/layout/img/logo.png', 'alt' => 'logo', 'class' => 'logo-default']) ?>
					</a>
                    <div class="menu-toggler sidebar-toggler"> </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- END TODO DROPDOWN -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<?= $this->tag->image(['layouts/layout/img/avatar3_small.jpg', 'alt' => '', 'class' => 'img-circle']) ?>
                                <span class="username username-hide-on-mobile"> Nick </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="page_user_profile_1.html">
                                        <i class="icon-user"></i> My Profile </a>
                                </li>
                                <li>
                                    <a href="app_calendar.html">
                                        <i class="icon-calendar"></i> My Calendar </a>
                                </li>
                                <li>
                                    <a href="app_inbox.html">
                                        <i class="icon-envelope-open"></i> My Inbox
                                        <span class="badge badge-danger"> 3 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="app_todo.html">
                                        <i class="icon-rocket"></i> My Tasks
                                        <span class="badge badge-success"> 7 </span>
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="page_user_lock_1.html">
                                        <i class="icon-lock"></i> Lock Screen </a>
                                </li>
                                <li>
                                    <a href="page_user_login_1.html">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                            <a href="javascript:;" class="dropdown-toggle">
                                <i class="icon-logout"></i>
                            </a>
                        </li>
                        <!-- END QUICK SIDEBAR TOGGLER -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
		<!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
		
        <div class="page-container">
            <?= $this->getContent() ?>
        </div>
		
        <!-- BEGIN FOOTER -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2016 &copy; Template By Eko Andry.
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- END FOOTER -->
		<!--[if lt IE 9]>
		<?= $this->tag->javascriptInclude('plugins/respond.min.js') ?>
		<?= $this->tag->javascriptInclude('plugins/excanvas.min.js') ?>
		<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
		<?= $this->tag->javascriptInclude('plugins/jquery.min.js') ?>
		<?= $this->tag->javascriptInclude('plugins/bootstrap/js/bootstrap.min.js') ?>
		<?= $this->tag->javascriptInclude('plugins/js.cookie.min.js') ?>		
		<?= $this->tag->javascriptInclude('plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') ?>
		<?= $this->tag->javascriptInclude('plugins/jquery-slimscroll/jquery.slimscroll.min.js') ?>
		<?= $this->tag->javascriptInclude('plugins/jquery.blockui.min.js') ?>
		<?= $this->tag->javascriptInclude('plugins/uniform/jquery.uniform.min.js') ?>
		<?= $this->tag->javascriptInclude('plugins/bootstrap-switch/js/bootstrap-switch.min.js') ?>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
		<?= $this->tag->javascriptInclude('scripts/app.min.js') ?>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
		<?= $this->tag->javascriptInclude('layouts/layout/scripts/layout.min.js') ?>
		<?= $this->tag->javascriptInclude('layouts/layout/scripts/demo.min.js') ?>
		<?= $this->tag->javascriptInclude('layouts/layout/scripts/quick-sidebar.min.js') ?>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>";}