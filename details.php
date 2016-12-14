<?php include('header.php');?>
<script src="js/results-thankyou.js"></script>
<div class="results-thankyou-wrapper">
	<div id="detailsTitle">
		<h1>Details Recieved</h1>
	</div>
	<div class="table-container">
<?php
include('c:\\private\currency-cloud-sql-config.php');
$connection = new mysqli($servername, $username, $password, $database);
if($connection->connect_error){
	die("connection failed: " . $connection->connect_error);
}

$sqlSelectDetails = "select * from currencyCloudXmas";
if($result = mysqli_query($connection, $sqlSelectDetails)){
	
	if(mysqli_num_rows($result) > 0){
		echo '
		<table id="details-table">
			<tr>
				<th>first name</th>
				<th>last name</th>
				<th>email</th>
				<th>score</th>
				<th>charity</th>
			</tr> ';
			while($row=mysqli_fetch_array($result)){
				echo "<tr>";
				echo "<td>" . $row["fname"] . "</td>";
				echo "<td>" . $row["lname"] . "</td>";
				echo "<td>" . $row["email"] . "</td>";
				echo "<td>" . $row["score"] . "</td>";
				echo "<td>" . $row["charity"] . "</td>";
				echo "</tr>";
			}
		echo "</table>";
		mysqli_free_result($result);
	}
	else {
		echo "0 results";
	}
}else{
	echo "database call failed";
}
?>
</div>
</div>
<?php include('footer.php'); ?>