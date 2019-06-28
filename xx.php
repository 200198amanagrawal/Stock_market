<?php
session_start();
$name=$mail=$pass='';
if(isset($_POST["next"]))
{ 
$name=$_POST["Username1"];
$_SESSION["Username1"] = $name;
$mail=$_POST["Email1"];
$pass=$_POST["password1"];
}
$l="localhost";
$user="root";
$p="";
$db="toroi";
$conn = new mysqli($l, $user, $p, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO signup  VALUES (DEFAULT,'$name','$mail','$pass')";
if($conn->query($sql)===TRUE)
{
  header("Location: ./second.php");
  exit();
}
$conn->close();
?>