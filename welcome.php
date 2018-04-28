<?php
$connection = mysql_connect("localhost", "root", "HIbuddy12");
$db = mysql_select_db("startup", $connection);
$data = array();
if(isset($_POST['submit']))
{
	$data = signup();
}

function signup()
{
	if(!empty($_POST["email"])) {
		$query = mysql_query("SELECT email_id from user_details WHERE email_id = '$_POST[email]'");
		$row = mysql_fetch_array($query);
		if(!$row)  {
			return newuser();
		} else {
			echo "Already registered";
		}
	}
}

function newuser()
{
	$fname = $_POST["fname"];
	$password = $_POST["password"];
	$lname = $_POST["lname"];
	$gender = $_POST["gender"];
	$mobile = $_POST["mobile"];
	$DOB = $_POST["DOB"];
	$email = $_POST["email"];
	$data = array(
			'status' => 'error'
		);
	
	if($fname !='' && $mobile !='' && $DOB !='' && $email !='' && $password !='' && $gender !='') {
		$sql = 'insert into user_details(user_name, password, user_surname, gender, mobile_number, date_of_birth, email_id) values ("'.$fname.'", "'.$password.'", "'.$lname.'", "'.$gender.'", "'.$mobile.'", "'.$DOB.'", "'.$email.'")';
		$query = mysql_query($sql);

		$data['message'] = "Data Inserted successfully...!!";
		$data['status'] = 'success';
	} else { 
		if(empty($_POST["fname"])) {
			$data['fnameerror'] = "Name required";
		} elseif($password =='') {
			$data['passworderror'] = "Password required";
		} elseif($gender =='') {
			$data['gendererror'] = "Gender required";
		} elseif($mobile =='') {
			$data['mobileerror'] = "Mobile number required";
		} elseif($DOB =='') {
			$data['doberror'] = "DOB required";
		} elseif($email =='') {
			$data['emailerror'] = "Email required";
		}
	}
	return $data;

}

mysql_close($connection);
?>

<html>
<head>
<style>

body {
	background-color:none;
	font:75%;
	font-family:Verdana;
}

#actualheader {
	margin:0;
	padding:0px;
	border:0;
}

#mainheader {
	margin:11px auto 5px auto;
	padding:11px 0px 10px 0px;
	width:980px;
	position:relative;
}

#subheader {
	margin:0;
	padding:0px;
}

.headerlogo {
	width:85px;
	margin-right:0px;
}

.centerheader {
	padding-top:34px;
	margin-left:-30px;
}

.centerheader ul li {
	padding-right:20px;
	margin:0;
	text-align:left;
	list-style:none;
	float:left;

}


.headerlogoright {
	float:right;
	padding-top:12px;
}

.left {
	float:left !important;
}

.right {
	float:right !important;
}

div {
	display:block;
}


.clear {
	clear:both;
}

.space {
	width:50%;
	height:50px;
}

#bottomheader {
	margin-top:10px;
	height:45px;
	border:1px solid #999;
}

.bottomheaderpart1 {
	position:relative;
	width:400px;
	overflow:hidden;
}

.bottomheaderpart2 {
	position:relative;
	width:400px;
	overflow:hidden;
}

.bottomheaderpart3 {
	width:172px;
	height:46px;
	position:relative;
}

.searchBox {
	font-size: 16px;
	letter-spacing: 0.08em;
	float: left;
	height: 46px;
	width: 340px;
	padding: 2px;
	border: 0 none #ccc;
	color: #000;
	border-left: 1px solid #999;
	border-right: 1px solid #999;
	padding-left: 15px;
	font-family: verdana;
	border-bottom:1px solid #999;
}

.hotlight {
	padding-bottom:2px;
	margin-left:22px;
	text-align:center;
	position:relative;
}

.hotlight span {
	display:block;
}

.bottomheader span {
	display:block;
}

a:link, a:visited {
	color: black;
	text-decoration: none;
}



#footer {
	margin:6px auto;
	padding:0px;
	border:1px solid #ccc;
	width:980px;
	background:#DBDBDB;
	height:150px;
}


.footerfirst {
	list-style:none;
	margin:0px;
	padding:2px;
	height:145px;
	width:200px;
	border:1px solid #ccc;
}


.footerfirst li {
	list-style:none;
	margin:0px;
	padding:4px;
}

.footerfirst ul {
	margin:0px;
	padding:10px;
}

.footerhalfright {
	width:772px;
	border:1px solid #ccc;

}

.footerhalfright1 {
	width:255px;
	height:75px;
	border:1px solid #ccc;
}

.footerhalfright3 {
	width:255px;
	height:75px;
	border:1px solid #ccc;
	border-left:none;
}

.office {
	margin:0 auto;
	padding-left:100px;
	padding-top:1px;
}

.removeleftborder {
	border-left:none;
}

.removerightborder {
	border-right:none;
}

b {
	text-align:left;
	padding-left:0px;
	display:block;
	color:green;
}

.footerhalfrightbottom {
	width:774px;
	height:72px;
	border:none;
	float:left;
	text-align:center;
	padding-top:20px;
}


#loginsignup {
	width:980px;
	margin:0 auto;
	padding:0px;
}

.login {
	float:left;
	width:485px;
	height:400px;
	background-color:#ccc;
}

.signup {
	float:right;
	width:485px;
	height:400px;
	background-color:#ccc;
}

.terms {
	padding-left: 150px;
	padding-top:5px; 
	font-size: 15px;
	color: #4e504e;
}

label {
	text-align:right;
	padding-right:20px;
	display:inline-block;
	min-width:130px;
	padding-top:16px;
}

