<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GlucoDS | Lab Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/static/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/static/css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="/static/css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="/static/css/owl.carousel.css">
    <link rel="stylesheet" href="/static/css/owl.theme.css">
    <link rel="stylesheet" href="/static/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="/static/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="/static/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="/static/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="/static/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="/static/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="/static/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="/static/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="/static/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="/static/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="/static/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="/static/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="/static/css/responsive.css">
	
	
	
	<!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="/static/css/linkbutton.css">
	
	
	
    <!-- modernizr JS
		============================================ -->
    <script src="/static/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
	
	<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
				<!--GLUCODS LOGO-->
				
				
                <a href="index.html"><img class="main-logo" src="" alt="" /></a>
                <strong><img src="" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="img/notification/4.jpg" alt="" /></a>
					<h2>LAB SCIENTIST<span class="min-dtn"></span></h2>
				</div>
				
				<!----SOCIAL PROFILE(FACEBOOK,TWITTER)
				<div class="profile-social-dtl">
					<ul class="dtl-social">
						<li><a href="#"><i class="icon nalika-facebook"></i></a></li>
						<li><a href="#"><i class="icon nalika-twitter"></i></a></li>
						<li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
					</ul>
				</div>
				</div>
			
			-->
				
			<!--SIDE NAVEBAR!!!!!!!!!!!!!!--->
			
			
			<div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="{{ url_for('index') }}">
                                   <i class="icon nalika-home icon-wrap"></i>
                                   <span class="mini-click-non">Home</span>
                                </a>


                                <br>
                                <br>
                                
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-diamond icon-wrap"></i> <span class="mini-click-non">Interface</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Start Diagnosis" href="{{ url_for('diagnosis') }}"><span class="mini-sub-pro">Start Test</span></a></li>
                                <li><a title="View Test" href="{{ url_for('viewtests') }}"><span class="mini-sub-pro">View Test Data</span></a></li>
                                
                            </ul>
                        </li>
                                
                            <!----Miscallenous QUICK LINKS--->  
                                <br>
                                <br>
                                
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-pie-chart icon-wrap"></i> <span class="mini-click-non">Miscellaneous</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="File Manager" href="#"><span class="mini-sub-pro">Logout</span></a></li>
                                <li><a title="Blog" href="#"><span class="mini-sub-pro">Change Password</span></a></li>
                                
                            </ul>
                        </li>
                        
                            <ul class="submenu-angle" aria-expanded="true">
                                
                                
                                
                                
                            <!----
                                <li><a title="Dashboard v.1" href="index.html"><span class="mini-sub-pro">Dashboard v.1</span></a></li>
                                <li><a title="Dashboard v.2" href="index-1.html"><span class="mini-sub-pro">Dashboard v.2</span></a></li>
                                <li><a title="Dashboard v.3" href="index-2.html"> <span class="mini-sub-pro">Dashboard v.3</span></a></li>
                                <li><a title="Product List" href="product-list.html"><span class="mini-sub-pro">Product List</span></a></li>
                                <li><a title="Product Edit" href="product-edit.html"><span class="mini-sub-pro">Product Edit</span></a></li>
                                <li><a title="Product Detail" href="product-detail.html"><span class="mini-sub-pro">Product Detail</span></a></li>
                                <li><a title="Product Cart" href="product-cart.html"><span class="mini-sub-pro">Product Cart</span></a></li>
                                <li><a title="Product Payment" href="product-payment.html"><span class="mini-sub-pro">Product Payment</span></a></li>
                                <li><a title="Analytics" href="analytics.html"><span class="mini-sub-pro">Analytics</span></a></li>
                                <li><a title="Widgets" href="widgets.html"><span class="mini-sub-pro">Widgets</span></a></li>
                            </ul>
                        </li>


---->
                            
                                
                                
                        
                       
                       
                       <!---
                        <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-new-file icon-wrap"></i> <span class="mini-click-non">Pages</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Login" href="login.html"><span class="mini-sub-pro">Login</span></a></li>
                                <li><a title="Register" href="register.html"><span class="mini-sub-pro">Register</span></a></li>
                                <li><a title="Lock" href="lock.html"><span class="mini-sub-pro">Lock</span></a></li>
                                <li><a title="Password Recovery" href="password-recovery.html"><span class="mini-sub-pro">Password Recovery</span></a></li>
                            </ul>
                        </li>
