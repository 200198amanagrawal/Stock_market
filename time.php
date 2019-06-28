<?php
$x='';
$y='';
$z='';
$d='';
if(isset($_POST['searchx']))
{
	$x=$_POST['searchx'];
	$gAPI1 ='https://www.alphavantage.co/query?function=TIME_SERIES_INTRADAY&symbol='.$x.'&interval=1min&apikey=7LADMM80QNXP6CB5';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch,CURLOPT_URL,$gAPI1);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13");
	$data = curl_exec($ch);
	curl_close($ch);
	$data=json_decode($data, true);
	$y=$data["Meta Data"]["3. Last Refreshed"];
	date_default_timezone_set('Asia/Kolkata');
	$d=date("Y-m-d H:i:00");
	if($d>$y)
	{
		$z=$data["Time Series (1min)"][$y]["4. close"];
	}
	else
	{
		$z=$data["Time Series (1min)"][$d]["4. close"];	
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form class="Form_input" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
					<input type="text" name="searchx" placeholder="Search..">
				</form>
<?php echo $y;
echo "<br>";
echo $d;
echo "<br>";
echo $z;
?>
</body>
</html>