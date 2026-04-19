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
    <link rel="stylesheet" href="/static/css/bootstrap-theme.min.css">
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
	
	
	
	
	 <!-- Form CSS
		============================================ -->
    <link rel="stylesheet" href="/static/css/form.css">
	
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
    <!-- modernizr JS
		============================================ -->
    <script src="/static/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
	
	<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
				<!--GLUCODS LOGO-->
				
				
                <a href="dashboard2.php"><img class="main-logo" src="" alt="" /></a>
                <strong><img src="" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="img/notification/4.jpg" alt="" /></a>
					<h2> <span class="min-dtn">Physician</span></h2>
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
			
			
			<!--HOME NAVIGATION QUICK LINKS-->
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
                                <li><a title="Start Diagnosis" href="{{ url_for('patientData') }}"><span class="mini-sub-pro">Start Diagnosis</span></a></li>
                                <li><a title="View Test" href="{{ url_for('viewrecords') }}"><span class="mini-sub-pro">View Patient Data</span></a></li>
                                
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
                                
                                
                                
                            
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
						
						<!--WELCOME PAGE!!!!!!!!!!!!!!--->
	
	
	  <!-- Start Welcome area -->
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
                                                            <span class="admin-name">Physician</span>
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
         
        </div>
        
        
        <br>
        <br>
		
	 <br>
        <br>
        





<!-- 
    <?php  
 $connect = mysqli_connect("localhost:3308", "root", "", "GlucoDS");  
 $query ="SELECT * FROM PatientData ORDER BY P_ID DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  

<div class="table-responsive">  
                     <table id="PatientData" class="table table-striped table-hover width=auto;">  
                          <thead bgcolor="white"> 
                               <tr>  
                                 
                                    <td>Patient_ID</td>  
                                    <td>Doctor_ID</td>  
                                    <td>PatientFname</td>  
                                    <td>PatientLname</td>  
                                    <td>DOB</td>
                                    <td>Address</td>
                                    <td>State</td>
                                    <td>Contact</td>
                                    <td>Emergency Contact</td>  

                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr bgcolor=white>
                                    <td>'.$row["P_ID"].'</td>  
                                    <td>'.$row["Doctor_ID"].'</td>  
                                    <td>'.$row["PatientFname"].'</td>  
                                    <td>'.$row["PatientLname"].'</td>  
                                    <td>'.$row["DOB"].'</td>
                                    <td>'.$row["Address"].'</td>   
                                    <td>'.$row["State"].'</td> 
                                    <td>'.$row["Contact"].'</td> 
                                    <td>'.$row["EmergencyContact"].'</td> 
                                   
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>
 -->


{% block body %}
<div class="container">
<div class="table-responsive">
    <div class="btn-toolbar">
    <h2>Patient List <h2><a class="btn btn-info pull-left" href="{{ url_for('viewtests2') }}" role="button">View Test</a></h2> <button type="button" class="btn btn-success pull-right " data-toggle="modal" data-target="#mymodal">Add Patient</button></h2>
</div>

    {%with messages = get_flashed_messages()%}

    {%if messages%}

    {%for messages in messages %}

    <div class="alert alert-success alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">x</span>
        </button>
         {{messages}}
    </div>

   

    {%endfor%}

    {%endif%}

    {%endwith%}



   <table id="PatientData" class="table table-striped table-hover">  
    
<tr>
    <th>Patient_ID</th>
    <th>Doctor_ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>DOB</th>
    <th>Address</th>
    <th>State</th>
    <th>Contact</th>
    <th>EmergencyContact</th>
    <th>Action</th>

</tr>
      


      {% for data in data %}
