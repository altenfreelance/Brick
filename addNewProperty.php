<?php
session_start();

if(!isset($_SESSION['password'])){
	header("location:index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<link href="css/manage.css" rel="stylesheet">

<?php include_once("repeatable/adminHeader.php"); ?>
<body>
	<div class="container-fluid mainContent">
		<div class="container">
			<div class="row row-centered jumbotron">
				<?php include_once("repeatable/logo.php"); ?>
				<h2>Submit A New Property</h2>
				<div class="col-xs-12 col-centered jumbotron" style="background-color:white;">
					<form class="inputWidths" action="addPropToDB.php" method="post">
						Property Name: <br><input type="text" name="prop_name">
						<br><br>
						Property Address: <br><input type="text" name="prop_address">
						<br><br>
						Number of Beds: <br><input type="text" name="num_beds">
						<br><br>
						Number of Baths (Ex 1.5 or 2): <br><input type="text" name="num_baths">
						<br><br>
						Number of cars for Garage (enter 0 if no garage):<br> <input type="text" name="num_cars">
						<br><br>
						Number of Square ft (Ex 2000): <br><input type="text" name="num_sqft">
						<br><br>
						Listing Price (ex 150,000 with no dollar sign):<br> <input type="text" name="listing_price">
						<br><br>
						Description paragraph/ other information: <br><textarea class="extendHeight" type="text" name="prop_description"></textarea>
						<br><br>
						<select name="prop_status">
							<option value="inventory" selected>Add to Inventory</option>
							<option value="sold">Mark as Sold</option>
						</select>
						<br>
						<input type="submit" name="Insert">
					</form>
				</div>

			</div>
		</div>
	</div>
	<?php
	include_once("repeatable/adminFooter.php");
	?>


	<?php
	include_once("repeatable/scripts.php");
	?>


	<!-- Highlight the proper nav tab -->
	<script>
		$('nav a:contains("Add")').parent().css('background-color','white');
		$('nav a:contains("Add")').css('color','maroon');
	</script>

</body>
</html>