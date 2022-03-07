<!DOCTYPE html PUBLIC>
<html>
<head>
<title>EMPLOYEE PAYROLL SYSTEM</title>
<!--<meta name="keywords" content="mini social, free download, website templates, CSS, HTML" />
<meta name="description" content="Mini Social is a free website template from templatemo.com" />-->
<link href="style.css" rel="stylesheet" type="text/css" />


<link rel="stylesheet" href="css/coda-slider.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet"href="css/dropdown.css"type="text/css"media="screen"charset="utf-8">
<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

<script src="js/main.js"type="text/javascript"charset="utf-8"></script>

</head>
<body>
<?php
include('connection.php');
session_start();
if (!isset($_SESSION['admin_id'])){
header('location:index.php');
}
?>

<div id="slider">
	
    <div id="sidebar">
    	<div id="header">

        </div> <!-- end of header -->
        
        <ul class="navigation">
            <li><a href="#empdetails">Employee Details<span class="ui_icon empdetails "></span></a></li>
            <li><a href="#addnewemp">Add New Employee<span class="ui_icon addnewemp"></span></a></li>
            <li><a href="#updateemp">Update Employee<span class="ui_icon updateemp"></span></a></li>
            <li><a href="#removeemp">Remove Employee<span class="ui_icon removeemp"></span></a></li>
            <li><a href="#searchemp">Search Employee<span class="ui_icon searchemp"></span></a></li>
			</ul>
			
    </div> <!-- end of sidebar -->

	<div id="main">
    	<ul id="social_box">
          
				  </ul>
			<ul id="logout">
				<li><a href="#uname">Change User Name</a></li>
				<li><a href="#password">Change Password</a></li>
				<li><a href="logout.php">logout</a></li>
			</ul>
	<!--<div class="navbar-inner" id="userProfile">
		<ul class="nav" id="logout">
			<li>
			 <?php echo "<img src='images/mine.jpg' style='height:50px; width:50px'/>"; ?>
		   </li>
			<li class="dropdown" id="userName"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Aregawi Gidey <b class="caret"></b></a> 
			 <ul class="dropdown-menu">
				<!-- dropdown menu links 
				<li ><a tabindex="-1" href="logout.php" >Logout</a></li>
				<li ><a tabindex="-1" href="#uname">Change Username</a></li>
				<li ><a tabindex="-1" href="#password">Change password</a></li>
				<li ><a tabindex="-1" href="#">Change Profile Picture</a></li>
			 </ul>
		   </li>
		 </ul>
	</div>-->
			