<tr bgcolor="white">
    
    <td>{{data.P_ID}}</td>
    <td>{{data.Doctor_ID}}</td>
    <td>{{data.PatientFname}}</td>
    <td>{{data.PatientLname}}</td>
    <td>{{data.DOB}}</td>
    <td>{{data.Address}}</td>
    <td>{{data.State}}</td>
    <td>{{data.Contact}}</td>
    <td>{{data.EmergencyContact}}</td>

    <td>
        
        <a href="" class="btn btn-warning btn-xs" data-mytitle="{{data.Doctor_ID}}" data-firstname="{{data.PatientFname}}" data-lastname="{{data.PatientLname}}" data-dob="{{data.DOB}}" data-address="{{data.Address}}" data-state="{{data.State}}" data-contact="{{data.Contact}}" data-emergencycontact="{{data.EmergencyContact}}" data-toggle="modal"  data-id='{{data.P_ID}}' data-target='#edit'>Edit</a>

        <!-- <a href="/delete/{{data.P_ID}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to Delete')" id="{{data.P_ID}}">Delete</a> -->

        <button class="btn btn-danger btn-xs"  data-id='{{data.P_ID}}' data-toggle="modal" data-target='#delete'>Delete</button>


        <!-- <a href="" class="btn btn-primary btn-xs" data-mytitle="{{data.Doctor_ID}}" data-firstname="{{data.PatientFname}}" data-lastname="{{data.PatientLname}}" data-dob="{{data.DOB}}" data-address="{{data.Address}}" data-state="{{data.State}}" data-contact="{{data.Contact}}" data-emergencycontact="{{data.EmergencyContact}}" data-toggle="modal"  data-id='{{data.P_ID}}' data-age='{{test.Age}}' data-bmi='{{test.BMI}}' data-target='#view'>View Patient</a> -->
    </td>
</tr>



{% endfor %}
</div>

<!---------------------------->
<!--DELETE PATIENT/ EDIT MODAL------------>


<div id="delete" class="modal modal-danger fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title text-center">Delete Confirmation</h4>
                
            </div>
            <form action="{{ url_for('delete') }}" method="post">
            <div class="modal-body">
                <p class="text-center">
                    Are you sure you want to delete this?
                </p>
                
                <input type="hidden" name="v" id="p_id" value="">
                     <div class="form-group">
                    <button type="submit" class="btn btn-warning" name="submit" id="update_data">Yes, Delete</button>
                    </div>

                </form>

            </div>

            <div class="modal-footer">
                
                <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
            </div>
        </div>
        


    </div>
    



</div>



<!----VIEW PATIENT/PREDICT MODAL--->





