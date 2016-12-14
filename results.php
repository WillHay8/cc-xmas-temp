<?php include('header.php'); 
$logoFindCount = $_REQUEST['logoFindCount']
?>
<script src="js/results-thankyou.js"></script>
<div id="results-wrapper" class="results-thankyou-wrapper">
	<div id="heading-row" class="results-container">
		<div id="heading-container">
			<h1>Currency Cloud Christmas Search</h1>
		</div>
	</div>
	<div id="score-row" class="results-container">
		<div id="score-container">
			<h2>Score:</h2>
			<div id="score">
					<?=$logoFindCount?>/10
			</div>
		</div>
	</div>
	<form action="http://localhost/rooster-punk/aframe/cc-xmas/thankyou.php">
		<input type="hidden" name="logoFindCount" value="<?= $logoFindCount ?>"/>
		<div id="charity-selection" class="results-container">

			<div id="charity-table-container">
				<p class="explain">Choose a charity to donate your score to. The charity with the most
				points will get a donation from us</p>
				<div id="charity-table">
					<div id="img-row">
						<div class="img-cell">
							<img src="img/oxfam_logo.png"/>
						</div>
						<div class="img-cell">
							<img src="img/scope_logo.png"/>
						</div>
						<div class="img-cell">
							<img src="img/bhf_logo.png"/>
						</div>
					</div>
					<div id="radio-row">
						<div class="radio-cell">
							<input type="radio" name="charity" value="oxfam"></input>
						</div>
						<div class="radio-cell">
							<input type="radio" name="charity" value="scope"></input>
						</div>
						<div class="radio-cell">
							<input type="radio" name="charity" value="bhf"></input>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="results-details" class="results-container">
			<div id="inputs-container">
				<label for="fname">first name</label>
				<input id="fname" type="text" name="fname"></input>
				<label for="lname">last name</label>
				<input id="lname" type="text" name="lname"></input>
				<label for="email">email</label>
				<input id="email" type="text" name="email"></input>
			</div>
		</div>
		<div id="submit-row" class="results-container">
			<div id="submit-container">
			<input type="submit"></submit>
		</div>
		</div>
	</form>
</div>
<?php include('footer.php'); ?>