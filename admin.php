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
				<div class="col-xs-12 col-centered jumbotron" style="background-color:white;">
					<h2>Welcome Admin!</h2>
					<p>Please use the navigator menu at the top of your screen to add, delete, manage, or modify properties.</p>
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

	<script src="js/manage.js"></script>

</body>
</html>