<div id="view" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">View Patient Details</h4>
                
            </div>
            
            <div class="modal-body">
                
                <form action="{{ url_for('update') }}" method="POST">
                   <div class="form-group">

                        <div class="form-group">
                            <input type="hidden" name="id" value="{{test.Patient_ID}}">


                                        <label>Doctor</label>
                                        <select id="doctor" name="doctor" class="form-control">
                                           <option value="{{data.Physician_ID}}" disabled selected>Select Doctor</option>
                                            {% for account in account %}
                                        <option selected value='{{ account.Physician_ID}}'>{{account.FirstName}}</option>
                                        {% endfor %}
                                        </select>
                                   </div>

                        <label>FirstName:</label>
                        <input type="text" class="form-control" name="FirstName" value= "{{data.PatientFname}}" required="1" id="FirstName">
                        

                    </div>

                    <div class="form-group">

                        <label>LastName:</label>
                        <input type="text" class="form-control" name="LastName" value="{{data.PatientLname}}" required="1" id="LastName">
                        

                    </div>



                    <div class="form-group">
                            <input type="hidden" name="id" value="{{data.P_ID}}">


                                        <label>Age</label>
                                        <select id="age" name="age" class="form-control">
                                           <option value="{{test.Test_ID}}" disabled selected>Age</option>
                                            {% for test in test %}
                                        <option selected value='{{ test.Patient_ID}}'>{{test.Age}}</option>
                                        {% endfor %}
                                        </select>
                                   </div>


                                   <div class="form-group">
                            <input type="hidden" name="id" value="{{data.P_ID}}">


                                        <label>Body Mass Index</label>
                                        <select id="bmi" name="age" class="form-control">
                                           <option value="{{test.Test_ID}}" disabled selected>BMI</option>
                                            {% for test in test %}
                                        <option selected value='{{ test.Patient_ID}}'>{{test.BMI}}</option>
                                        {% endfor %}
                                        </select>
                                   </div>



                    <div class="form-group">
                        <label>DOB:</label>
                        <input type="date" class="form-control" name="DOB" value="{{data.DOB}}" required="1" id="DOB">
                    </div>

                    <div class="form-group">
                        <label>Address:</label>
                        <input type="text" class="form-control" name="Address" value="{{data.Address}}" required="1" id="Address">

                    </div>

                     <div class="form-group">
                        <label>State:</label>
                                            <select name="State" id="Select" class="form-control" required="1">
                                                <option value="" selected="selected">- Select State -</option>
                                                  <option value="Abuja FCT">Abuja FCT</option>
                                                  <option value="Abia">Abia</option>
                                                  <option value="Adamawa">Adamawa</option>
                                                  <option value="Akwa Ibom">Akwa Ibom</option>
                                                  <option value="Anambra">Anambra</option>
                                                  <option value="Bauchi">Bauchi</option>
                                                  <option value="Bayelsa">Bayelsa</option>
                                                  <option value="Benue">Benue</option>
                                                  <option value="Borno">Borno</option>
                                                  <option value="Cross River">Cross River</option>
                                                  <option value="Delta">Delta</option>
                                                  <option value="Ebonyi">Ebonyi</option>
                                                  <option value="Edo">Edo</option>
                                                  <option value="Ekiti">Ekiti</option>
                                                  <option value="Enugu">Enugu</option>
                                                  <option value="Gombe">Gombe</option>
                                                  <option value="Imo">Imo</option>
                                                  <option value="Jigawa">Jigawa</option>
                                                  <option value="Kaduna">Kaduna</option>
                                                  <option value="Kano">Kano</option>
                                                  <option value="Katsina">Katsina</option>
                                                  <option value="Kebbi">Kebbi</option>
                                                  <option value="Kogi">Kogi</option>
                                                  <option value="Kwara">Kwara</option>
                                                  <option value="Lagos">Lagos</option>
                                                  <option value="Nassarawa">Nassarawa</option>
                                                  <option value="Niger">Niger</option>
                                                  <option value="Ogun">Ogun</option>
                                                  <option value="Ondo">Ondo</option>
                                                  <option value="Osun">Osun</option>
                                                  <option value="Oyo">Oyo</option>
                                                  <option value="Plateau">Plateau</option>
                                                  <option value="Rivers">Rivers</option>
                                                  <option value="Sokoto">Sokoto</option>
                                                  <option value="Taraba">Taraba</option>
                                                  <option value="Yobe">Yobe</option>
                                                  <option value="Zamfara">Zamfara</option>
                                            
                                            
                                            </select>

                    </div>

                     <div class="form-group">
                        <label>Contact:</label>
                        <input type="number" class="form-control" name="Contact" value="{{data.Contact}}" required="1" id="Contact">

                    </div>

                     <div class="form-group">
                        <label>Emergency Contact:</label>
                        <input type="number" class="form-control" name="EmergencyContact" value="{{data.EmergencyContact}}" required="1" id="EmergencyContact">

                    </div>


                     <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit">Update Data</button>
                    </div>

                </form>

            </div>

            <div class="modal-footer">
                
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        


    </div>
    



</div>















<!---------------------------->
<!--UPDATE PATIENT/ EDIT MODAL------------>


