<!DOCTYPE html PUBLIC>
<html>
<head>
<title>EMPLOYEE PAYROLL SYSTEM</title>
<!--<meta name="keywords" content="mini social, free download, website templates, CSS, HTML" />
<meta name="description" content="Mini Social is a free website template from templatemo.com" />-->
<link href="style.css" rel="stylesheet" type="text/css" />


<link rel="stylesheet" href="css/coda-slider.css" type="text/css" media="screen" charset="utf-8" />
<!--<link rel="stylesheet" href="css/payrol.min.css" type="text/css" media="screen" charset="utf-8" />-->
<!--<link rel="stylesheet"href="css/dropdown.css"type="text/css"media="screen"charset="utf-8">-->
<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

<script src="js/main.js"type="text/javascript"charset="utf-8"></script>
<!--<script src="js/jquery.min.js"type="text/javascript"charset="utf-8"></script>-->

</head>
<body>
<?php
include('connection.php');
session_start();
if (!isset($_SESSION['SSN'])){
header('location:index.php');
}
?>

<div id="slider">
	
    <div id="sidebar">
    	<div id="header">

        </div> <!-- end of header -->
        
        <ul class="navigation">
			<li><a href="#home">Home<span class="ui_icon home "></span></a></li>
			<li><a href="#viewsalary">View Your Salary <span class="ui_icon addnewemp"></span></a></li>
            <li><a href="#sendmessage">Message to Admin<span class="ui_icon removeemp"></span></a></li>
            <li><a href="#seemessage">Message from Admin<span class="ui_icon searchemp"></span></a></li>
			<li><a href="#address">Admin's Address<span class="ui_icon searchemp"></span></a></li>
			</ul>
			
    </div> <!-- end of sidebar -->

	<div id="main">
    	<ul id="social_box">
          
		</ul>
		<div style="color:red;margin-left:20px;">
			<?php
				echo"Message Succesfully sent!!!";
				//if(isset($_POST['submitadmin']))
				//{
					//include("adminMessage.php");
				//}
			?>
		</div>
		
		<div class="example">

			<ul id="nav">
				<!--<li>
					<?php echo "<img src='images/mine.jpg'";?>
				</li>-->
				<li class="current"><a href="userHome.php"><font size="0px">&#9660;</font></a>
					<ul>
						<li><a href="#uname">Change Username</a></li>
						<li><a href="#password">Change Password</a></li>
						<li><a href="#profile">Update Profile</a></li>
						<li><a href="userLogout.php">logout</a></li>
					</ul>
				</li>
			</ul>
