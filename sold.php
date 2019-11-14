<!DOCTYPE html>
<html lang="en">
<?php include_once("repeatable/header.php"); 
include 'functions.php';?>
<body>
 <div class="container-fluid mainContent">
  <div class="container">
    <div class="row row-centered jumbotron">
      <?php include_once("repeatable/logo.php"); 

      echo "<h2><b>Properties Sold</b></h2>";
         // Create connection
      $conn = getConn();
            // Check connection
      if (!$conn) die("Connection failed: " . mysqli_connect_error());


      $detailsSql = "SELECT * FROM inventory where propStatus ='sold' order by dateUp DESC;";
      $detailsResults = mysqli_query($conn, $detailsSql);


      if (mysqli_num_rows($detailsResults) > 0) {
         // output data of each row
        while($detailRow = $detailsResults->fetch_assoc()) {
          echo "<div class=\"jumbotron col-centered col-xs-12 col-md-10  \" style=\"background-color:white; float:none\">";

          echo "<h2>{$detailRow["propName"]}</h2>";
          echo "<h3><a target=\"_blank\" href=\"http://maps.google.com/?q={$detailRow["propAddress"]}\">{$detailRow["propAddress"]}</a></h3>";
          echo "<h4>{$detailRow["bed"]} bd, {$detailRow["bath"]} bath, {$detailRow["car"]} car, {$detailRow["sqft"]} sqft</h4>";
            //echo "<h4>Listing Price: \${$detailRow["propCost"]}</h4>";
          echo "<p>{$detailRow["propDesc"]}</p>";

          $imagesSql = "SELECT * FROM images where propID = {$detailRow["propID"]};";
          $imagesResults = mysqli_query($conn, $imagesSql);

          if (mysqli_num_rows($imagesResults) > 0) {
         // output data of each row
           echo "<div id=\"dynamic_slide_show{$detailRow['propID']}\" class=\"carousel slide\" data-ride=\"carousel\">";

           echo "<ol class=\"carousel-indicators\">";
           echo make_slide_indicators($imagesResults);
           echo"</ol>";

           $imagesResults = mysqli_query($conn, $imagesSql);


           echo "<div class=\"carousel-inner\">";
           echo make_slides($imagesResults); 
           echo "</div>";

           echo "<a class=\"left carousel-control\" href=\"#dynamic_slide_show{$detailRow['propID']}\" data-slide=\"prev\">
           <span class=\"glyphicon glyphicon-chevron-left\"></span>
           <span class=\"sr-only\">Previous</span>
           </a>

           <a class=\"right carousel-control\" href=\"#dynamic_slide_show{$detailRow['propID']}\" data-slide=\"next\">
           <span class=\"glyphicon glyphicon-chevron-right\"></span>
           <span class=\"sr-only\">Next</span>
           </a>";

           echo "</div>";

         }
         else {
          echo "<p><b> Oops! There are not any photos of this property at this time.</b></p>";  
        }

        echo "</div>";

      }
    } else echo "<p>Sold properties haven't been added to the database yet.</p>";
    
    mysqli_close($conn);
    ?>

  </div>
</div>
</div>
<?php
include_once("repeatable/footer.php");
?>


<?php
include_once("repeatable/scripts.php");
?>

<!-- Highlight the proper nav tab -->
<script>
  $('nav a:contains("Sold")').parent().css('background-color','white');
  $('nav a:contains("Sold")').css('color','maroon');
</script>

</body>
</html>