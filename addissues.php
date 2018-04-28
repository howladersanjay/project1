<?php
$conn= mysql_connect("localhost", "root", "HIbuddy12");
$db = mysql_select_db("startup", $conn);

if(isset($_POST['submit']))
{
$cname = $_POST['cname'];
$scname = $_POST['scname'];
$gender = $_POST['gender'];
$incpin = $_POST['incpin'];
$doi = $_POST['DOI'];

if($cname != '' && $scname != '' && $gender != '' && $incpin != '' && $doi !='')
{
$sql = mysql_query('insert into complaints(category, sub_category, gender, incident_pincode, date_of_incident) values("'.$cname.'", "'.$scname.'", "'.$gender.'", "'.$incpin.'", "'.$doi.'")');

echo "Data inserted";
}
else
{
echo "insertion failed";
}
}
mysql_close($conn);
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

.footerhalfright b {
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

/*Form CSS for adding issues starts here*/

.addissuediv {
	width:980px;
	margin:0 auto;
	padding:0px;
}

.addissueform1 {
	width:485px;
	min-width:150px;
	background-color:#8a8585;
}

.contentpart {
	width:400px;
}

label {
	min-width:176px;
	display:inline-block;
	padding-top:20px;
	padding-left:15px;
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


						<!--Add issues form starts from here-->

<div class="addissuediv">
		<div class="addissueform1">
			<form action= "addissues.php" method= "POST">
			<label>Category : </label><input type= "text" name="cname">  ADD NEW</br>
			<label>Sub-Category : </label><input type= "text" name="scname"></br>
			<label>Issue faced by : </label><input type= "checkbox" name="gender" value="M">You <input type= "checkbox" name="gender" value="F">OTHERS
			<label>Incident-Pincode : </label><input type= "number" name="incpin"></br>
			<label>Date-Of-Incident : </label><input type= "date" name="DOI"></br>
			<label>Your location : </label><input type= "date" name="DOI"></br></br>
			<input type="submit" name="submit"/>

			</form>
		</div>

		<div class="contentpart">
			Hi hello hi hello hi hello

		</div>

</div>


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

