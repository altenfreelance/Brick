<!DOCTYPE html>
<html lang="en">
<?php include_once("repeatable/header.php"); ?>
<body>
   <div class="container-fluid mainContent">
      <div class="container">
        <div class="row row-centered jumbotron">
          <?php include_once("repeatable/logo.php"); 

          echo "<h2><b>About Us</b></h2>"

          ?>

          <div class="col-xs-12 col-md-8 col-centered jumbotron" style="background-color:white;">

            <div class="col-xs-12 col-md-8 text-center bioInfo" style="float:right" >
               <h2>Almamy Daouda Sylla</h2>
               <p> <a href="tel:17342192242">+1 734-219-2242</a><br>
                <a href="Daouda.Sylla @BricksLLCRealEstate.com">Daouda.Sylla @BricksLLCRealEstate.com</a><br>
               <b>Education:</b> Bachelors of Science - Finance and Business from the Univeristy of Findlay
               </p>

            </div>

            <div class="col-xs-8 col-sm-4 col-centered bioInfo">
               <img src="images/Almamy_Sylla.jpg" class="img-responsive img-rounded">
            </div>
            
         </div>

         <div class="col-xs-12 col-md-8 col-centered jumbotron" style="background-color:white;">

            <div class="col-xs-12 col-md-8 text-center bioInfo" style="float:right" >
               <h2>Airion Kosak</h2>
               <p><a href="tel:19375809859">+1 937-580-9859</a><br>
                <a href="mailto:Airion.Kosak@BricksLLCRealEstate.com">Airion.Kosak @BricksLLCRealEstate.com</a><br>
               <b>Education:</b> Bachelors Arts - Psychology and Business from the Univeristy of Findlay
               </p>

            </div>

            <div class="col-xs-8 col-sm-4 col-centered">
               <img src="images/AirionKosak.jpg" class="img-responsive img-rounded">
            </div>
            
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
   $('nav a:contains("Partners")').parent().css('background-color','white');
   $('nav a:contains("Partners")').css('color','maroon');
</script>
</html>