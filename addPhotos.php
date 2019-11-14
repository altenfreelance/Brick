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
					<form method="POST" action="addPhotosToDB.php" enctype="multipart/form-data">
						<input type="file" name="upload[]" multiple>
						<input type="submit" value="Upload"> 
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
<!-- 	<script>
		$('nav a:contains("Add")').parent().css('background-color','white');
		$('nav a:contains("Add")').css('color','maroon');
	</script> -->

</body>
</html>