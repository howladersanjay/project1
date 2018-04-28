<?php

/*if(isset($_POST['search'])) {
	$valuesearch = $_POST['valuetosearch'];
	$query = "select * from complaints where concat(category,sub_category,gender) like '%".$valuesearch."%'";
	$search_result = data($query);
}

/*else {
	$query = "select * from complaints";
	$search_result = data($query);
}
function data($query) {
	$conn = mysql_connect("localhost", "root", "HIbuddy12");
	$db = mysql_select_db("startup",$conn);
	$filter_result = mysql_query($query,$conn);
	return $filter_result;	
}
*/

	$conn = mysql_connect("localhost", "root", "HIbuddy12");
	$db = mysql_select_db("startup",$conn);
?>


<html>
<head>
	<link rel="stylesheet" type="text/css" href="header2.css">

<style>

body {
	background-color:none;
	font:75%;
	font-family:Verdana;
	margin:0px;
	padding:0px;
}

a:link, a:visited {
	color: black;
	text-decoration: none;
}



#report {
	margin:0 auto;
	width:980px;
}

.selection1 {
	width:150px;
	height:320px;
	background-color:grey;
	float:left;
}

.selection2 {
	width:250px;
	height:320px;
	background-color:grey;
	float:left;
	margin-left:3px;
}

.selection3 {
	width:350px;
	height:320px;
	background-color:grey;
	float:left;
	margin-left:3px;
}

.selection4comment {
	width:220px;
	height:320px;
	background-color:grey;
	float:right;
	margin-left:3px;
}

h3 {
	text-align:center;
}

.view {
	margin:5px auto;
	width:980px;
	height:auto;
	background-color:#7f9396;
}

.gap {
	padding-left:240px;
	padding-bottom:20px;
}

strong {
	text-align: left;
	padding-right: 20px;
	display: inline-block;
	color: #3e4a49;
	min-width: 181px;
	padding-top: 10px;
	padding-left: 10px;
}

.selection1 label {
	padding-top:20px;
	display:inline-block;
	min-width: 85px;
	padding-left: 10px;
}

.selection2 label {
	padding-top:20px;
	display:inline-block;
	min-width: 95px;
	padding-left: 10px;
}

.selection3 label {
	padding-top:20px;
	display:inline-block;
	min-width: 163px;
	padding-left: 10px;
}

p {
	padding:10px;
	text-align:center;
	color:#164146;
}

.charttypes {
	margin:5px auto 0px;
	width:980px;
	background-color:rgba(255, 247, 0, 0.32);
	text-align:center;
}

.graph {
	width: 70%;
	margin: 0 auto;
	height: 355px;
}

.submit {
	padding-left:173px;
	padding-top:19px;
}

#mainfooter {
	margin:0px;
	padding:0px;
}

#actualfooter {
	margin:0px auto;
	background-color:#403e3e;
	height:50px;
}

#actualfooter li {
	list-style:none;
	float:left;
	padding-left:85px;
	padding-top:20px;
	color:#ddd;
}

.clear {
	clear:both;
}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
<script>
$(document).ready(function() {
	var ctx = document.getElementById('myChart').getContext('2d');
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
</head>
<body>


						<!--Header starts from here-->

	<div id="header2">
		<div class="headermain">
			<div class="logoleft">
				<img src="logo12.jpg" alt="logo">
			</div>

			<div class="centerheader">
				<input type="text" name="email" placeholder="Search an issue" class="searchbox">
			</div>

			<div class="rightpart">
				<ul>
					<li>Add Issue</li>
					<li> | </li>
					<li>MyAccount</li>
					<li> | </li>
					<li>SignOut</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="clear"></div>

						<!--Report view starts from here-->


<div id="report">
	<form action= "addissues.php" method= "POST">
		<div class="selection1">
			<h3>Select one</h3>
			<label>State</label><input type="checkbox"></br>
			<label>District</label><input type="checkbox"></br>
			<label>City/Town</label><input type="checkbox"></br>
			<label>Village</label><input type="checkbox"></br>
			<label>Pincode</label><input type="checkbox"></br>
		</div>

		<div class="selection2">
			<h3>Select Your Place</h3>
			<label>City/Town : </label><select name ="checkbox"></br>
				<option>Hi</option>
				<option>Bengaluru</option>
				<option>Kolkata</option>
				<option>Vishakapatanum</option>
			</select>
			<label>District : </label><select name ="checkbox"></br>
				<option>Hi</option>
				<option>Bastar</option>
				<option>Hi</option>
				<option>Hi</option>
			</select>
			<label>State : </label><select name ="checkbox"></br>
				<option>Andhra Pradesh</option>
				<option>Hi</option>
				<option>Hi</option>
				<option>Hi</option>
			</select>
			
		</div>

		<div class="selection3">
			<h3>Precise</h3>
			<label>Date of Incident(From) : </label><input type="date"></br>
			<label>Date of Incident(To) : </label><input type="date"></br>
			<label>Category : </label><select name ="checkbox"></br>
				<option>Select</option>
				<option>Molestation</option>
				<option>Murder</option>
				<option>Corruption</option>
			</select>
			<label>Sub-Category : </label><select name ="checkbox"></br>
				<option>Select</option>
				<option>Rape</option>
				<option>Murder</option>
				<option>Child Abuse</option>
			</select>
			<label>Gender : </label><select name ="checkbox"></br>
				<option>Select</option>
				<option>Male</option>
				<option>Female</option>
				<option>Others</option>
				<option>All</option>
			</select>
			<div class="submit"><input type="submit" name="submit"></div>
		</div>

		<div class="selection4comment">
			<h3>Instruction</h3>
			<p>Selecting precise options will enable you to find an answer to ongoing problems in India. A report created from the data of individual complaints helps us to take actions on respective areas. Make India a better place to LIVE..!!</p>
		</div>
	</form>

</div>

		<div class="clear"></div>

<div class="charttypes">
			<input type="checkbox"><label>Line-Chart</label>
			<input type="checkbox"><label>Pie-Chart</label>
			<input type="checkbox"><label>Bar-Graph</label>
</div>

<div class="view">
	<div class="graph"><canvas id="myChart"></canvas></div>	
</div>


		<div class="clear"></div>

						<!--Footer starts from here-->
		<div class="clear"></div>

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


