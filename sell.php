<!-- Secret Key,  6LdqlGIUAAAAAOYNW6Jv0hXaCkCXebSX8pyNcq9D

  site key 6LdqlGIUAAAAABQLjd-f_iADy5VJeM2GIicSHCi_ -->

  <?php
  $config = [
    'client-key' => '6LdqlGIUAAAAABQLjd-f_iADy5VJeM2GIicSHCi_',
    'secret-key' => '6LdqlGIUAAAAAOYNW6Jv0hXaCkCXebSX8pyNcq9D'
  ];

  ?>
  <!DOCTYPE html>

  <html lang="en">
  <?php include_once("repeatable/header.php"); ?>

  <body>
   <div class="container-fluid mainContent">
    <div class="container">
      <div class="row row-centered jumbotron">

        <?php include_once("repeatable/logo.php"); ?>
        <div class="col-xs-12 col-centered jumbotron" style="background-color:white;">
         <h2>Interested in Selling Your Property?</h2>
         <p>Please take a minute to send us your details</p>

         <form id="sellForm" class="inputWidths" action="sellEmail.php" method="post">
           Name <br><input required type="text" name="seller_name">
           <br>
           Number: <br><input required type="text" name="seller_number">
           <br>
           Email: <br><input required type="text" name="seller_email">
           <br>
           Address of Property:<br><input required type="text" name="seller_prop_address">
           <br>
           Property Description: <br><textarea class="extendHeight" type="text" name="seller_prop_desc"></textarea> 
           <br>
           Other Notes: <br><textarea class="extendHeight" type="text" name="seller_notes"></textarea>
           <div 
           class="g-recaptcha"
           data-sitekey="6LdqlGIUAAAAABQLjd-f_iADy5VJeM2GIicSHCi_"
           data-callback="onSubmit"
           data-size="invisible">
         </div>
         <input type="submit" value="Submit Property Details" /> 
       </form>
       <p id="warning" style="color:red;"></p>
       <p><br>
         If you are experiencing long loading after submitting this page just reload the page and try again!
       </p>


     </div>
   </div> 

 </div>
</div>

</body>

<?php
include_once("repeatable/footer.php");
?>
<script>
  $('#sellForm').submit(function(){
    if(!grecaptcha).getResponse(){
      event.preventDefault();
      grecaptcha.execute();
    }
  }


  onSubmit = function() {
    $('#sellForm').submit();
  } 


  </script>

  <?php
  include_once("repeatable/scripts.php");
  ?>
  <!-- Highlight the proper nav tab -->
  <script>
    $('nav a:contains("Sell?")').parent().css('background-color','white');
    $('nav a:contains("Sell?")').css('color','maroon');
  </script>
  </html>