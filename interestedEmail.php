<?php 


/*

Requirements
You will need to modifiy your php.ini for points 1 & 2. Points 3 & 4 are done on SparkPost

1 openssl.cafile value 'openssl.cafile= "ca-bundle.crt"' you can grab a bundle here https://raw.githubusercontent.com/bagder/ca-bundle/master/ca-bundle.crt
2 curl must be enabled 'extension=php_curl.dll'
3 A SparkPost API key
4 Validate your domain with SparkPost


api key -> cfc717cdd1cef9e5b206ddd0cb56738f9798e6c1
*/

  $config = [
    'client-key' => '6LdqlGIUAAAAABQLjd-f_iADy5VJeM2GIicSHCi_',
    'secret-key' => '6LdqlGIUAAAAAOYNW6Jv0hXaCkCXebSX8pyNcq9D'
  ];

  ?>

include('sparkpost/sparkpost-api.php');
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


          <?php


if(isset($_POST['interested_prop'])){
  // echo "<h2> Property of Interest: $_POST['interested_prop'] </h2>"; 
  echo "<h2><a target=\"_blank\" href=\"http://maps.google.com/?q={$_POST['interested_prop']}\">{$_POST['interested_prop']}</a></h2>";
  echo "<p>Please take a minute to fill out the following information. We will use this infomation to get in contact with you about the {$_POST['interested_prop']} property.</p>"
  ?> <form id="interestForm" class="inputWidths " action="buyEmail.php" method="post">
         Name <br><input required type="text" name="buyer_name">
         <br>
         Contact Number: <br><input required type="text" name="buyer_number">
         <br>
         Email: <br><input required type="text" name="buyer_email">
         <br>
         Other Notes: <br><textarea class="extendHeight" type="text" name="buyer_notes"></textarea>

          <input type="hidden" name="interested_prop" value="<?php echo $_POST['interested_prop']; ?>">
         


         <div 
           class="g-recaptcha"
           data-sitekey="6LdqlGIUAAAAABQLjd-f_iADy5VJeM2GIicSHCi_"
           data-callback="onSubmit"
           data-size="invisible">
         </div>
         <input type="submit" value="Submit Details" /> 
       </form>
       <p id="warning" style="color:red;"></p>
       <p><br>
         If you are experiencing long loading after submitting this page just reload the page and try again!
       </p>
       <?php
}
else {echo "No interest";}

?>




<?php


// $mail = new sparkPostApi('https://api.sparkpost.com/api/v1/transmissions','cfc717cdd1cef9e5b206ddd0cb56738f9798e6c1');
// $mail-> from(array(
//   'email' => 'altenfreelance@gmail.com',
//   'name'  => 'Andrew Alten'
// ));

// $mail-> subject('My First Sparkpost Mail');
// $mail-> html('
//   Mandrill is over

//   Mandrill is now a paid service, let\'s move to sparkpost!
// ');
// //$mail-> setTo(array('person1@yourdomain.com','person2@yourdomain.com'));
// $mail-> setTo(array('altenfreelance@gmail.com','aalten14@gmail.com'));
// $mail-> setReplyTo('altenfreelance@gmail.com');

// try{
//   $mail->send();
//   print "Message Sent";
// } 
// catch (Exception $e) {
//   print $e; 
// }

// $mail->close();
?>
</div>
</div>
</div>
</div>
</body>

<?php
include_once("repeatable/footer.php");
?>
<script>
  $('#interestForm').submit(function(){
    if(!grecaptcha).getResponse(){
      event.preventDefault();
      grecaptcha.execute();
    }
  }


  onSubmit = function() {
    $('#interestForm').submit();
  } 


</script>

<?php
include_once("repeatable/scripts.php");
?>
<!-- Highlight the proper nav tab -->
<script>
  $('nav a:contains("Buy?")').parent().css('background-color','white');
  $('nav a:contains("Buy?")').css('color','maroon');
</script>
</html>






