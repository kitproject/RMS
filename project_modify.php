<?php
error_reporting(E_ALL);
include("config.php");
session_start();

$projid=$_REQUEST["projid"];
//$empid=$_GET["empid"];
//echo "$projid";
 
if($_SERVER["REQUEST_METHOD"] == "POST") {
	// username and password sent from form
	//$projid= $_POST['projid'];
	//$projname = $_POST['projname'];
	//$start= $_POST['startdate'];
	//$start_date = date('Y-m-d', strtotime($start));//date format
	$end= $_POST['enddate'];
	$end_date = date('Y-m-d', strtotime($end));//date format
	//$mgrid= $_POST['mgrid'];
	$domain= $_POST['domain'];
	$status= $_POST['status'];
	$description= $_POST['description'];
	
	$sqlupdateuser="UPDATE projects SET end_date='$end_date',domain='$domain',status='$status',description='$description' WHERE proj_id='$projid';";
	$updateuser= mysqli_query($db, $sqlupdateuser);
	
	//Code Trial: 23rd Dec, 2016
	
	/*$sqlcreatelogin="INSERT INTO login (emp_id,username,password) VALUES ('$empid','$empid','$empid');";
	$createlogin= mysqli_query($db, $sqlcreatelogin);*/
	
	
	
	}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Modify Project</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Resource Management System</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="#" class="dropdown-toggle" data-toggl
	        		e="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header">
							<strong>Messages</strong>
							<div class="progress thin">
							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							    <span class="sr-only">40% Complete (success)</span>
							  </div>
							</div>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/2.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/3.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/4.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/5.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/pic1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="dropdown-menu-footer text-center">
							<a href="#">View all messages</a>
						</li>	
	        		</ul>
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png" alt=""/><span class="badge">9</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
						<li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
						<li class="divider"></li>
						<li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
						<li class="m_2"><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="forms.php">Create</a>
                                </li>
	                            <li>
                                    <a href="premodify.php">Modify</a>
                                </li>
                            	<li>
                                    <a href="grids.php">Delete</a>
                                </li>
                                <li>
                                    <a href="grids.php">View</a>
                                </li>
                            
                            </ul>
                            </li>
                            
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Projects<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="project_create.php">Create</a>
                                </li>
	                            <li>
                                    <a href="project_premodify.php">Modify</a>
                                </li>
                            	<li>
                                    <a href="project_archive.php">Archive</a>
                                </li>
                            </ul>
                            </li>
                      
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3>Forms</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form method="post" class="form-horizontal">
								<div class="form-group">
									<?php
									
										$sqlvalues="SELECT * FROM projects WHERE proj_id='$projid'";

										$values=mysqli_query($db,$sqlvalues);
										foreach($values as $value)
										{
										?>
									<label for="focusedinput" class="col-sm-2 control-label">Project Id : </label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="projid" value="<?php echo $value['proj_id']?>" disabled>
									</div>
									<div class="col-sm-2">
										<p class="help-block">Your help text!</p>
									</div>
								</div>
								<div class="form-group">
									<label for="text" class="col-sm-2 control-label">Project Name : </label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="projname" value="<?php echo $value['proj_name']?>" disabled>
									</div>
								</div>
								
								
							  <div class="form-group">
									<label for="text" class="col-sm-2 control-label">Start Date : </label>
									
								<div class="checkbox-inline"><label><input type="date" name="startdate" value="<?php echo $value['start_date']?>" disabled/></label></div>
							  </div>
								<div class="form-group">
									<label for="text" class="col-sm-2 control-label">End Date : </label>
									
										<div class="checkbox-inline"><label><input type="date" name="enddate" value="<?php echo $value['end_date']?>"/></label></div>
								
							  </div>

								
								<div class="form-group">
									<label for="text" class="col-sm-2 control-label">Project Manager : </label>
									<div class="col-sm-8">
											<?php 
											$sqlusers="SELECT fname,lname FROM users where emp_id='".$value['emp_id']."'";
											$users=mysqli_query($db,$sqlusers);
											foreach ($users as $user)
											{?>
												<input type="text" class="form-control1" name="mgrid" value="<?php echo $user['fname']?> <?php echo $user['lname']?>" disabled>
											<?php }?>
									</div>
								</div>
								<div class="form-group">
									<label for="text" class="col-sm-2 control-label">Domain : </label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="domain" value="<?php echo $value['domain']?>">
									</div>
								</div> 
								<div class="form-group">
									<label for="text" class="col-sm-2 control-label">Status : </label>
									<div class="col-sm-8">
										<!--<input type="text" class="form-control1" name="status" placeholder="Status" required>!-->
										<select name="status">
										<option <?php echo ($value['status'] == 'Open')?"selected":"" ?> >Open</option>
										<option <?php echo ($value['status'] == 'WIP')?"selected":"" ?>>WIP</option>
										<option <?php echo ($value['status'] == 'Closed')?"selected":"" ?>>Closed</option>
										<option <?php echo ($value['status'] == 'Hold')?"selected":"" ?>>Hold</option>
									</select>									
									</div> 
								</div> 
								<div class="form-group">
									<label for="text" class="col-sm-2 control-label">Status Description : </label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="description" value="<?php echo $value['description']?>">
									</div>
								</div>   
								<?php }?>
  </div>
  
	  <div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<input type="submit" class="btn-success btn" value="Submit"/>
				<a href="index.php"><button class="btn-default btn">Cancel</button></a>
				<button type="reset" class="btn-inverse btn">Reset</button>
			</div>
		</div>
	 </div>
    
  </div>
  
  </div>
  </form>
  <div class="copy_layout">
      <p>Copyright © 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
  </div>
  </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>