<?php
$user_id=$_SESSION['SSN'];
$result=mysql_query("select * from SuppFac where SSN='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
?>
<div id="content">
    <div class="scroll">
                <div class="scrollContainer">
                  <div class="panel" id="home">
                        <center><h1>Employee Payroll System </h1></center>    
                       <div>
					
                    	<div class="image_wrapper image_fl"><img src="images/payroll.jpg" alt="image" /></div>
                        <p><em>A payroll system is a computerized technique that is used to calculate the sum of salaries employees who need to be paid in an organization. The name, address, Social Security number and the bank account numbers are the key elements in a payroll system. This method saves time.
</em></p>
                   <br><br><p>A payroll system involves everything that has to do with the payment of employees and the filling of employment taxes. This includes keeping track of hours, calculating wages, withholding taxes and other deductions, printing and delivering checks and paying employment taxes to the government.<a href="#"></a></p>
                    </div>
					</div>
				<div id="contact_form">
					<div class="panel" id="uname">
						<form method="post" name="contact" action="uname.php">
                                
                                <label for="author">Current Username:</label> <input type="text" id="author" name="cUserName" class="required input_field" />
                                <div class="cleaner_h10"></div>
                                
                                <label for="email">New Username:</label> <input type="text" id="email" name="nUserName" class="validate-email required input_field" />
                                <div class="cleaner_h10"></div>
                                
								<br/>							                                
                                <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Change" />
                                <input type="reset" class="submit_btn" name="submit" id="submit" value="Clear" /></center>
                            
                        </form>
					</div>
				</div>
				<div id="contact_form">
					<div class="panel" id="password">
						<form method="post" name="contact" action="password.php">
                                
                                <label for="author">Current Password:</label> <input type="password" id="author" name="cpassword" class="required input_field" />
                                <div class="cleaner_h10"></div>
                                
                                <label for="email">New Password:</label> <input type="password" id="email" name="npassword" class="validate-email required input_field" />
                                <div class="cleaner_h10"></div>
                                
								<br>							                                
                                <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Change" />
                                <input type="reset" class="submit_btn" name="submit" id="submit" value="Clear" /></center>
                            
                        </form>
					</div>
				</div>
				<div id="contact_form">
					<div class="panel" id="profile"style="overflow:scroll">
						<form method="post" name="contact" action="profile.php">
                                
                                <label for="author">Current SSN:</label> <input type="text" id="author" name="cSSN" class="required input_field" />
                                <div class="cleaner_h10"></div>
                                
                                <label for="email">New SSN:</label> <input type="text" id="email" name="nSSN" class="validate-email required input_field" />
                                <div class="cleaner_h10"></div>
                                <label for="email">First Name:</label> <input type="text" id="email" name="fName" class="validate-email required input_field" />
                                <div class="cleaner_h10"></div>
								<label for="email">Last Name:</label> <input type="text" id="email" name="lName" class="validate-email required input_field" />
                                <div class="cleaner_h10"></div>
								<label for="email">Username:</label> <input type="text" id="email" name="uName" class="validate-email required input_field" />
                                <div class="cleaner_h10"></div>
								<label for="email">Password:</label> <input type="password" id="email" name="pwd" class="validate-email required input_field" />
                                <div class="cleaner_h10"></div>
								<br>							                                
                                <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Change" />
                                <input type="reset" class="submit_btn" name="submit" id="submit" value="Clear" /></center>
                            
						</form>
					</div>
				</div>
                    <div class="panel" id="viewsalary">
                        <h3> See your Salary Below:</h3>
                		<p>If there is any problem, send a message to admin inorder to be corrected your salary before sending it to your bank account.
						If you want how all the computations are held on your salary to get your final net payment, you can ask the admin through messaging, by clicking
						on the left side "Message to Admin" button.</p>
						<?php include("connection.php")?>
						<?php
						$sql="select SSN from SuppFac where Status=1 and SSN LIKE 'F%'";
						$query=mysql_query($sql);
						if(!$query)
							echo"Failed to search!!!";
						else
						{
							$ssn="select SSN from SuppFac where Status=1 and SSN like 'F%'";
							$res11=mysql_query($ssn);
							$nrows11=mysql_num_rows($res11);
							if($nrows11!=0)
							{
							while($rows11=mysql_fetch_assoc($res11))
							{
								$ssnum=$rows11['SSN'];
							}
						echo"<em>";echo"SSN:";echo"&nbsp;"; include("ssn.php");echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo"Scholar:";echo"&nbsp;";include("scholar.php");
						echo"<br/><br/>";echo"Basic Salary:";echo"&nbsp;";include("bsalary.php");echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo"Scholar Pay:&nbsp;";include("scholarpay.php");echo"<br/><br/>";
						echo"Working Day:";echo"&nbsp;";include("workingday.php");echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo"Gross Salary:&nbsp;";include("gross.php");echo"<br/><br/>";
						echo"Annual Allowance:";echo"&nbsp;";include("annallow.php");echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo"Govt Pension:&nbsp;";include("govpen.php");echo"<br/><br/>";
						echo"Position:";echo"&nbsp;";include("position.php");echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo"Personal Pension:&nbsp;";include("perpention.php");echo"<br/><br/>";
						echo"Housing:";echo"&nbsp;";include("housing.php");echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo"Income Tax:&nbsp;";include("income.php");echo"<br/><br/>";
						echo"Allowed Tax:&nbsp;";include("taxallow.php");echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo"Total Deduction:&nbsp;";include("deduction.php");echo"<br/><br/>";echo"</em>";
						echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						echo"<b><em>";echo"Bank Account:";echo"&nbsp";include("bank.php");echo"</em></b>";echo"<br/><br/>";
						echo"<h4>&nbsp;&nbsp;&nbsp;Your Final Net payment:&nbsp;";include("netpay.php");echo"</h4>";
					}
					else 
					{
							$ssn2="select SSN from SuppFac where Status=1 and SSN like 'S%'";
							$res1=mysql_query($ssn2);
							$nrows1=mysql_num_rows($res1);
							if($nrows1!=0)
							{
								while($rows1=mysql_fetch_assoc($res1))
								{
									$ssnum=$rows1['SSN'];
								}
								echo"<em>";echo"SSN:";echo"&nbsp;"; include("ssn.php");echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo"Govt Pension:";echo"&nbsp;";include("govpen.php");
						echo"<br/><br/>";echo"Basic Salary:";echo"&nbsp;";include("bsalary.php");echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo"Personal Pension:&nbsp;";include("perpention.php");echo"<br/><br/>";
						echo"Working Day:";echo"&nbsp;";include("workingday.php");echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo"Income Tax:&nbsp;";include("income.php");echo"<br/><br/>";
						echo"Gross Salary:";echo"&nbsp;";include("gross.php");echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo"Total Deduction:&nbsp;";include("deduction.php");echo"<br/><br/>";echo"</em>";
						echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						echo"<b><em>";echo"Bank Account:";echo"&nbsp";include("bank.php");echo"</em></b>";echo"<br/><br/>";
						echo"<h4>&nbsp;&nbsp;&nbsp;Your Final Net payment:&nbsp;";include("netpay.php");echo"</h4>";
							}
							
					
					}
				}
			?>
                    </div>
				
				<div id="contact_form">
                    <div class="panel" id="sendmessage">
                       
						<form method="post" name="contact" action="">
                                
                                <em>write your message below:</em><br/>
								<textarea name="Comment"></textarea><br/><br/>
                                <center><input type="submit" class="submit_btn" name="submitadmin" id="submit" value="Submit" /></center>
                          </form>
					</div>
				</div>
					<div class="panel"id="seemessage">
						<u><em><b>Messages From Admin:</b></em></u><br/>
						<?php include("message.php");
						?>
					</div>
					
					<div class="panel"id="address">
						<h3>Phone Number : +251 919 030949</h3>
						<h3>Gmail : gereziherkid@gmail.com</h3>
					</div>
					
                </div>
			</div>
            
        <!-- end of scroll -->
        
        </div> <!-- end of content -->
        
        <div id="footer">

           <center>&copy; 2008 E.C All Rights Reserved!<br/>
					Done By Adigrat IT Summer Students!!! </center>
        
        </div> <!-- end of footer -->
    
    </div> <!-- end of main -->
</div>

</body>
</html>