<div id="edit" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Update Patient</h4>
                
            </div>
            
            <div class="modal-body">
                
                <form action="{{ url_for('update') }}" method="POST">
                   <div class="form-group" id="updateForm">

                        <div class="form-group">
                            <input type="hidden" name="id" value="{{data.P_ID}}">


                                        <label>Doctor</label>
                                        <select id="doctor" name="doctor" class="form-control">
                                           <option value="{{data.Physician_ID}}" disabled selected>Select Doctor</option>
                                            {% for account in account %}
                                        <option selected value='{{ account.Physician_ID}}'>{{account.FirstName}}</option>
                                        {% endfor %}
                                        </select>
                                   </div>

                        <label>FirstName:</label>
                        <input type="text" class="form-control" name="FirstName" value= "{{data.PatientFname}}" required="1" id="FirstName">
                        

                    </div>

                    <div class="form-group">

                        <label>LastName:</label>
                        <input type="text" class="form-control" name="LastName" value="{{data.PatientLname}}" required="1" id="LastName">
                        

                    </div>

                    <div class="form-group">
                        <label>DOB:</label>
                        <input type="date" class="form-control" name="DOB" value="{{data.DOB}}" required="1" id="DOB">
                    </div>

                    <div class="form-group">
                        <label>Address:</label>
                        <input type="text" class="form-control" name="Address" value="{{data.Address}}" required="1" id="Address">

                    </div>

                     <div class="form-group">
                        <label>State:</label>
                                            <select name="State" id="Select" class="form-control" required="1">
                                                <option value="" selected="selected">- Select State -</option>
                                                  <option value="Abuja FCT">Abuja FCT</option>
                                                  <option value="Abia">Abia</option>
                                                  <option value="Adamawa">Adamawa</option>
                                                  <option value="Akwa Ibom">Akwa Ibom</option>
                                                  <option value="Anambra">Anambra</option>
                                                  <option value="Bauchi">Bauchi</option>
                                                  <option value="Bayelsa">Bayelsa</option>
                                                  <option value="Benue">Benue</option>
                                                  <option value="Borno">Borno</option>
                                                  <option value="Cross River">Cross River</option>
                                                  <option value="Delta">Delta</option>
                                                  <option value="Ebonyi">Ebonyi</option>
                                                  <option value="Edo">Edo</option>
                                                  <option value="Ekiti">Ekiti</option>
                                                  <option value="Enugu">Enugu</option>
                                                  <option value="Gombe">Gombe</option>
                                                  <option value="Imo">Imo</option>
                                                  <option value="Jigawa">Jigawa</option>
                                                  <option value="Kaduna">Kaduna</option>
                                                  <option value="Kano">Kano</option>
                                                  <option value="Katsina">Katsina</option>
                                                  <option value="Kebbi">Kebbi</option>
                                                  <option value="Kogi">Kogi</option>
                                                  <option value="Kwara">Kwara</option>
                                                  <option value="Lagos">Lagos</option>
                                                  <option value="Nassarawa">Nassarawa</option>
                                                  <option value="Niger">Niger</option>
                                                  <option value="Ogun">Ogun</option>
                                                  <option value="Ondo">Ondo</option>
                                                  <option value="Osun">Osun</option>
                                                  <option value="Oyo">Oyo</option>
                                                  <option value="Plateau">Plateau</option>
                                                  <option value="Rivers">Rivers</option>
                                                  <option value="Sokoto">Sokoto</option>
                                                  <option value="Taraba">Taraba</option>
                                                  <option value="Yobe">Yobe</option>
                                                  <option value="Zamfara">Zamfara</option>
                                            
                                            
                                            </select>

                    </div>

                     <div class="form-group">
                        <label>Contact:</label>
                        <input type="number" class="form-control" name="Contact" value="{{data.Contact}}" required="1" id="Contact">

                    </div>

                     <div class="form-group">
                        <label>Emergency Contact:</label>
                        <input type="number" class="form-control" name="EmergencyContact" value="{{data.EmergencyContact}}" required="1" id="EmergencyContact">

                    </div>


                     <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit" id="update_data">Update Data</button>
                    </div>

                </form>

            </div>

            <div class="modal-footer">
                
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        


    </div>
    



</div>












