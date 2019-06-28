<?php
if(isset($_POST['submit']))
{
	$x=$_POST['search'];
$gAPI ='https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol='.$x.'&outputsize=full&apikey=HEAZBVHUI9I9PXJ4';
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch,CURLOPT_URL,$gAPI);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13");
$data = curl_exec($ch);
curl_close($ch);
$data=json_decode($data, true);
$y=$data["Meta Data"]["2. Symbol"];
$z=$data["Time Series (Daily)"]["2018-12-04"]["4. close"];
$z1=$data["Time Series (Daily)"]["2018-12-04"]["5. volume"];
echo "<br>";
$conn = new mysqli('localhost', 'root', '', 'toroi');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO db1 (symbol, close, volume) VALUES ('$y','$z','$z1')";
if ($conn->query($sql) === TRUE) {
    
$sql1 = "SELECT id,symbol, close, volume FROM db1";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["symbol"]. " " . $row["close"]." ".$row["volume"]."<br>";
    }
} else {
    echo "0 results";
}

}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
	<input type="text" name="search" placeholder="write something">
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>