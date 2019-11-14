<?php session_start();

if(!isset($_SESSION['password'])){
	header("location:index.php");
}
include 'functions.php';

$conn = getConn();
if (!$conn) die("Connection failed: " . mysqli_connect_error());


$propertyName = $_POST['prop_name'];
$propertyDesc = $_POST['prop_description'];
$propertyCost = $_POST['listing_price'];
$propertyAddress = $_POST['prop_address'];
$dateUp = date('Y-m-d H:i:s');
$propertyStatus = $_POST['prop_status'];
$beds = $_POST['num_beds'];
$baths = $_POST['num_baths'];
$sqft = $_POST['num_sqft'];
$car = $_POST['num_cars'];

$sql = "INSERT INTO inventory (propName, propDesc, propCost, propAddress, dateUp, propStatus, bed, bath, sqft, car) VALUES ('$propertyName', '$propertyDesc', '$propertyCost', '$propertyAddress', '$dateUp', '$propertyStatus', '$beds', '$baths', '$sqft', '$car')";

$queryWorked = FALSE;

if(mysqli_query($conn,$sql)){
	$queryWorked = TRUE;
	
	$last_id = mysqli_insert_id($conn);

}

$_SESSION['queryWorked'] = $queryWorked;
$_SESSION['last_id'] = $last_id;

header("location:addPhotos.php");
exit();
?>