<!-- ADD PATIENT MODAL -->
<div id="mymodal" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Add Patient Data</h4>
                
            </div>




            
            <div class="modal-body">
                 <form action="{{ url_for('viewrecords') }}" method="POST" id="submit_form"> 
               

                        <div class="form-group">
                                        <label>Doctor</label>
                                        <select id="doctor" name="doctor" class="form-control">
                                           <option value="" disabled selected>Select Doctor</option>
                                            {% for account in account %}
                                        <option selected value='{{ account.Physician_ID}}'>{{account.FirstName}}</option>
                                        {% endfor %}
                                        </select>
                                   </div>

                        <div class="form-group">


                        <label>FirstName:</label>
                        <input type="text" class="form-control" name="FirstName" required="1">
                        

                    </div>

                    <div class="form-group">

                        <label>LastName:</label>
                        <input type="text" class="form-control" name="LastName" required="1">
                        

                    </div>

                    <div class="form-group">
                        <label>DOB:</label>
                        <input type="date" class="form-control" name="DOB" required="1">
                    </div>

                    <div class="form-group">
                        <label>Address:</label>
                        <input type="text" class="form-control" name="Address" required="1">

                    </div>

                     <div class="form-group">
                        <label>State:</label>
                                            <select name="State" id="Select" class="form-control">
                                                <option value="" selected="selected">- Select State -</option>
                                                  <option value="Abuja FCT">Abuja FCT</option>
                                                  <option value="Abia">Abia</option>
                                                  <option value="Adamawa">Adamawa</option>
                                                  <option value="Akwa Ibom">Akwa Ibom</option>
                                                  <option value="Anambra">Anambra</option>
                                                  <option value="Bauchi">Bauchi</option>
                                                  <option value="Bayelsa">Bayelsa</option>
                                                  <option value="Benue">Benue</option>
                                                  <option value="Borno">Borno</option>
                                                  <option value="Cross River">Cross River</option>
                                                  <option value="Delta">Delta</option>
                                                  <option value="Ebonyi">Ebonyi</option>
                                                  <option value="Edo">Edo</option>
                                                  <option value="Ekiti">Ekiti</option>
                                                  <option value="Enugu">Enugu</option>
                                                  <option value="Gombe">Gombe</option>
                                                  <option value="Imo">Imo</option>
                                                  <option value="Jigawa">Jigawa</option>
                                                  <option value="Kaduna">Kaduna</option>
                                                  <option value="Kano">Kano</option>
                                                  <option value="Katsina">Katsina</option>
                                                  <option value="Kebbi">Kebbi</option>
                                                  <option value="Kogi">Kogi</option>
                                                  <option value="Kwara">Kwara</option>
                                                  <option value="Lagos">Lagos</option>
                                                  <option value="Nassarawa">Nassarawa</option>
                                                  <option value="Niger">Niger</option>
                                                  <option value="Ogun">Ogun</option>
                                                  <option value="Ondo">Ondo</option>
                                                  <option value="Osun">Osun</option>
                                                  <option value="Oyo">Oyo</option>
                                                  <option value="Plateau">Plateau</option>
                                                  <option value="Rivers">Rivers</option>
                                                  <option value="Sokoto">Sokoto</option>
                                                  <option value="Taraba">Taraba</option>
                                                  <option value="Yobe">Yobe</option>
                                                  <option value="Zamfara">Zamfara</option>
                                            
                                            
                                            </select>

                    </div>

                     <div class="form-group">
                        <label>Contact:</label>
                        <input type="number" class="form-control" name="Contact" required="1">

                    </div>

                     <div class="form-group">
                        <label>Emergency Contact:</label>
                        <input type="number" class="form-control" name="EmergencyContact" required="1">

                    </div>
                    
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>

                     

</form>
<!-- <div class="form-group">
                        <div class="msg">{{ msg }}</div>
                        
                        <button type="submit" class="btn btn-primary" data-dismiss="modal" name="submit" id="submit">Add Patient</button>
                         </div>
