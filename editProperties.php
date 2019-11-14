<?php
session_start();

if(!isset($_SESSION['password'])){
	header("location:index.php");
}
include 'functions.php';
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
				<div class="col-xs-12 col-centered jumbotron">
					<h3>Edit Properties</h3>

					<?php
					$conn = getConn();
					if (!$conn) die("Connection failed: " . mysqli_connect_error());


					$propertiesSql = "SELECT * FROM inventory order by propStatus;";

					$results = mysqli_query($conn, $propertiesSql);

					if (mysqli_num_rows($results) > 0) {
         // output data of each row
						while($row = $results->fetch_assoc()) {
							echo "<div class=\"jumbotron col-centered col-xs-12 col-md-10  \" style=\"background-color:white; float:none\">";

							echo "<h2>{$row["propName"]}</h2>";

							echo "<h3><a target=\"_blank\" href=\"http://maps.google.com/?q={$row["propAddress"]}\">{$row["propAddress"]}</a></h3>";

							echo "<h4>{$row["bed"]} bd, {$row["bath"]} bath, {$row["car"]} car, {$row["sqft"]} sqft</h4>";

							echo "<h4>Listing Price: \${$row["propCost"]}</h4>";

							echo "<h2>Change Status of Property:</h2>"
							?>
							<form action="editPropertiesInDB.php" method="post">
								<select name="prop_change">
									<option value="inventory" selected>Add to Inventory</option>
									<option value="sold">Mark as Sold</option>
									<option value="deleted">Delete</option>
								</select>
								<input type="hidden" name="prop_id" value="<?php echo $row["propID"] ?>" />

								<input type="submit" name="Insert">
							</form>
							<?php
							echo "<p>Current Status: <b>{$row["propStatus"]}</b></>";
							echo "</div>";
						}
					}
					else{
						echo "<p> There are no properties in the database </p>";
					}

					?>


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
		$('nav a:contains("Edit")').parent().css('background-color','white');
		$('nav a:contains("Edit")').css('color','maroon');
	</script>

</body>
</html>