<?php
function getConn(){
$servername   = "localhost";
  $dbname = "u796542325_brick";
  $username = "u796542325_root";
  $password = "Br4647tWurst$";

         // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  return $conn;
}
function make_slide_indicators($result)
{
  $output = ''; 
  $count = 0;
//$result = make_query($connect);
  while($row = mysqli_fetch_array($result))
  {
    if($count == 0)
    {
      $output .= '
      <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
      ';
    }
    else
    {
      $output .= '
      <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
      ';
    }
    $count = $count + 1;
  }
  return $output;
}

function make_slides($result){


  $output = '';
  $count = 0;
// $result = make_query($connect);

  while($row = mysqli_fetch_array($result))
  {

    if($count == 0) $output .= '<div class="item active">';

    else $output .= '<div class="item">';


    $output .= "<img class=\"col-xs-12 col-centered\"src=\" {$row['fileName']} \"/>
    <div class=\"carousel-caption\">
    </div>
    </div>";
    $count = $count + 1;
  }
  return $output;
} 
?>