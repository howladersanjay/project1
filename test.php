<?php

if(isset($_POST['search'])) {
	
}

else {
	$query = "select category,sub_category,gender from complaints";
	$search_result = data($query);
}


function data($query) {
	$conn = mysql_connect("localhost", "root", "HIbuddy12");
	$db = mysql_select_db("startup", $conn);
	$filter_result = mysql_query($query,$conn);
	return $filter_result;	
}

?>

<html>
<body>

<form>
	<input type="text" name="search">
	<input type="submit" name="valuetosearch">
	
	<table>
		<tr>
		<th>Category</th>
		<th>Sub-category</th>
		<th>Gender</th>
		</tr>
	<?php while($row= mysql_fetch_array($search_result)): ?>
		<tr>
		<td><?php echo $row['category']; ?></td>
		<td><?php echo $row['sub_category']; ?></td>
		<td><?php echo $row['gender']; ?></td>
		</tr>
	<?php endwhile; ?>
	</table>

</form>
</body>
</html>
