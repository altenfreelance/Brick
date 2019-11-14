<?php
session_start();
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

					//echo "<h2>". $_SESSION['last_id'] ." </h2>";

					$conn1 = getConn();
					

					if (!$conn1) die("Connection failed: " . mysqli_connect_error());



					foreach ($_FILES['upload']['name'] as $key => $name){

						$newFilename = time() . "_" . $name;
						echo "<p>newFilename = $newFilename</p>";
						move_uploaded_file($_FILES['upload']['tmp_name'][$key], 'upload/' . $newFilename);
						$location = 'upload/' . $newFilename;
						$PROPid = $_SESSION['last_id'];

		//mysqli_query($conn,"insert into photo (location) values ('$location')");
						$queryString = "INSERT INTO images (propID,fileName,uploaded) VALUES('".$PROPid."','".$location."',NOW());";
						//echo "<p>queryString = $queryString</p>";


						mysqli_query($conn1,$queryString);

						
						



					}
					mysqli_close($conn1);

					
					echo " <h2> Congrats, your property was added to your records! </h2>";
					
					
					// header('location:social.php');


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


<?php





