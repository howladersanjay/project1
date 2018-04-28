<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	$conn = mysql_connect("localhost", "root", "HIbuddy12");
	$db = mysql_select_db("startup", $conn);

					/*Signup php code starts from here*/

	if(isset($_POST['submit2'])) {	
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$DOB = $_POST['DOB'];
		$mobile = $_POST['mobile'];
		$gender = $_POST['gender'];

		if($fname!= '' && $email!= '' && $password!= '' && $DOB!= '' && $mobile!= '' && $gender!= '') {
			newuser($fname, $mname, $lname, $email, $password, $DOB, $mobile, $gender);
		
		}
		else {
			echo "Fields marked with * are mandatory";
		}

	}

	/*function signup() {
		if(!preg_match("/^[a-zA-Z ]*$/",$fname)) {
			echo "Only alphabets allowed";
		}
		if(!preg_match("/^[a-zA-Z ]*$/",$mname)) {
			echo "Only alphabets allowed";
		}
		if(!preg_match("/^[a-zA-Z ]*$/",$lname)) {
			echo "Only alphabets allowed";
		}
		if(!preg_match("/^[a-zA-Z ]*$/",$email)) {
			echo "Only email allowed";
		}
		if(!preg_match("/^[a-zA-Z ]*$/",$password)) {
			echo "Only alphabets allowed";
		}
		if(!preg_match("/^[a-zA-Z ]*$/",$DOB)) {
			echo "Only Date allowed";
		}
		if(!preg_match(/^[a-z A-Z]$/, $_POST['mobile'])) {
			echo "Only 10 digit number allowed";
		}
		if(empty($_POST['gender'])) {
			echo "Please select gender";
		}
		
		else {
		return newuser();
		
}*/

					/*Login php code starts from here*/

	if(isset($_POST['submit1'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		login($email, $password);
   	}
function login($email,$password) {
	$sql = "select * from user_details where email_id='".$email."' and password='".$password."'";
	$qry = mysql_query($sql);
	$row = mysql_fetch_assoc($qry);
	$count = mysql_num_rows($qry);

	if($count == 1) {
		$_SESSION['userdata'] = serialize($row);
         
	        header("location: mainpage.php");
      } else {
        	$error = "Your Login Name or Password is invalid";
      }
}
function newuser($fname, $mname, $lname, $email, $password, $DOB, $mobile, $gender) {
	$query = 'insert into user_details(user_name, user_middlename, user_surname, email_id, password, date_of_birth, mobile_number, gender) values("'.$fname.'", "'.$mname.'", "'.$lname.'", "'.$email.'", "'.$password.'", "'.$DOB.'", "'.$mobile.'", "'.$gender.'")';
	if(mysql_query($query)) {
		login($email, $password);
	}
}
mysql_close($conn);

?>


<html>
<head>
	<title>Home Page</title>

	<link rel = "stylesheet" type = "text/css" href = "header.css">


<style>


#centerpart {
	margin:0px;
	padding:0px;
}


#formside {
	margin:0px;
	padding:0px;
	float:left;
}

.formposition {
	width:380px;
	background:#ccc;
	padding:20px;
	margin:15px 0px 1px 15px;
	display:block;
}

.bond {
	width:188px;
}

.headline {
	text-align:center;	
}

label {
	display:inline-block;
	min-width:170px;
	padding-top:20px;
}


#reportviewsidetop {
	margin:15px 15px 0px 0px;
	padding:0px;
	width:830px;
	float:right;
	height:238px;
}

.chartalign {
	height:232px;
	width:400px;
}

.reportviewpart1 {
	float:left;
	width:410px;
}

.reportviewpart2 {
	float:right;
	width:410px;
}



#reportviewsidebottom {
	margin:2px 15px 0px 0px;
	width:830px;
	float:right;
	height:238px;
}

#instruction {
	margin:2px 15px 0px 0px;
	width:830px;
	height:82px;
	float:right;
}

.instructionalign {
	padding-top:30px;
	padding-bottom:10px;
	text-align:center;
	color:white;
}

.buttonsignup {
	height:40px;
	width:320px;
	color:black;
	background:#8a8585;
	font-size:20px;
	border-radius:10px;
	box-shadow: 2px 5px #ddd;
}

.buttonsignup:hover {
	background-color:#5f5c5c;
	cursor:pointer;
}

.buttonalign {
	padding-left:40px;
}

.clear {
	clear:both;
}




body {
	background-color:#8a8585;
	margin:0px;
	padding:0px;
}

</style>

	<link rel = "stylesheet" type = "text/css" href = "footer.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
<script>
$(document).ready(function() {
	var ctx = document.getElementById('myChart1').getContext('2d');
	new Chart(ctx, {
	  type: 'bar',
	  data: {
	    labels: ['Child Abuse', 'Rape', 'Sex Scandals', 'XYZ', 'ABC', 'HHH', 'MMM','Child Abuse', 'Rape', 'Sex Scandals', 'XYZ', 'ABC', 'HHH', 'MMM','Child Abuse', 'Rape', 'Sex Scandals', 'XYZ', 'ABC', 'HHH', 'MMM'],
	    datasets: [{
	      label:'Cases',
	      data: [12, 10, 3, 17, 6, 3, 7,12, 100, 3, 17, 6, 3, 7,12, 10, 3, 17, 6, 3, 7],
	      backgroundColor: "rgba(153,255,51,0.4)"
	    }]
	  }
	});
});

</script>

<script>

