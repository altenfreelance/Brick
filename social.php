<!DOCTYPE html>
<html lang="en">
<?php include_once("repeatable/header.php"); ?>
<body>

<!-- <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> -->

<div class="container-fluid mainContent">
   <div class="container">
    <div class="row row-centered jumbotron">
     <?php include_once("repeatable/logo.php"); ?>

     <div class="box col-xs-12 col-centered" style="text-align:center;">
      
            <!--    <h2><b> Connect With Us</b></h2>
               <a href="#" class="fb" data-toggle="tooltip" title="Facebook"><ion-icon name="logo-facebook"  ></ion-icon></a> -->
               <a href="https://twitter.com/BricksLLC" class="tw" data-toggle="tooltip" title="Twitter"><ion-icon name="logo-twitter" ></ion-icon></a>
              <!--  <a href="#" class="ld" data-toggle="tooltip" title="LinkedIn"><ion-icon name="logo-linkedin" ></ion-icon></a> -->
               <!-- <a href="#" class="em" data-toggle="tooltip" title="Email"><ion-icon name="mail" ></ion-icon></a> -->


            </div>

     <a class="twitter-timeline" href="https://twitter.com/BricksLLC?ref_src=twsrc%5Etfw">Tweets by BricksLLC</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<!--       <div class="fb-page col-xs-12" style="height:1000px" data-href="https://www.facebook.com/andrew.alten" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
-->
       <!-- <h1>Facebook</h1>
        <div class="col-xs-12"> -->

        </div>

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
   $('nav a:contains("Social")').parent().css('background-color','white');
   $('nav a:contains("Social")').css('color','maroon');
</script>

</body>
</html>