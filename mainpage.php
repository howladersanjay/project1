<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "header2.css">

<style>

#centerbodytop {
	margin:0px;
	padding:0px;
}

.banner {
	height:300px;
	background-color:#ccc;
}

#centerbodymid {
	margin:0px;
	padding:0px;
}

.centerpart {
	width:1024px;
	margin:0px auto;
}

.centerpart1 {
	width:163px;
	height:100px;
	margin-left:5px;
	background-color:none;
	float:left;
	text-align:center;
	border:1px solid #ccc;
	display:block;
	border-radius:25px;
}

.imgcenter {
	padding-top:5px;
}

span {
	display:block;
}

h3 {
	text-align:center;
	color:#225a6f;
}

#centerbodyaftermid {
	margin:20px auto 0px;
}

.aftermid1 {
	width:521px;
	height:100px;
	border:1px solid #ccc;
	border-radius:0px 50px 50px 0px;
	float:left;
	background-color:#ccc;
}

.aftermid2 {
	width:762px;
	height:100px;
	border:1px solid #ccc;
	border-radius:0px 25px 25px 0px;
	border-left:none;
	float:right;
}

#centerbodybeforebottom {
	margin:20px auto 0px;
	padding:0px;
}

.beforebottomleft {
	width:30%;
	float:left;
}

.beforebottomright {
	width:70%;
	float:right;
}

.beforebottomrightset {
	width: 75%;
	margin: 0 auto;
	height: 355px;
}

.description {
	height:350px;
	background-color:none;
}


#centerbodybottom {
	margin:15px auto 0px;
	padding:0px;
}

.bottomleft {
	width:70%;
	float:left;
}

.bottomright {
	width:30%;
	float:right;
}

.bottomleftset {
	width: 75%;
	margin: 0 auto;
	height: 355px;
}

.description2 {
	height:350px;
	background-color:none;
}

#afterbottom {
	margin:0px;
	padding:0px;
}

#afterbottomdiv {
	width:1024px;
	margin:15px auto 0px;
}

.afterbottompart1 {
	width:335px;
	border:1px solid #ccc;
	height:300px;
	float:left;
	margin-left:5px;
}

.afterbottompart2 {
	width:335px;
	border:1px solid #ccc;
	height:300px;
	float:right;
}

h2 {
	text-align:center;
	color:#225a6f;
	padding-top: 110px;
}

p {
	text-align:center;
	padding:20px;
	color:#4e6b4e;
}

.clear {
	clear:both;
}

a:link {
	color:black;
}

a:visited {
	color:black;
}

a:hover {
	color:#225a6f;
}

a {
	text-decoration:none;
}

body {
	background-color:none;
	margin:0px;
	padding:0px;
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

<script>

$(document).ready(function() {
	var ctx = document.getElementById('myChart1').getContext('2d');
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

<script>

$(document).ready(function() {
var ctx = document.getElementById("myChart3").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'polarArea',
  data: {
    labels: ["Murder", "Corruption", "Discrimination", "Unemployment", "Pollution", "Water", "Agriculture"],
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#3498db",
        "#95a5a6",
        "#9b59b6",
        "#f1c40f",
        "#e74c3c",
        "#34495e"
      ],
      data: [15, 29, 13, 5, 48, 20, 3]
    }]
  }
});
});
</script>

</head>

<body>

					<!--Header-->
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

					<!--Center Part-->

	<div id= "centerbodytop">
		<div class = "banner">
			<img src="b3.jpg">
		</div>

	</div>

	<div id= "centerbodymid">
		
		<h3>Search on the basis of:</h3>
		<div class = "centerpart">
			<div class="centerpart1">
				<a href="reportview.php"><img src="logo1.png" alt="pincode" class="imgcenter"><span>Pincode</span></a>
			</div>
			<div class="centerpart1">
				<a href="reportview.php"><img src="logo1.png" alt="pincode" class="imgcenter"><span>State</span></a>
			</div>
			<div class="centerpart1">
				<a href="reportview.php"><img src="logo1.png" alt="pincode" class="imgcenter"><span>District</span></a>
			</div>
			<div class="centerpart1">
				<a href="reportview.php"><img src="logo1.png" alt="pincode" class="imgcenter"><span>City</span></a>
			</div>
			<div class="centerpart1">
				<a href="reportview.php"><img src="logo1.png" alt="pincode" class="imgcenter"><span>Town/Village</span></a>
			</div>
			<div class="centerpart1">
				<a href="reportview.php"><img src="logo1.png" alt="pincode" class="imgcenter"><span>Lattitude-Longitude</span></a>
			</div>
		</div>

	</div>

	<div class="clear"></div>

	<!--<div id= "centerbodyaftermid">
		<div class = "aftermid1">
			<p>Search on basis of Pincode / State / District / City / Town-Village / Lattitude-Longitude ..?</p>
		</div>

		<div class = "aftermid2">
			<p>By selecting either of these options you can precisely search for concerns or issues that has been reported by individuals</p>
		</div>

	</div>-->

	<div class="clear"></div>

	<div id= "centerbodybeforebottom">
		<div class = "description">
			<div class="beforebottomleft">
				<h2>Molestation cases registered</h2>
			</div>
			<div class="beforebottomright">
				<div class="beforebottomrightset">
				<canvas id="myChart"></canvas>
			</div>
		</div>

	</div>

	<div class="clear"></div>

	<div id= "centerbodybottom">
		<div class = "description2">
			<div class="bottomleft">
				<div class="bottomleftset">
				<canvas id="myChart1"></canvas>
				</div>
			</div>
			<div class="bottomright">
				<h2>Murder cases registered</h2>
			</div>
		</div>

	</div>

	<div class="clear"></div>

	<div id= "centerbodybeforebottom">
		<div class = "description">
			<div class="beforebottomleft">
				<h2>Trending Issues</h2>
			</div>
			<div class="beforebottomright">
				<div class="beforebottomrightset">
				<canvas id="myChart3"></canvas>
			</div>
		</div>

	</div>

	<div class="clear"></div>

	<div id="afterbottom">
		<div id="afterbottomdiv">
			<div class="afterbottompart1">
				<img src="bb1.jpg">
			</div>
			<div class="afterbottompart1">
				<img src="bb4.jpg">
			</div>
			<div class="afterbottompart2">
				<img src="bb3.jpg">
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
