<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		table{
			margin:200px 0px 0px 200px;
    text-align: center;
    font-size: 20px;
}
th{
	padding: 20px;
	border:1px solid black;
	border-radius:50px; 
	text-align:center;
    font-size: 20px;
}
td{
	padding: 20px;
	text-align: center;
    font-size: 20px;
    overflow-x:auto;
    overflow-y:auto;
}
tr:nth-child(even){background-color: #f2f2f2}
	</style>
	<title></title>
</head>
<body>
	<?php
	$x='';
	$y='';
	$z='';
	$d='';
	$conn = new mysqli('localhost', 'root', '', 'toroi');
	$sql1 = "SELECT Symbol,Quantity,Price,Amount FROM db2";
	$result = $conn->query($sql1);
	if ($result->num_rows > 0) 
	{
		echo "<table><tr><th>Symbol</th><th>Purchased Price</th><th>Current Price</th><th>Quantity</th><th>Amount</th><th>Profit/Loss</th></tr>";
		while($row = $result->fetch_assoc())
		{
			$x=$row["Symbol"];
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
			$amtz=$z*$row["Quantity"];
			$p=($row["Amount"]-$amtz)/$row["Amount"];
			echo "<tr class='brdr_rds'>";
			echo "<tr><td>" . $row["Symbol"]. "</td><td>" . $row["Price"]. "</td><td>".$z. "</td><td>".$row["Quantity"]. "</td><td>".$row["Amount"]. "</td><td>".$p. "</td><tr>";
		}
	}
	echo "</table>";
	?>
</body>
</html>