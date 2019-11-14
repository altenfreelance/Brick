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
				<div class="col-xs-12 col-centered jumbotron" style="background-color:white;">
					<?php

					

					$conn = getConn();
					if (!$conn) die("Connection failed: " . mysqli_connect_error());


//All of the property data to go to DB
					$change = $_POST['prop_change'];
					$propertyName = $_POST['prop_id'];

					$sql = "UPDATE `inventory` SET `propStatus` = '".$change."' WHERE `inventory`.`propID` = ".$propertyName.";";

					$queryWorked = FALSE;

					if(mysqli_query($conn,$sql)){
						$queryWorked = TRUE;

						$last_id = mysqli_insert_id($conn);
						echo "<h2>Property updated in database!</h2>";
					}
					else{
						echo "<h2>mySQL insert failed!</h2>";
					}

//header("location:addPhotos.php");

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
		$('nav a:contains("Add")').parent().css('background-color','white');
		$('nav a:contains("Add")').css('color','maroon');
	</script>

</body>
</html>