.boxalign {
    width:400px;
}

h3 {
	text-align:center;
}

.textbox {
	width:200px;
}

.submitbutton {
	width:110px;
	height:30px;
	margin-left:200px;
	margin-top:10px;
}

.loginbutton {
	border-radius: 2px 2px 2px 2px;
	cursor: pointer;
	display: inline-block;
	font-weight: normal !important;
	outline: medium none;
	text-align: center;
	text-decoration: none !important;
	text-transform: uppercase !important;
	white-space: nowrap;
	letter-spacing: 0.05em;
}
    


</style>
</head>
<body>

						<!--Header starts from here-->
<div id="actualheader">
	<div id="mainheader">
		<div id="subheader">
			<div class="headerlogo left">
				<a href="homepage.php"><img src="logo1.png" alt="Issues" title="Issues reporter"></a>
			</div>

			<div class="centerheader left">
				<ul>
					<li><a href="welcome.php">Categories</a></li>
					<li> | </li>
					<li><a href="welcome.php">Sub-Categories</a></li>
					<li> | </li>
					<li><a href="welcome.php">Trending Issues</a></li>
				</ul>
			</div>

			<div class="headerlogoright">
				<div class=" hotlight left">
				<a href="welcome.php"><img src="myaccount.png" alt="myaccount" width="42"></a><span>LogIn</span>
				</div>
				<div class="hotlight left">
				<a href="welcome.php"><img src="app1.png" alt="APP" width="42"></a><span>APP</span>
				</div>
				<div class="hotlight left">
				<a href="welcome.php"><img src="track.png" alt="Track issues" width="42"></a><span>Track</span>
				</div>
			</div>
		</div>
		<div class="clear"></div>

		<div id="bottomheader">
		<div class="bottomheaderpart1 left">
			<input type="text" name="issuename" class="searchbox" placeholder="Search issue by name" width="50">
			<div><a href="welcome.php"><img src="search.png" alt="search" width="30" style="padding-left:15px"></a><span  style="padding-left:10px">Search</span>
			</div>
		</div>
		<div class="bottomheaderpart2 left">
			<input type="text" name="issuename"  class="searchbox" placeholder="Search issue by pincode">
			<div><a href="welcome.php"><img src="search.png" alt="search" width="30" style="padding-left:15px"></a><span style="padding-left:10px">Search</span>
			</div>
		</div>

		<div class="bottomheaderpart3 right">
			<input type="button" value="Add New" style="width:172; height:46">
		</div>
	
		</div>
	</div>
	</div>
<div class="clear"></div>


						<!--LogIn form starts from here-->

<div id="loginsignup">
	<div class="login">
		<h3>LogIn</h3>
		<form class="boxalign">
			<label>E-mail ID : </label>
			<input type="text" name="email" placeholder="Enter Email-ID" class="textbox"><br>
			<label>Password : </label>
			<input type="password" name="password" placeholder="Enter Password" class="textbox"><br><br>
			<input type="submit" value="Submit" class="submitbutton">
		</form>
	<div class="loginbutton">
	
	</div>
	</div>

						<!--Signup form starts from here-->

	<div class="signup">
		<h3>Sign Up</h3>
		<form action="welcome.php" method="post" class="boxalign">
			<label>First Name* : </label>
			<input type="text" name="fname" placeholder="Enter First Name" class="textbox">
			<span><?php echo !empty($data['fnameerror']) ? $data['fnameerror'] : '';?></span>
			<label>Last Name : </label>
			<input type="text" name="lname" placeholder="Enter Surname" class="textbox"><br>
			<label>Gender* : </label>
			<input type="radio" name="gender" value="M">Male<input type="radio" name="gender" value="F">Female<input type="radio" name="gender" value="N">Others<br>
			<label>Mobile* : </label>
			<input type="number" name="mobile" placeholder="Enter Mobile Number" class="textbox"><br>
			<label>DOB* : </label>
			<input type="date" name="DOB" class="textbox"><br>
			<label>E-mail ID* : </label>
			<input type="text" name="email" placeholder="Enter Email-ID" class="textbox"><br>
			<label>Password : </label>
			<input type="password" name="password" placeholder="Enter Password" class="textbox"><br>
			<div class="terms"><input type="checkbox" name="checkbox">I accept terms and conditions</div>
			<input type="submit" name="submit" value="Submit" class="submitbutton"/>
		</form>
	</div>
</div>

	<div class="clear"></div>

						<!--Footer starts from here-->

	<div id="footer">
			<div class="footerfirst left">
				<ul>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="welcome.php">Contact Us</a></li>
					<li><a href="welcome.php">FAQs</a></li>
					<li><a href="welcome.php">Career</a></li>
					<li><a href="welcome.php">Top Categories</a></li>
				</ul>
			</div>

			<div class="footerhalfright right">
				<div class="footerhalfright1 left removeleftborder">
					<div class="office">
					<img src="call.jpg" alt="email">
					<b>Call</b>
					</div>
				</div>
				<div class="footerhalfright1 left removeleftborder">
					<div class="office">
					<img src="email.jpg" alt="email">
					<b><font color="blue">E-mail</font></b>
					</div>
				</div>
				<div class="footerhalfright3 right removerightborder">
					<div class="office">
					<img src="office.jpg" alt="email">
					<b><font color="red">Office</font></b>
					</div>
				</div>

			</div>

			<div class="footerhalfrightbottom">
				New project is on start New project is on start New project is on start New project is on start New project is on start New project is on start New project is on start New project is on start 
			</div>
	</div>


</body>
</html>
