<!DOCTYPE html>
<html lang="en">
   <?php include_once("repeatable/header.php"); 
   

   ?>
   <body>
      <div class="container-fluid mainContent">
         <div class="container">
         	<div class="row row-centered jumbotron">
         		
         		<?php include_once("repeatable/logo.php"); 

               echo "<h2><b>Home</b></h2>";
               ?>
         		<div class="col-xs-12 col-centered jumbotron" style="background-color:white;">
         		<h2>Overview</h2>
         		<p>Are you looking to quickly sell a property or find a property to buy? At Bricks, our team is made up of driven real-estate entrepreneurs who specialize in solving problems. We're not only trying to help individuals sell properties without paying a real estate agent but we are also helping investors locate properties they desire. </p>
         		<h2><a href="sell.php">Need to Sell?</a></h2>
         		<p>Our objective is to understand the situation that the seller is faced with. This will allow us to use our resources to provide a win-win solution and we can help point you in the right direction. Price and condition is not an obstacle for our team. We are looking to buy your home!</p>
         		<h2><a href="inventory.php">Looking to Buy?</a> </h2>
         		<p>We can help you locate any type of property across the country. At Bricks, we have access to on and off market properties that will suffice your needs. Our job is to find equity in residential, commercial and land. </p>

         	</div>
         </div> 
        
</div>
</div>

</body>

<?php
include_once("repeatable/footer.php");
?>


<?php
include_once("repeatable/scripts.php");
?>
<!-- Highlight the proper nav tab -->
         <script>
         	$('nav a:contains("Home")').parent().css('background-color','white');
         	$('nav a:contains("Home")').css('color','maroon');
         </script>
</html>