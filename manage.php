  <?php
  $config = [
    'client-key' => '6LdqlGIUAAAAABQLjd-f_iADy5VJeM2GIicSHCi_',
    'secret-key' => '6LdqlGIUAAAAAOYNW6Jv0hXaCkCXebSX8pyNcq9D'
  ];

  ?>

  <!DOCTYPE html>
  <html lang="en">
  <link href="css/manage.css" rel="stylesheet">

  <?php include_once("repeatable/header.php"); ?>
  <body>
   <div class="container-fluid mainContent">
    <div class="container">
      <div class="row row-centered jumbotron">
        <?php include_once("repeatable/logo.php"); ?>

        <h2>Log In To Manage</h2>
        <div class="col-xs-12 col-md-8 col-centered jumbotron" style="background-color:white;">
          <div class="login-container">
           <div id="output"></div>

           <div class="form-box">
            <form action="check.php" method="post">
             <input name="username" type="text" placeholder="username">
             <input name="password" type="password" placeholder="password">
             <button class="btn btn-info btn-block login" type="submit" value="proceed">Login</button>
             <!-- <button 
             class="g-recaptcha"
             data-sitekey="6LdqlGIUAAAAABQLjd-f_iADy5VJeM2GIicSHCi_"
             data-callback="onSubmit">
             Send Property Details
           </button> -->
         </form>
       </div>
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

<!-- <script src="js/manage.js"></script> -->

</html>