-->
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
						
						<!--WELCOME PAGE!!!!!!!!!!!!!!--->
	
	
	 <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="dashboard2.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
         <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="icon nalika-menu-task"></i>
                                                </button>
                                        </div>
                                    </div>
                                     <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n hd-search-rp">
                                            <div class="breadcome-heading">
                                                <form role="search" class="">
                                                    <input type="text" placeholder="Search..." class="form-control">
                                                    <a href=""><i class="fa fa-search"></i></a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-mail" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                 <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-alarm" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                                
                                                
                                                <!---Admin username---->
                                                
                                                
                                                
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <i class="icon nalika-user"></i>
                                                            <span class="admin-name">Lab Scientist</span>
                                                            <i class="icon nalika-down-arrow nalika-angle-dw"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="{{ url_for('index') }}"><span class="icon nalika-home author-log-ic"></span>Home</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon nalika-user author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        
                                                        <li><a href="{{ url_for('login6') }}"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-menu-task"></i></a>

                                                    <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                        <ul class="nav nav-tabs custon-set-tab">
                                                            <li class="active"><a data-toggle="tab" href="#Notes">Menu</a>
                                                            </li>
                                                            
                                                        </ul>

                                                        
                                                        
                                                        <div class="tab-content custom-bdr-nt">
                                                            <div id="Notes" class="tab-pane fade in active">
                                                                
                                                            
                                                                    <div class="project-st-list-area project-st-menu-scrollbar">
                                                                        <ul class="projects-st-menu-list">
                                                                            <li>
                                                                                
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <!-- <h2>Offline users</h2> -->
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example5">
                                                                                            <label class="onoffswitch-label" for="example5">
                                                                                                    <span class="onoffswitch-inner"></span>
                                                                                                    <span class="onoffswitch-switch"></span>
                                                                                                </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			 
			 
			 
			 
			 <!-----START OF CODEEEEE------>
			 
			 
			 
			 
			 
			
              
             <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="card">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
                                            <div class="breadcomb-icon">
                                                <i class="icon nalika-home"></i>
                                            </div>


                                            <div class="breadcomb-ctn">
                                                <h2><strong>GlucoDS</strong></h2>
                                                <h2>Dashboard</h2>
                                                <p>Welcome to GlucoDS <span class="bread-ntd">Admin Dashboard</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <!------DOWNLOAD PATIENT REPORT---->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
                                            <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
                                        </div>
                                    </div>
                                    
                                    <!---END OF DOWNLOAD PATIENT REPORT-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         </div>
        
        
        
     <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="card">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>Accuracy of prediction</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">98% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">10,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 98%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                         </div>


                        

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                             <div class="card">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">

                                <h4 class="text-left text-uppercase"><b>Low rate of Misdiagnosis</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red">10% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">2,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 18%;" class="progress-bar progress-bar-danger bg-red"></div>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                        
                        
                        
                         <div class="card">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                             <div class="card">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Simplicity</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue">70% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">8,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 70%;" class="progress-bar bg-blue"></div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        <!-----BEGIN DIAGNOSIS BUTTON--->
                        
                        
                        <!--
                        <div style="width: 100%; height: 50%; position: absolute; vertical-align: middle; text-align: center;">
                            
                            
                            
                            
                                    <button type="button" style ="margin-left: auto; margin-right: auto; display: block; margin-top: 15%; margin-bottom: 0%;" class="btn btn-custon-rounded-four btn-primary" >Begin Diagnosis</button>

                            </div>
                        
                        -->
                        
                        
                        
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="card">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                
                                <h4 class="text-left text-uppercase"><b>Large Datasets</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-purple">90% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">9,000</h2>
                                    </div>
                                    
                                    
                                    
                                </div>
                                
                                
                                
                                <div class="progress progress-mini">
                                    <div style="width: 90%;" class="progress-bar bg-purple"></div>
                                </div>
                                
                                
                            </div>
                                                        </div>
                            
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
         
        
					
						<section id="hero">
						
						<div style="width: 100%; height: 40%; margin-top: 10%; position:absolute; vertical-align: middle; text-align: center;">
							
									     <a href="{{ url_for('diagnosis') }}" class="btn-begin-test">Begin Test</a>


							</div>
						
						</section>
					
					
					
					
					
					
	  
	  
  </section>
					
					
					
                </div>
            </div>
		 
        </div>
		
		
		
		
	
	  
				
						
						 <!-- jquery
		============================================ -->
    <script src="/static/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="/static/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="/static/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="/static/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="/static/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="/static/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="/static/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="/static/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="/static/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/static/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="/static/js/metisMenu/metisMenu.min.js"></script>
    <script src="/static/js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="/static/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="/static/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="/static/js/calendar/moment.min.js"></script>
    <script src="/static/js/calendar/fullcalendar.min.js"></script>
    <script src="/static/js/calendar/fullcalendar-active.js"></script>
	<!-- float JS
		============================================ -->
    <script src="/static/js/flot/jquery.flot.js"></script>
    <script src="/static/js/flot/jquery.flot.resize.js"></script>
    <script src="/static/js/flot/curvedLines.js"></script>
    <script src="/static/js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="/static/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="/static/js/main.js"></script>
	
	
</body>
</html>
