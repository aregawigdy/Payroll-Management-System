<!DOCTYPE html PUBLIC>
<html>
<head>
<title>PAYROLL SYSTEM</title>
<!--<meta name="keywords" content="mini social, free download, website templates, CSS, HTML" />
<meta name="description" content="Mini Social is a free website template from templatemo.com" />-->
<link href="style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/coda-slider.css" type="text/css" media="screen" charset="utf-8" />

<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>

<div id="slider">
	
    <div id="sidebar">
    	<div id="header">
        
        </div> 
        <br><br>
        <ul class="navigation">
            <li><a href="#home">Home<span class="ui_icon home"></span></a></li>
        </ul>
    </div> <!-- end of sidebar -->

	<div id="main">
	<div class="create"style="text-align:right;margin-top:-20px">
			
			<!--<a href="#account">Create Account</a>-->
			
	</div>
    <ul id="social_box">
		
		
	</ul>
        <div style="color:red;margin-left:20px;">
				<?php
					if(isset($_POST['submit']))
					{
						include("login.php");
					}
					if(isset($_POST['esubmit']))
					{
						include("userLogin.php");
					}
				?>
		</div>
        <div id="content">
        
        <!-- scroll -->
        
        	
            <div class="scroll">
                <div class="scrollContainer">
                
                    <div class="panel" id="home">
                        <center><h1>Payroll System </h1></center>    
                       <div>
					
                    	<div class="image_wrapper image_fl"><img src="images/payroll.jpg" alt="image" /></div>
                        <p><em>A payroll system is a computerized technique that is used to calculate the sum of salaries employees who need to be paid in an organization. The name, address, Social Security number and the bank account numbers are the key elements in a payroll system. This method saves time.
</em></p>
                   <br><br><p>A payroll system involves everything that has to do with the payment of employees and the filling of employment taxes. This includes keeping track of hours, calculating wages, withholding taxes and other deductions, printing and delivering checks and paying employment taxes to the government.<a href="#"></a></p>
                
							<center><div class="btn_more"><a href="#adminlogin">Login as Admin <span>&raquo;</span></a></div>
							<div class="btn_more"><a href="#userlogin">Login as User <span>&raquo;</span></a></div></center>
					   </div>
					   <br/>
					   <!--<div class="btn_more"><a href="#payroll">About Payroll system <span>&raquo;</span></a></div>-->
                    </div> <!-- end of home -->
                    
					   <div id="contact_form">
					   <div class="panel"id="adminlogin">
							<h4>Admin Login</h4>
                            <form method="post" name="contact" action="">
                                
                                <label for="author">Username:</label> <input type="text" id="author" name="UserName" class="required input_field" />
                                <div class="cleaner_h10"></div>
                                
                                <label for="email">Password:</label> <input type="password" id="email" name="Password" class="validate-email required input_field" />
                                <div class="cleaner_h10"></div>
                                
															                                
                                <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Login" /></center>
                                
                            
                            </form>
							
						</div>
						</div>
						<div id="contact_form">
						<div class="panel"id="userlogin">
							<h4>Employee/user Login</h4>
                            <form method="post" name="contact" action="">
                                
                                <label for="author">Username:</label> <input type="text" id="author" name="eUserName" class="required input_field" />
                                <div class="cleaner_h10"></div>
                                
                                <label for="email">Password:</label> <input type="password" id="email" name="ePassword" class="validate-email required input_field" />
                                <div class="cleaner_h10"></div>
                                
															                                
                                <center><input type="submit" class="submit_btn" name="esubmit" id="submit" value="Login" /></center>
                                
                            
                            </form>
							
							
						</div>
						</div>
						
                        
					
                <div class="panel" id="account">
					<div id="contact_form">
							<h4>Employee/user Login</h4>
                            <form method="post" name="contact" action="userHome.php">
                                
								<label for="author">SSN:</label> <input type="text" id="author" name="SSNum" class="required input_field" onblur="valsupSSN()" />
								<span id="ssn_message"></span>
								
                                <label for="author">Username:</label> <input type="text" id="author" name="eUserName" class="required input_field" />
                                <div class="cleaner_h10"></div>
                                
                                <label for="email">Password:</label> <input type="password" id="email" name="ePassword" class="validate-email required input_field" />
                                <div class="cleaner_h10"></div>
                                
								<label for="email">Confirm Password:</label> <input type="password" id="email" name="cPassword" class="validate-email required input_field" />
                                <div class="cleaner_h10"></div>
															                                
                                <center><input type="submit" class="submit_btn" name="esubmit" id="submit" value="Login" />
                                <input type="reset" class="submit_btn" name="submit" id="submit" value="Clear" /></center>
                            
                            </form>
							
							
						</div>
				</div>
                </div>
			</div>
            
        <!-- end of scroll -->
        
        </div> <!-- end of content -->
        
        <div id="footer">

            Copyright &copy; 2008 E.C <em>Adigrat</em> | <a></a> by IT 3rd Year Summer Students<a></a>
        
        </div> <!-- end of footer -->
    
    </div> <!-- end of main -->
</div>

</body>
</html>