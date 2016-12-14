<?php include('header.php');?>
<script src="js/results-thankyou.js"></script>

 <?php
$score = intVal($_REQUEST['logoFindCount']);
$charity =  $_REQUEST['charity'];
$fname = $_REQUEST['fname'];
$lname =  $_REQUEST['lname'];
$email =  $_REQUEST['email'];
?>
<div id="thankyou-wrapper" class="results-thankyou-wrapper">
	<div id="thankyou-container">
		<h1>Thankyou from <?=$charity?></h1>
			<div id="thankyou-santa" class="santa">
				<img src="img/santa.gif" alt="Santa" />
			</div>
<?php
include('c:\\private\currency-cloud-sql-config.php');
$connection = new mysqli($servername, $username, $password, $database);
if($connection->connect_error){
	die("connection failed: " . $connection->connect_error);
}

$sqlCheckForEmail = "select count(*) from currencyCloudXmas where email='".$email."'";
if($countRows = mysqli_query($connection, $sqlCheckForEmail)){
	while($row=mysqli_fetch_array($countRows)){
		$count = $row['count(*)'];
	}
}
else{
	echo "select query failed";
}
if($count==0){
	$sqlInsertDetails = "insert into currencyCloudXmas (fname, lname, email, score, charity) values ('".$fname."', '".$lname."', '".$email."', ".$score.", '".$charity."')";
	//echo $sqlInsertDetails;
	if(mysqli_query($connection, $sqlInsertDetails)){
		//echo "details inserted successfully";
	}
	else {
		echo "details insertion failed";
	}
}
else{
	echo "email already exists";
}
?>

	</div>
</div>

<?php include('footer.php'); ?>

<?php
/*echo 'logo find count: '.$score.'<br/>'.
	'fname: '.$fname.'<br/>'.
	'lname: '.$lname.'<br/>'.
	'email: '.$email.'<br/>';
	 include('footer.php')?>
	 */
	 ?>