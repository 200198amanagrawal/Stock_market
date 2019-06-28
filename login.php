<?php
session_start();
$us='';$pass='';
if(isset($_POST["login"]))
{
	$us=$_POST["email"];
	$pass=$_POST["password"];
}
$l="localhost";//changes to be made
$user="root";
$p="";
$db="toroi";
$conn = new mysqli($l, $user, $p, $db);
$perr="";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT id FROM signup WHERE Email='$us' AND Password= '$pass'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
$name=$row["Name"];
}
$c=$result->num_rows;
if($c==1) 
{
    $_SESSION["name"] = $name;
    header("location: ./second.php");
    exit();
}
else{
header('location: ./index.php');
exit();
}
$conn->close();
?>