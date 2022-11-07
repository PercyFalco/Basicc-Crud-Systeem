<?php



include ("./connect_db.php");


$id = $_POST["id"];
$firstname = $_POST["firstname"];
$infix = $_POST["infix"];
$lastname = $_POST["lastname"];

$sql = "UPDATE users 
    SET firstname = '$firstname', 
    infix = '$infix', 
    lastname = '$lastname'
    WHERE id = $id;"; 



mysqli_query($conn, $sql);


header("Location: ./read.php");
?>