</div> -->

                   
                    <div class="modal-footer">
                        
            
                <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
            </div>
        </div>

    </div>

</div>

</div>
{% endblock %}	
		
						
						 <!-- jquery
		============================================ -->
    <script src="/static/js/vendor/jquery-1.12.4.min.js"></script>

     

                         <!-- jquery
        ============================================ -->
    <script src=/static/js/jquery-3.3.1.js"></script>

    
    


    <!-- bootstrap JS
		============================================ -->
    <script src="/static/js/bootstrap.min.js"></script>
    <script src="/static/js/bootstrap3.js"></script>
    <script src="/static/js/npm.js"></script>
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




<script>
$('#edit').on('show.bs.modal', function (event) {


    console.log('Modal Opened')
      var button = $(event.relatedTarget) // Button that triggered the modal
      var title = button.data('mytitle')
      var firstname = button.data('firstname')
      var lastname = button.data('lastname')
      var dob = button.data('dob')
      var address = button.data('address') 
      var state = button.data('state')
      var contact = button.data('contact')
      var emergencycontact = button.data('emergencycontact')
      var modal = $(this)

      modal.find('.modal-body #doctor').val(title);
      modal.find('.modal-body #FirstName').val(firstname);
      modal.find('.modal-body #LastName').val(lastname);
      modal.find('.modal-body #DOB').val(dob);
      modal.find('.modal-body #Address').val(address);
      modal.find('.modal-body #Select').val(state);
      modal.find('.modal-body #Contact').val(contact);
      modal.find('.modal-body #EmergencyContact').val(emergencycontact);

      /*$(document).on("click",'#update_data' function (event)){
        event.preventDefault();
        $.ajax({
            url:"{{ url_for('update') }}",
            type:"post",
            data:$("updateForm").serialize(),
            success:function(data)
                alert('1 Record Updated Successfully');
                $("#edit").modal('hide');
                location.reload(); 

        })
    }*/
})
</script>

<script>
$('#view').on('show.bs.modal', function (event) {
    console.log('Modal Opened')
      var button = $(event.relatedTarget) // Button that triggered the modal
      var title = button.data('mytitle')
      var firstname = button.data('firstname')
      var lastname = button.data('lastname')
      var dob = button.data('dob')
      var address = button.data('address') 
      var state = button.data('state')
      var contact = button.data('contact')
      var emergencycontact = button.data('emergencycontact')
      var age = button.data('Age')
      var bmi = button.data('Bmi')
      var modal = $(this)

      modal.find('.modal-body #doctor').val(title);
      modal.find('.modal-body #FirstName').val(firstname);
      modal.find('.modal-body #LastName').val(lastname);
      modal.find('.modal-body #DOB').val(dob);
      modal.find('.modal-body #Address').val(address);
      modal.find('.modal-body #Select').val(state);
      modal.find('.modal-body #Contact').val(contact);
      modal.find('.modal-body #EmergencyContact').val(emergencycontact);
      modal.find('.modal-body #bmi').val(bmi);
})
</script>
   
	
<script>
$('#delete').on('show.bs.modal', function (event) {
    console.log('Modal Opened')
      var button = $(event.relatedTarget)
      var data-id = button.data('data-id')
      var modal = $(this)

      modal.find('.modal-body #p_id').val(data-id);
})
</script>

 
</body>
</html>

<!-- <script>  
$(document).ready(function() {
    $('#PatientData').DataTable( {


        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+data[0]+' '+data[1];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
            }
        }




    } );
} ); 
 </script>  
 -->

<!--
<script>
$(document).ready(function() {
    var table = $('#PatientData').DataTable( {
        "ajax": "data/arrays.txt",
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<button>Click!</button>"
        } ]
    } );
 
    $('#PatientData tbody').on( 'click', 'button', function () {
        var data = table.row( $(this).parents('tr') ).data();
        alert( data[0] +"'s salary is: "+ data[ 5 ] );
    } );
} );

</script> 

-->
