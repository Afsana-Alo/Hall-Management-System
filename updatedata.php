<?php


//if(isset($_POST['submit'])){
$sl= $_GET['sl'];
$day=$_POST['Day'];
$mealtype=$_POST['Mealtype'];
$mealitem=$_POST['Mealitem'];
$price= $_POST['Price'];

$con = mysqli_connect("localhost", "root", "", "hall_management_system") or die("Connection Failed");

$sql = "UPDATE updatemenu SET Day='{$day}',Mealtype='{$mealtype}', Mealitem='{$mealitem}', Price='{$price}' WHERE SL='{$sl}'";

$result = mysqli_query($con, $sql) or die("Query Unsuccessful.");
echo var_dump($result);
$aff= mysqli_affected_rows($con);


header("Location: http://localhost/hall_management_system/menu1.php");

mysqli_close($con);

?>