$(document).ready(function() {
	var ctx = document.getElementById('myChart2').getContext('2d');
	new Chart(ctx, {
	  type: 'line',
	  data: {
	    labels: ['Child Abuse', 'Rape', 'Sex Scandals', 'XYZ', 'ABC', 'HHH', 'MMM','Child Abuse', 'Rape', 'Sex Scandals', 'XYZ', 'ABC', 'HHH', 'MMM','Child Abuse', 'Rape', 'Sex Scandals', 'XYZ', 'ABC', 'HHH', 'MMM'],
	    datasets: [{
	      label:'Cases',
	      data: [12, 10, 3, 17, 6, 3, 7,12, 100, 3, 17, 6, 3, 7,12, 10, 3, 17, 6, 3, 7],
	      backgroundColor: "rgba(153,255,51,0.4)"
	    }]
	  }
	});
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
<script>
$(document).ready(function() {
	var ctx = document.getElementById('myChart3').getContext('2d');
	new Chart(ctx, {
	  type: 'bar',
	  data: {
	    labels: ['Child Abuse', 'Rape', 'Sex Scandals', 'XYZ', 'ABC', 'HHH', 'MMM','Child Abuse', 'Rape', 'Sex Scandals', 'XYZ', 'ABC', 'HHH', 'MMM','Child Abuse', 'Rape', 'Sex Scandals', 'XYZ', 'ABC', 'HHH', 'MMM'],
	    datasets: [{
	      label:'Cases',
	      data: [12, 10, 3, 17, 6, 3, 7,12, 100, 3, 17, 6, 3, 7,12, 10, 3, 17, 6, 3, 7],
	      backgroundColor: "rgba(153,255,51,0.4)"
	    }]
	  }
	});
});

</script>

<script>

$(document).ready(function() {
	var ctx = document.getElementById('myChart4').getContext('2d');
	new Chart(ctx, {
	  type: 'line',
	  data: {
	    labels: ['Child Abuse', 'Rape', 'Sex Scandals', 'XYZ', 'ABC', 'HHH', 'MMM','Child Abuse', 'Rape', 'Sex Scandals', 'XYZ', 'ABC', 'HHH', 'MMM','Child Abuse', 'Rape', 'Sex Scandals', 'XYZ', 'ABC', 'HHH', 'MMM'],
	    datasets: [{
	      label:'Cases',
	      data: [12, 10, 3, 17, 6, 3, 7,12, 100, 3, 17, 6, 3, 7,12, 10, 3, 17, 6, 3, 7],
	      backgroundColor: "rgba(153,255,51,0.4)"
	    }]
	  }
	});
});
</script>
</head>

<body>

					<!--Header-->
	<div id="header">
		<div class="mainheader">
			<div class="headerleft">
				<img src="logo12.jpg" alt="logo">
			</div>
			<form action="newhomepage.php" method="post" class="headerright">
				<input type="text" name="email" placeholder="Enter EmailID" class="boxdimension">
				<input type="password" name="password" placeholder="Enter Password" class="boxdimension">
				<input type="submit" name="submit1" value= "LogIn" class="buttonlogin">
				<a href="welcome.php" class="forgotpassword">Forgot Account/Password..?</a>
			</form>
		</div>
	</div>

					<!--center part-->

	<div id="centerpart">
		<div id="formside">
			<div class="formposition">
				<form action="newhomepage.php" method="post">
					<h2 class="headline">Join Us and make a difference..!!</h2>
					<h3 class="headline">"Fight for a cause"</h3>

					<label>First Name : *</label><input type="text" name="fname" placeholder="Enter First Name" class="bond">
					<label>Middle Name : </label><input type="text" name="mname" placeholder="Enter Middle Name" class="bond">
					<label>Last Name : *</label><input type="text" name="lname" placeholder="Enter Last Name" class="bond">
					<label>Email ID : *</label><input type="text" name="email" placeholder="Enter EmailID" class="bond">
					<label>Password : *</label><input type="password" name="password" placeholder="Enter Password" class="bond">
					<label>DOB : *</label><input type="date" name="DOB" placeholder="Enter Date Of Birth" class="bond">
					<label>Mobile Number : *</label><input type="text" name="mobile" placeholder="Enter Mobile Number" class="bond">
					<label>Gender : *</label><input type="radio" name="gender" value="M">Male<input type="radio" name="gender" value="F">Female<input type="radio" name="gender" value="N">Others<br><br><br>

					<div class="buttonalign">
						<input type="submit" name="submit2" value= "Sign Up" class="buttonsignup">
					</div>
					
				</form>
			</div>

		</div>

		<div id="reportviewsidetop">
			<div class="reportviewpart1">
				<div class="chartalign">
				<canvas id="myChart1"></canvas>
				</div>
			</div>

			<div class="reportviewpart2">
				<div class="chartalign">
				<canvas id="myChart2"></canvas>
				</div>
			</div>
		</div>

		<div id="reportviewsidebottom">
			<div class="reportviewpart1">
				<div class="chartalign">
				<canvas id="myChart3"></canvas>
				</div>
			</div>

			<div class="reportviewpart2">
				<div class="chartalign">
				<canvas id="myChart4"></canvas>
				</div>
			</div>
		</div>

		<div id="instruction">
			<div class="instructionalign">
				New user's please register..!! Rest please login to view what's going around your pincode, village, town, city, district, state, country. If you want to add or confirm any of the wrong activities then go ahead and be a preside.
			</div>
		</div>
	</div>

	<div class="clear"></div>

					<!--Footer part-->

	<div id="mainfooter">
		<div id ="actualfooter">
			<div>
				<ul>
					<li>About Us</li>
					<li>Contact Us</li>
					<li>Disclaimer</li>
					<li>FAQ</li>
					<li>What's New</li>
					<li>Trending Issues</li>
					<li>Resolved Cases</li>
				</ul>
			</div>
		</div>
	</div>

</body>
</html>
