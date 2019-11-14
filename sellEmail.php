<?php 
include('sparkpost/sparkpost-api.php');
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
        <div class="col-xs-12 col-centered jumbotron" style="background-color:white;">




          <?php 

          if(isset($_POST['seller_number'])){
            $name = $_POST['seller_name']; 
            $number = $_POST['seller_number'];     
            $address = $_POST['seller_prop_address'];    
            $description = $_POST['seller_prop_desc'];  
            $notes = $_POST['seller_notes'];
            $email = $_POST['seller_email'];

          //echo "<h1>" . curl_version()['ssl_version'] . "</h1>";
            $mail = new sparkPostApi('https://api.sparkpost.com/api/v1/transmissions','cfc717cdd1cef9e5b206ddd0cb56738f9798e6c1');
            $mail-> from(array(
              'email' => 'automated@bricksllcrealestate.com',
              'name'  => 'Seller from Bricks Real Estate LLC'
            ));


            $mail-> subject("Seller: " . $name . " - " . $number ."" );
            $mail-> html("<h1 style=\"color:maroon;\">Seller Information</h1><span>
              <h2>Name:</h2> " . $name ." <br>
              <h2>Number:</h2> " . $number ." <br>
              <h2>Email:</h2> " . $email ." <br>
              <h2>Address of Property:</h2> <a target=\"_blank\" href=\"http://maps.google.com/?q={$address}\">{$address}</a> <br>
              <h2>User Description:</h2> " . $description ." <br>
              <h2>Other Notes:</h2> " . $notes ." </span>");

//$mail-> setTo(array('person1@yourdomain.com','person2@yourdomain.com'));
              $mail-> setTo(array('Airion.Kosak@bricksllcrealestate.com','Daouda.Sylla@bricksllcrealestate.com', 'aalten14@gmail.com'));
              $mail-> setReplyTo($email);

              try{
                $mail->send();
                echo "<h2>Email Sent</h2>";
                echo "<p>Thank you $name for sending your property information! We will contact you within 24 hours. Please be sure to check your spam folder if you havent recieved any response. If you would like to expidite the process, feel free to contact us via email or cell phone. You can find our contact information on our partners page <a href=\"partners.php\">here.</a>";
              } 
              catch (Exception $e) {
                echo "Your email didn't send! Go back and try again. <a href=\"sell.php\">Sell Here</a></p>";
                print $e; 
              }

              $mail->close();
            }
            else{
              echo "<p>Please use this page to send your property details to us! <a href=\"sell.php\">Sell Here</a></p>";
            }





            ?>
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

            </html>