<?php
$admin_id=$_SESSION['admin_id'];
$result=mysql_query("select * from Admin where admin_id='$admin_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
?>
<div id="content">
      <div class="scroll">
                <div class="scrollContainer">
                  <div class="panel" id="empdetails">
                        <h1>Employee Details</h1>
                		<p>This is where you will find the datails of the differnt types of employees. it basically depends on how the organization decides to set up the structure of the employees' position and payment. Though most organizations can have some common grounds towards giving the postions and kind of payments.
						An organization would normally consist of a faculty staff and support staff as its employees,where <b><em>Faculty staff:</em></b> are the ones who are involved in the acadamic staff of the organization like Dean, Head departments,instructors and lab technicians, and <em><b>Support staff:</b></em> those are involved in administrative staff acting as the supportive class for the organization which includes people like watchmans, auditers,janitors and the like.</p>
                        <ul class="service_list">
						<form action="supportView.php" method="POST">
                            <li><input type="submit" name="submit" value="View Support staff Details"></li>
						</form>	
                         <form action="facultyView.php" method="POST">
                            <li><input type="submit" name="submit" value="View Faculty staff Details"></li>
						</form>	
                               
                        </ul>
                    </div>
<div id="contact_form">
					<div class="panel" id="uname">
					<form method="post" name="contact" action="uname.php">
                                
                                <label for="author">Current User Name:</label> <input type="text" id="author" name="cUserName" class="required input_field" />
                                <div class="cleaner_h10"></div>
                                
                                <label for="email">New User Name:</label> <input type="text" id="email" name="nUserName" class="validate-email required input_field" />
                                <div class="cleaner_h10"></div>
                                
								<br>							                                
                                <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Change" /></center>
                                
                            
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
                                <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Change" /></center>
                                
                            
                            </form>
  </div>
  </div>
                    <div class="panel" id="addnewemp">
                        <h1> Add new employee</h1>
                		<p>This where you add new employees with a specific enteries to each of the labeled sections. It makes it so easier that you just have to only enter some specific details and boom you are done. We have provided two kind of employee sections where you will want to add a new employee based on his catagory, as it's described there in <em>Employee Details</em>. You just have to make sure that the employee that you are adding is rightly there with their belongings as it would lead to a different severe mispayment of employees, no one wants his salary taken away with out a reason. where does the new employee you inted to add belong ?? </p>
                        
                        <ul class="service_list_new1">
                            <li><a href="#supstaff" class="service_one">To Support staff</a></li>
                            
                        </ul>
						 <ul class="service_list_new">
                            <li><a href="#facstaff" class="service_one">To Faculty staff</a></li>
   
                        </ul>
                    </div>
					<div class="panel"id="supstaff">
					<b><em>General Form of the Support staff additon employee</em></b>
					<div id="contact_form">
					<form method="post" name="support" action="support.php">
                                
                                <label for="author">SSN:</label> <input type="text" id="author" name="SSNum" class="required input_field" onblur="valsupSSN()" />
								<span id="ssn_message"></span>
                                <div class="cleaner_h10"></div>
                                <label for="author">First Name:</label> <input type="text" id="author" name="fName" class="required input_field"onblur="valsupName()" />
								<span id="na_message"></span>
                                <div class="cleaner_h10"></div>
								<label for="author">Last Name:</label> <input type="text" id="author" name="lName" class="required input_field"onblur="valsupLname()" />
								<span id="lna_message"></span>
                                <div class="cleaner_h10"></div>
								<label for="author">Position:</label> <input type="text" id="author" name="pos" class="required input_field"onblur="valsupPos()" />
								<span id="pos_message"></span>
                                <div class="cleaner_h10"></div>
                                <label for="email">Basic Salary:</label> <input type="text" id="author" name="bsal" class="validate-email required input_field"onblur="valsupBsal()" />
								<span id="bsal_message"></span>
                                <div class="cleaner_h10"></div>
                                
								<br>							                                
                                <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Add"onclick="valsupForm()" /></center>
                                
                            
                            </form>
						</div>
					</div>
					
					<div class="panel"id="facstaff" style="overflow:scroll">
					<b><em>General Form of the Faculty staff additon employee</em></b>
					<div id="contact_form">
					<form method="post" name="faculty" action="faculty.php">
                                
                                <label for="author">SSN:</label> <input type="text" id="author" name="SSNum" class="required input_field"onblur="valfacSSN()" />
								<span id="fssn_message"></span>
                                <div class="cleaner_h10"></div>
                                <label for="author">First Name:</label> <input type="text" id="author" name="fName" class="required input_field"onblur="valfacName()" />
								<span id="fna_message"></span>
                                <div class="cleaner_h10"></div>
								<label for="author">Last Name:</label> <input type="text" id="author" name="lName" class="required input_field"onblur="valfacLname()" />
								<span id="flna_message"></span>
                                <div class="cleaner_h10"></div>
								<label for="author">Dep't Code:</label> <input type="text" id="author" name="dcode" class="required input_field" onblur="valfacDept()"/>
								<span id="fdept_message"></span>
                                <div class="cleaner_h10"></div>
                                <label for="email">Basic Salary:</label> <input type="text" id="email" name="bsal" class="validate-email required input_field"onblur="valfacBsal()" />
								<span id="fbsal_message"></span>
                                <div class="cleaner_h10"></div>
                                <label for="email">Is Scholar?(Yes/No):</label> <input type="text" id="email" name="replay" class="validate-email required input_field"onblur="valfacScholar()" />
								<span id="fscho_message"></span>
                                <div class="cleaner_h10"></div>
                                <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Add"onclick="valfacForm()"/></center>
                                
                            
                            </form>
						</div>
					</div>
					
					<div class="panel" id="updateemp">
                        <h1> Update employee</h1>
                		<p>This is where you Update Employees' Status from either Faculty staff or Support staff. It's very important when you just want to change or update a couple of things within the employees' details. This mostly happens when an employee is getting a payrise in his salary; when an employee is getting promoted ; if by any case an employee had missed a day with out working or if such kind of things are to happen , you go on to the specific entery you want and deduct an employees' salary or change the payment type.    </p>
                        
                        <ul class="service_list_new1">
                            <!--<li><a href="#http://www.flashmo.com" class="service_one">From Support staff</a></li>-->
                            <div class="btn_more"><a href="#support">From Support Staff <span>&raquo;</span></a></div>
                        </ul>

						<br> <ul class="service_list_new1">
                            <!--<li><a href="#http://www.flashmo.com" class="service_one">From Faculty staff</a></li>-->
							<div class="btn_more"><a href="#faculty">From Faculty Staff <span>&raquo;</span></a></div>
                        </ul>
                    </div>
						<div class="panel" id="support">
                        <h1>About Support Staff in MIT</h1>
                    	<div class="image_wrapper image_fl"><img src="images/sup.jpg" alt="image" /></div>
                        <em><p>Supprt Staff is the staff which facilitates the acadamic achieval of the institute.Members of the Support Staff are Admin staff, Audit, Watchman, Janitors, Finance, Registrar, Cafeteria.</em></p>
                       <p>A payroll system involves everything that has to do with the payment of employees and the filing of ­employment taxes. This includes keeping track of hours, calculating wages, withholding taxes and other deductions, printing and delivering checks and paying employment taxes to the government.</p>
					<br>	<br><center><div class="btn_more"><a href="#supchecker"><button>Update Employee Here</button></a></div></center>
                <br>      <div class="btn_more"><a href="#updateemp"> Back <span>&laquo;</span></a></div>
                    </div>
                
				<div class="panel" id="faculty">
                        <h1>About Faculty Staff in MIT</h1>
                    	<div class="image_wrapper image_fl"><img src="images/fac.jpg" alt="image" /></div>
                        <p><em>Faculty Staff is the staff which has direct involvement in the acadamic achieval of the institute.Members of the Faculty Staff are like Dean, Vice dean, Head Departments, Instructors, Lab technicians, Lab assistants,. </em></p>
                  <br><br>     <p>This includes keeping track of hours, calculating wages, withholding taxes and other deductions, printing and delivering checks and paying employment taxes to the government.<a href="#"></a></p>
						
						<br><br><br><center><div class="btn_more"><a href="#facchecker"><button>Update Employee Here</button></a></div></center>  
				<div class="btn_more"><a href="#updateemp"> Back <span>&laquo;</span></a></div>
                    </div>
				<div class="panel" id="supchecker">
				<em><h4>What do you want to Update for support staff???</h4></em>
				<br><center><br><div class="btn_more"><a href="#empfname"> Employees' First Name</a></div></center>
				<br><center><br><div class="btn_more"><a href="#emplname"> Employees'Last Name</a></div></center>
				<br><center><br><div class="btn_more"><a href="#empposition"> Employees' Positon </a></div></center>
				<br><center><br><div class="btn_more"><a href="#empbsalary"> Employees' Basic Salary</a></div></center>
				<br><center><br><div class="btn_more"><a href="#empwork"> Employees' Working Day</a></div></center>
				</div>
				<div class="panel"id="empfname">
					<b><em>Valid Updation of Support staff Employees' First Name</em></b>
					<div id="contact_form">
					<form method="post" name="contact" action="sfupdate.php">
					<label for="author">SSN:</label> <input type="text" id="author" name="SSNum" class="required input_field" />
                       <div class="cleaner_h10"></div>
                                
                      <label for="author">First Name:</label> <input type="text" id="author" name="fName" class="required input_field" />
                       <div class="cleaner_h10"></div>
					            <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Update" /></center>
					</form>
					</div>
				</div>
				
				<div class="panel"id="emplname">
					<b><em>Valid Updation of Support staff Employees' Last Name</em></b>
					<div id="contact_form">
					<form method="post" name="contact" action="slupdate.php">
                      <label for="author">SSN:</label> <input type="text" id="author" name="SSNum" class="required input_field" />
                       <div class="cleaner_h10"></div> 
                      <label for="author">Last Name:</label> <input type="text" id="author" name="lName" class="required input_field" />
                       <div class="cleaner_h10"></div>
					            <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Update" /></center>
					</form>
					</div>
				</div>
				
				<div class="panel"id="empposition">
					<b><em>Valid Updation of Support staff Employees' Position</em></b>
					<div id="contact_form">
					<form method="post" name="contact" action="sposupdate.php">
                       <label for="author">SSN:</label> <input type="text" id="author" name="SSNum" class="required input_field" />
                       <div class="cleaner_h10"></div>       
                      <label for="author">Position:</label> <input type="text" id="author" name="supPos" class="required input_field" />
                       <div class="cleaner_h10"></div>
					            <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Update" /></center>
					</form>
					</div>
				</div>
				
				<div class="panel"id="empbsalary">
					<b><em>Valid Updation of Support staff Employees' Basic Salary</em></b>
					<div id="contact_form">
					<form method="post" name="contact" action="sbsalupdate.php">
                      <label for="author">SSN:</label> <input type="text" id="author" name="SSNum" class="required input_field" />
                       <div class="cleaner_h10"></div>
                      <label for="author">Basic Salary:</label> <input type="text" id="author" name="bSalary" class="required input_field" />
                       <div class="cleaner_h10"></div>
					            <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Update" /></center>
					</form>
					</div>
				</div>
				<div class="panel"id="empwork">
					<b><em>Valid Updation of Support staff Employees' Working Day</em></b>
					<div id="contact_form">
					<form method="post" name="contact" action="sworkupdate.php">
					<label for="author">SSN:</label> <input type="text" id="author" name="SSNum" class="required input_field" />
                       <div class="cleaner_h10"></div>
                                
                      <label for="author">Working Day:</label> <input type="text" id="author" name="workDay" class="required input_field" />
                       <div class="cleaner_h10"></div>
				<center><input type="submit" class="submit_btn" name="submit" id="submit" value="Update" /></center>
					</form>
					</div>
				</div>
	<div class="panel" id="facchecker">
				<em><h4>What do you want to Update for Faculty staff???</h4></em>
				<br><center><br><div class="btn_more"><a href="#fempfname"> Employees' First Name</a></div></center>
				<br><center><br><div class="btn_more"><a href="#femplname"> Employees'Last Name</a></div></center>
				<br><center><br><div class="btn_more"><a href="#fempdept"> Employees' Department </a></div></center>
				<br><center><br><div class="btn_more"><a href="#fempbsalary"> Employees' Basic Salary</a></div></center>
				<br><center><br><div class="btn_more"><a href="#fempwork"> Employees' Working Day</a></div></center>
				<br><center><br><div class="btn_more"><a href="#fempscholar"> Employees' Scholar check</a></div></center>

				</div>
				<div class="panel"id="fempfname">
					<b><em>Valid Updation of faculty staff Employees' First Name</em></b>
					<div id="contact_form">
					<form method="post" name="contact" action="fupdate.php">
					<label for="author">SSN:</label> <input type="text" id="author" name="SSNum" class="required input_field" />
                       <div class="cleaner_h10"></div>
                                
                      <label for="author">First Name:</label> <input type="text" id="author" name="fName" class="required input_field" />
                       <div class="cleaner_h10"></div>
					            <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Update" /></center>
					</form>
					</div>
				</div>
				
				<div class="panel"id="femplname">
					<b><em>Valid Updation of faculty staff Employees' Last Name</em></b>
					<div id="contact_form">
					<form method="post" name="contact" action="flupdate.php">
<label for="author">SSN:</label> <input type="text" id="author" name="SSNum" class="required input_field" />
                       <div class="cleaner_h10"></div>
                                
                      <label for="author">Last Name:</label> <input type="text" id="author" name="lName" class="required input_field" />
                       <div class="cleaner_h10"></div>
					            <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Update" /></center>
					</form>
					</div>
				</div>
				
				<div class="panel"id="fempdept">
					<b><em>Valid Updation of faculty staff Employees' Department</em></b>
					<div id="contact_form">
					<form method="post" name="contact" action="fdupdate.php">
					<label for="author">SSN:</label> <input type="text" id="author" name="SSNum" class="required input_field" />
                       <div class="cleaner_h10"></div>
                                
                      <label for="author">Department:</label> <input type="text" id="author" name="Dept" class="required input_field" />
                       <div class="cleaner_h10"></div>
					            <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Update" /></center>
					</form>
					</div>
				</div>
				
				<div class="panel"id="fempbsalary">
					<b><em>Valid Updation of faculty staff Employees' Basic Salary</em></b>
					<div id="contact_form">
					<form method="post" name="contact" action="fbsalupdate.php">
<label for="author">SSN:</label> <input type="text" id="author" name="SSNum" class="required input_field" />
                       <div class="cleaner_h10"></div>
                                
                      <label for="author">Basic Salary:</label> <input type="text" id="author" name="bSalary" class="required input_field" />
                       <div class="cleaner_h10"></div>
					            <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Update" /></center>
					</form>
					</div>
				</div>
				<div class="panel"id="fempwork">
					<b><em>Valid Updation of faculty staff Employees' Working Day</em></b>
					<div id="contact_form">
					<form method="post" name="contact" action="fworkupdate.php">
					<label for="author">SSN:</label> <input type="text" id="author" name="SSNum" class="required input_field" />
                       <div class="cleaner_h10"></div>
                                
                      <label for="author">Working Day:</label> <input type="text" id="author" name="work" class="required input_field" />
                       <div class="cleaner_h10"></div>
				<center><input type="submit" class="submit_btn" name="submit" id="submit" value="Update" /></center>
				</form>
					</div>
				</div>
	<div class="panel"id="fempscholar">
					<b><em>Valid Updation of faculty staff Employees' scholar check</em></b>
					<div id="contact_form">
					<form method="post" name="contact" action="fschoupdate.php">
					<label for="author">SSN:</label> <input type="text" id="author" name="SSNum" class="required input_field" />
                       <div class="cleaner_h10"></div>
                                
                      <label for="author">Scholar?(Yes/No):</label> <input type="text" id="author" name="scholar" class="required input_field" />
                       <div class="cleaner_h10"></div>
				<center><input type="submit" class="submit_btn" name="submit" id="submit" value="Update" /></center>
				</form>
					</div>
				</div>
				
                    <div class="panel" id="removeemp">
                        <h1>why do we need to remove an employee?</h1>
                        
                        <p>An employee can be removed for one of the following reasons; <br>
						<img src="images/right.jpg">&nbsp;An employee can resign from the organization by his own will and we will need to remove that employee because you don't pay some random people who is not working in your organization.<br>
						<img src="images/right.jpg">&nbsp;An employee might get fired from the organization due to some reasons and so you should get him out of your payroll system as he would be earning some payments even though you have fired him. <br>
						<img src="images/right.jpg">&nbsp;An employee can be removed or dismissed from service, on the ground of misconduct which has led to his conviction on a criminal charge.<br>
						<img src="images/right.jpg">&nbsp;Employees, who had been in continuous unauthorised absence from duty for more than 5 years, may be removed from service.<br>
						
						<br><b>For these and other reasons  Remove an :</b>
						<center><br><div class="btn_more"><a href="#supportremove"> Employee From Support Staff</a></div></center>
						<center><br><div class="btn_more"><a href="#facultyremove"> Employee From Faculty Staff</a></div></center>
                    </div>
					<div class="panel"id="supportremove">
					<p>We can remove an employee from the support system using his/her SSN(Social Security Number).Now Enter the SSN of the employee you want to remove from the staff.</p> 
					<div id="contact_form">
					<form method="post" name="contact" action="remsup.php">
                                
                                <label for="author">Enter SSN:</label> <input type="text" id="author" name="SSNum" class="required input_field" />
                                <div class="cleaner_h10"></div>
								<br>							                                
                                <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Delete" /></center>
                                
					</form>
					</div>
					</div>
					
					<div class="panel"id="facultyremove">
					<p>We can remove an employee from the Faculty system using his/her SSN(Social Security Number).Now Enter the SSN of the employee you want to remove from the staff.</p> 
					<div id="contact_form">
					<form method="post" name="contact" action="remfac.php">
                                
                                <label for="author">Enter SSN:</label> <input type="text" id="author" name="SSNum" class="required input_field" />
                                <div class="cleaner_h10"></div>
								<br>							                                
                                <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Delete" /></center>
                                
					</form>
					</div>
					</div>
					
                    <div class="panel" id="searchemp">
                        <h1>Searching For a Specific Employee </h1>
                         <p>Here the searching mechanism is performed in different ways.The purpose of searching a specific employee here is inorder to know if an employee exists that is searched using his SSN.If the employee exists it returns the employee with all his/her details.</p><br>
						<center><br><div class="btn_more"><a href="#searsup">Search Employee From Support Staff</a></div></center>
						<center><br><div class="btn_more"><a href="#searfac">Search Employee From Faculty Staff</a></div></center>
					</div>
                     <div class="panel"id="searsup">
						 <br><em><b>Search Employee From Support Staff using his SSN</b></em>
					
						 <div id="contact_form">
						<form method="post" name="contact" action="searchsup.php">
                                <br><br>
                                <label for="author">Enter SSN:</label> <input type="text" id="author" name="SSNum" class="required input_field" />
                                <div class="cleaner_h10"></div>
								<br>							                                
                                <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Search" /></center>
                                
					</form>
						 
                    </div>
					</div>
					
					<div class="panel"id="searfac">
						 <br><em><b>Search Employee From Faculty Staff using his SSN</b></em>
					
						 <div id="contact_form">
						<form method="post" name="contact" action="searchfac.php">
                                <br><br>
                                <label for="author">Enter SSN:</label> <input type="text" id="author" name="SSNum" class="required input_field" />
                                <div class="cleaner_h10"></div>
								<br>							                                
                                <center><input type="submit" class="submit_btn" name="submit" id="submit" value="Search" /></center>
                                
					</form>
						 
                    </div>
					</div>
                
                </div>
			</div>
            
        <!-- end of scroll -->
        
        </div> <!-- end of content -->
        
        <div id="footer">

            Copyright © 2014 <em>MU-MIT</em> | <a></a> by IT 3rd Year Students<a></a>
        
        </div> <!-- end of footer -->
    
    </div> <!-- end of main -->
</div>

</body>
</html>