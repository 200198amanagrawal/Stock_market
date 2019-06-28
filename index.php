<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Waterwheel Carousel Plugin Demo</title>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.waterwheelCarousel.js"></script>
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="1.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script type="text/javascript">
	$(document).ready(function () {
    var d = new Date();
    var xd=d.getFullYear();
    var yd=d.getMonth();
    var zd=d.getDate();
  var gAPI = 'https://newsapi.org/v2/everything?q=bitcoin&from='+xd+'-'+yd+'-'+zd+'&sortBy=publishedAt&apiKey=f72cdd63a2444004ae6410dedfb38139';
    $.getJSON(gAPI,function(json) {
      $('#heading1').html(json["articles"][1]["title"]);
      $("#mt-img1").attr("src",json['articles'][1]['urlToImage']);
      $("#link1").attr("href",json['articles'][1]['url']);
      $('#heading2').html(json["articles"][2]["title"]);
      $("#mt-img2").attr("src",json['articles'][2]['urlToImage']);
      $("#link2").attr("href",json['articles'][2]['url']);
      $('#heading3').html(json["articles"][3]["title"]);
      $("#mt-img3").attr("src",json['articles'][3]['urlToImage']);
      $("#link3").attr("href",json['articles'][3]['url']);
      $('#heading4').html(json["articles"][4]["title"]);
      $("#mt-img4").attr("src",json['articles'][4]['urlToImage']);
      $("#link4").attr("href",json['articles'][4]['url']);
      $('#heading5').html(json["articles"][5]["title"]);
      $("#mt-img5").attr("src",json['articles'][5]['urlToImage']);
      $("#link5").attr("href",json['articles'][5]['url']);
    });
 });
</script>
    <style type="text/css">

li{
list-style:none;
}


        .box {
    float: left;
    overflow: hidden;
    background: #eff0f4;
    display: none;
    padding: 0 42px;
}

        .box-inner {
            width: 318px;
            padding: 10px;
        }

        .box-inner ul li {
            padding-bottom: 13px;
        }

        .box-inner ul {
            list-style: none;
            padding: 0px;
            margin: 0px;
        }

        .box-inner ul li a img {
            width: 100px;

        }
.ktrv {
    width: 100%;
   /* border: 1px solid #222;*/
    height: 300px;
    position: relative;
    clear: both;
    overflow: hidden;
   background: transparent !important;
    margin: 170px auto 0; 
	    max-width: 700px;
}
    .noselect {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/*        .wwkt img {
      display: inline-block;
      width: 100%;
      height: 100%;
      opacity: 0;

    }*/

.ktrv>div.wwkt>div:nth-child(2) {
    position: absolute;
    top: 0;
    width: 100%;
    height: inherit;
    display: table;
    background-color: #fff;
    border-radius: 5px;
}
    .ktrv>div.wwkt>div:last-child {
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        display: table;
    }
    .ktrv > div.wwkt > div:first-child {

    display: table-cell;
    vertical-align: middle;
    height: 100%;
    width: 100%;

}
h2 {
    display: table-cell;
    vertical-align: middle;
    /* height: inherit; */
    width: 100%;
    text-align: center;
    color: black;
    font-size: 22px;
}
    #callback-output {
        height: 250px;
        overflow: scroll;
    }
.ktrv>div.wwkt {
    display: inline-block;
    cursor: pointer;
    box-shadow: 0 0 5px #999;
}
    </style>
</head>

<body>
<div class="top_secc">
  <div class="bar_secc">
    <div class="blockkk">
        <div class="icon_secc">
      <div class="dgdg">
      <a href="#" class="mnu_sctn">Menu</a>
       <div class="hdnnd">
      <img src="img/shape3.png">
     <ul class="three_icns">
        <li><a href=""><img src="img/notification2.png" style="margin-left: 70px;"></a></li>
        <li><img src="img/user4.png" data-toggle="modal" data-target="#myModal" style="margin-left: 60px;"></li>
      </ul>
      </div>
      </div>
       
      </div>
    </div>
  </div>
</div>



<!--<div class="sidebar-wrapper">
	<div class="row add_wdth">
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:0;">
			<div class="sidebar-main">
				<div class="maz-toggle">
					<span id="bar"><i style="position:absolute;z-index:9999;" class="fas fa-bars slide-toggle "></i></span>
				</div>
				
			
			<div  style="width: 350px;">
				<div class="maz1 maz-border" style="margin-left: 20px;width:300px;">
					<div class="mt-icon-r" style="float: right;">
						<a href="#"><i class="fas fa-window-minimize"></i></a>
					</div>
					<div class="mt-content">
						<div class="mt-img">
							<img src="" alt="" id="mt-img1">
						</div>
						<div class="mt-txt">
							<a href="" id="link1"><b><p id="heading1" style="overflow:hidden;text-overflow: ellipsis; "></p></b></a>
						</div>
					</div>
				</div>
			<div class="maz2 maz-border" style="margin-left: 20px;width:300px;">
				<div class="mt-icon">
					<div class="mt-icon-r" style="float: right;">
						<a href="#"><i class="fas fa-window-minimize"></i></a>
					</div>
				</div>
				<div class="mt-content">
						<div class="mt-img">
							<img src="" alt="" id="mt-img2">
						</div>
						<div class="mt-txt">
							<a href="" id="link2"><b><p id="heading2" style="overflow:hidden;text-overflow: ellipsis; "></p></b></a>
						</div>
					</div>
			</div>
			<div class="maz2 maz-border" style="margin-left: 20px;width:300px;">
				<div class="mt-icon">
					<div class="mt-icon-r" style="float: right;">
						<a href="#"><i class="fas fa-window-minimize"></i></a>
					</div>
				</div>
				<div class="mt-content">
						<div class="mt-img">
							<img src="" alt="" id="mt-img3">
						</div>
						<div class="mt-txt">
							<a href="" id="link3"><b><p id="heading3" style="overflow:hidden;text-overflow: ellipsis; "></p></b></a>
						</div>
					</div>
			</div>
			<div class="maz2 maz-border" style="margin-left: 20px;width:300px;">
				<div class="mt-icon">
					<div class="mt-icon-r" style="float: right;">
						<a href="#"><i class="fas fa-window-minimize"></i></a>
					</div>
				</div>
				<div class="mt-content">
						<div class="mt-img">
							<img src="" alt="" id="mt-img4">
						</div>
						<div class="mt-txt">
							<a href="" id="link4"><b><p id="heading4" style="overflow:hidden;"></p></b></a>
						</div>
					</div>
			</div>
      <div class="maz2 maz-border" style="margin-left: 20px;width:300px;">
        <div class="mt-icon">
          <div class="mt-icon-r" style="float: right;">
            <a href="#"><i class="fas fa-window-minimize"></i></a>
          </div>
        </div>
        <div class="mt-content">
            <div class="mt-img">
              <img src="" alt="" id="mt-img5">
            </div>
            <div class="mt-txt">
              <a href="" id="link5"><b><p id="heading5" style="overflow:hidden;"></p></b></a>
            </div>
          </div>
      </div>
			</div>
      <div id="hhhhhh" class="box">
        <div class="box-inner">
        <ul class="">
            <li>
                <div class="icn_nd_txt"><a href="index.html"><img src="img/1.png" alt=""></a>
                <div class="icn_open_txt"><p>Stock Watch</p></div>
                </div>
            </li>
            <li>
                <div class="icn_nd_txt"><a href="second.html"><img src="img/2.png" alt=""></a>
                <div class="icn_open_txt"><p>Trade now</p></div>
                </div>
            </li>
            <li>
                <div class="icn_nd_txt"><a href="table.html"><img src="img/33.png" alt=""></a>
                <div class="icn_open_txt"><p>Transaction history</p></div>
                </div>
            </li>
            <li>
                <div class="icn_nd_txt"><a href="table2.html"><img src="img/4.png" alt=""></a>
                <div class="icn_open_txt"><p>Portfolio</p></div>
                </div>
            </li>
            <li>
                <div class="icn_nd_txt"><a href="#"><img src="img/5.png" alt=""></a>
                <div class="icn_open_txt"><p>Help</p></div>
                </div>
            </li>
          </ul>
        </div>
      </div>
			</div>
		</div>-->
	<div class="sidebar-wrapper">
  <div class="row add_wdth">
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:0;">
        <!----------------sidebar-------------------->
      <div class="sidebar-main">
      
        <div class="maz-toggle">
          <span id="bar"><i style="position:absolute;z-index:9999;"class="fas fa-bars slide-toggle "></i></span>
        </div>
        
      
      
      <div class="form_sece">
        <div class="maz1 maz-border" style="margin-left: 20px;width:300px;">
          <div class="mt-icon-r" style="float: right;">
            <a href="#"><i class="fas fa-window-minimize"></i></a>
          </div>
          <div class="mt-content">
            <div class="mt-img">
              <img src="" alt="" id="mt-img1">
            </div>
            <div class="mt-txt">
              <a href="" id="link1"><b><p id="heading1" style="overflow:hidden;text-overflow: ellipsis; "></p></b></a>
            </div>
          </div>
        </div>
      <div class="maz2 maz-border" style="margin-left: 20px;width:300px;">
        <div class="mt-icon">
          <div class="mt-icon-r" style="float: right;">
            <a href="#"><i class="fas fa-window-minimize"></i></a>
          </div>
        </div>
        <div class="mt-content">
            <div class="mt-img">
              <img src="" alt="" id="mt-img2">
            </div>
            <div class="mt-txt">
              <a href="" id="link2"><b><p id="heading2" style="overflow:hidden;text-overflow: ellipsis; "></p></b></a>
            </div>
          </div>
      </div>
      <div class="maz2 maz-border" style="margin-left: 20px;width:300px;">
        <div class="mt-icon">
          <div class="mt-icon-r" style="float: right;">
            <a href="#"><i class="fas fa-window-minimize"></i></a>
          </div>
        </div>
        <div class="mt-content">
            <div class="mt-img">
              <img src="" alt="" id="mt-img3">
            </div>
            <div class="mt-txt">
              <a href="" id="link3"><b><p id="heading3" style="overflow:hidden;text-overflow: ellipsis; "></p></b></a>
            </div>
          </div>
      </div>
      <div class="maz2 maz-border" style="margin-left: 20px;width:300px;">
        <div class="mt-icon">
          <div class="mt-icon-r" style="float: right;">
            <a href="#"><i class="fas fa-window-minimize"></i></a>
          </div>
        </div>
        <div class="mt-content">
            <div class="mt-img">
              <img src="" alt="" id="mt-img4">
            </div>
            <div class="mt-txt">
              <a href="" id="link4"><b><p id="heading4" style="overflow:hidden;"></p></b></a>
            </div>
          </div>
      </div>
      <div class="maz2 maz-border" style="margin-left: 20px;width:300px;">
        <div class="mt-icon">
          <div class="mt-icon-r" style="float: right;">
            <a href="#"><i class="fas fa-window-minimize"></i></a>
          </div>
        </div>
        <div class="mt-content">
            <div class="mt-img">
              <img src="" alt="" id="mt-img5">
            </div>
            <div class="mt-txt">
              <a href="" id="link5"><b><p id="heading5" style="overflow:hidden;"></p></b></a>
            </div>
          </div>
      </div>
      </div>
      <div id="hhhhhh" class="box">
        <div class="box-inner">
        <ul class="">
            <li>
                <div class="icn_nd_txt"><a href="index.html"><img src="img/1.png" alt=""></a>
                <div class="icn_open_txt"><p>Stock Watch</p></div>
                </div>
            </li>
            <li>
                <div class="icn_nd_txt"><a href="second.html"><img src="img/2.png" alt=""></a>
                <div class="icn_open_txt"><p>Trade now</p></div>
                </div>
            </li>
            <li>
                <div class="icn_nd_txt"><a href="table.html"><img src="img/33.png" alt=""></a>
                <div class="icn_open_txt"><p>Transaction history</p></div>
                </div>
            </li>
            <li>
                <div class="icn_nd_txt"><a href="table2.html"><img src="img/4.png" alt=""></a>
                <div class="icn_open_txt"><p>Portfolio</p></div>
                </div>
            </li>
            <li>
                <div class="icn_nd_txt"><a href="#"><img src="img/5.png" alt=""></a>
                <div class="icn_open_txt"><p>Help</p></div>
                </div>
            </li>
          </ul>
        </div>
      </div>
      </div>
    </div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

<br><br><br><br><br><br><br>
	<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_f68eb"></div>
  <div class="tradingview-widget-copyright"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 600,
  "height": 500,
  "symbol": "NSE:INFY",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "Light",
  "style": "1",
  "locale": "in",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "withdateranges": true,
  "allow_symbol_change": true,
  "details": true,
  "container_id": "tradingview_f68eb"
}
  );
  </script>
</div>
<!-- TradingView Widget END --> 
 <div>
 	<img src="img/relogo.png" style="width: 120px;height: 120px;margin-top: 40px;margin-left: 250px;">
 </div>
</div>
	

	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 gfhfgh">
	<div class="side-watchlist">
	<div class="watchlist-h">
	<h4>watchlist</h4>
	</div>
  <br>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
      <input type="text" name="search" placeholder="Add here" style="margin-left: 26px;height: 30px;width: 100px;">
      <input type="submit" name="Add" value="+" class="btn btn-info" style="width: 30px;font-size: 14px;text-align: center;">
    <input type="text" name="del" placeholder="Delete" style="margin-left: 10px;height: 30px;width: 100px;">
      <input type="submit" name="delete" value="-" class="btn btn-danger" style="width: 30px;font-size: 14px;text-align: center;">
</form><br>
<?php
if(isset($_POST['Add']))
{
  $x=$_POST['search'];
$gAPI ='https://www.alphavantage.co/query?function=TIME_SERIES_INTRADAY&symbol='.$x.'&interval=1min&apikey=7LADMM80QNXP6CB5';
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch,CURLOPT_URL,$gAPI);
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
  $zz=$data["Time Series (1min)"][$y]["1. open"];
  $z1=($zz-$z)/$zz;
}
else
{
  $z=$data["Time Series (1min)"][$d]["4. close"];
  $zz=$data["Time Series (1min)"][$d]["1. open"];
  $z1=($zz-$z)/$zz;
} 
echo "<br>";
$conn = new mysqli('localhost', 'root', '', 'toroi');
$sql = "INSERT INTO db1 (symbol, close, volume) VALUES ('$x',$z,$z1)";
if ($conn->query($sql) === TRUE) {
    
$sql1 = "SELECT id,symbol, close, volume FROM db1";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<div class='watchlist-list'>";
      echo "<ul class='list-inline'>";
      echo "<li>".$row["symbol"]."</li>";
      echo "<li>".$row["close"]."</li>";
      echo "<li class='color w-no'>".$row["volume"]."</li>";
      echo "</ul>";
      echo "</div>";
    }
}

$conn->close();
}
}
if(isset($_POST['delete']))
{
$x1=$_POST['del'];
$conn = new mysqli('localhost', 'root', '', 'toroi');
$sql = "DELETE FROM db1 WHERE symbol='$x1'";
if ($conn->query($sql) === TRUE) {
$sql2 = "SELECT symbol, close, volume FROM db1";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<div class='watchlist-list'>";
      echo "<ul class='list-inline'>";
      echo "<li>".$row["symbol"]."</li>";
      echo "<li>".$row["close"]."</li>";
      echo "<li class='color w-no'>".$row["volume"]."</li>";
      echo "</ul>";
      echo "</div>";
    }
}
}
$conn->close();
}
?>

		<div class="watch-btn">
  <button id="but" class="no_lne"><img src="img/eyes.png" height="120px"></button>
  </div>


	</div>
	</div>

	</div>

</div>
<div id="myModal" class="modal fade" role="dialog">
  
    <div class="modal-dialog" style="border:0px solid black;width: 500px;">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <p class="p1" style="font-size: 30px;text-align: center;padding-top: 30px;opacity:80%;color:#06130d;">Log In</p>
          <form role="form" action="login.php" method="POST">
            <div class="form-group">
              
              <input type="email" class="form-control" id="usrname" placeholder="Username or Email" name="email" style="text-align: center;">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="psw" placeholder="Password" name="password" style="text-align: center;">
            </div>
            <p style="text-align: center;">Forgot Your Password?</p><br>
              <button type="submit" class="btn btn-block" name="login" style="color:white;background-color:#39ac73"></span> Login</button>
              <br>
              <a href="#" class="btn btn-default pull-left" style="background-color:#336699;color:white;font-size: 18px;width:223px;height:35px;"><i class="fa fa-facebook"></i> Facebook</a>
              <form method="POST" action="glogin.php">
              <button type="submit" class="btn btn-default pull-right" style="background-color:#e75b32;color:white;font-size: 18px;width:223px;height:35px;"><span></span><i class='fab fa-google-plus-g'></i>Google+</button></form>
              <br>
              <br>
          </form>
        </div>
        <div class="modal-footer">
          <br>
          <p style="text-align: center;">Don't have an account?</p>
          <button type="submit" class="btn btn-block" style="color:#39ac73;background-color:white;border-color:#39ac73;" data-toggle="modal" data-target="#myModal1" data-dismiss="modal"></span>Sign-Up</button>
          <br>
          </div>
      </div>
  </div>
</div>



<div id="myModal1" class="modal fade" role="dialog">
   <div class="modal-dialog" style="width: 500px;">
    
      <!-- Modal content-->
      <div class="modal-content" style="background-color:#d6d6c2;">
        <div class="modal-body" >
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <p class="p1" style="font-size: 30px;text-align:center;padding-top: 30px;opacity:80%;color:#39ac73;">Let's get started!</p>
        <p style="text-align: center;">Start invetsting in just 5 minutes</p>
        <br>
          <form role="form" action="xx.php" method="POST">
            <div class="form-group" style="margin-left:43px;">
              
              <input type="text" class="form-control" id="name" placeholder="Username" name="Username1" style="text-align: center;width:400px;">
            </div>
            <div class="form-group" style="margin-left:43px;">
              
              <input type="email" class="form-control" id="Email1" placeholder="Email" name="Email1" style="text-align: center;width:400px;">
            </div>
            <div class="form-group" style="margin-left:43px;">
              <input type="password" class="form-control" id="password1" placeholder="Password" name="password1" style="text-align: center;width:400px;,">
            </div>
            <ol>
            	<li>1) Valid email address</li>
            	<li>2) Valid password has at least 1 lowecase letter</li>
            	<li>3) Valid password has atleast 1 capital letter</li>
            	<li>4) Valid password has atleast 1 number</li>
            	<li>5) Valid password has atleast 8 characters</li>
            </ol>
        </div>
        <div class="modal-footer">
          <br>
          <button type="submit" class="btn btn-block" name="next" style="color:white;background-color:#39ac73"></span>Next</button>
          <br>
          <p style="text-align: center;">
          By signing up you accept iBillionare's terms,ivestment<br>
          Mangement Agreement,ADV and Apex Agreement</p>
          </div>
          </form>
      </div>
  </div>
</div>
<br><br>
<div class="container-fluid">
	
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
  {
  "symbols": [
    {
      "description": "EUR/USD",
      "proName": "FX_IDC:EURUSD"
    },
    {
      "description": "BTC/USD",
      "proName": "BITFINEX:BTCUSD"
    },
    {
      "description": "ETH/USD",
      "proName": "BITFINEX:ETHUSD"
    },
    {
      "description": "NIFTY 50",
      "proName": "NSE:NIFTY"
    },
    {
      "description": "NIFTY NEXT 50",
      "proName": "NSE:NIFTYJR"
    }
  ],
  "locale": "in"
}
  </script>
</div>
<!-- TradingView Widget END -->

</div>
</body>

</html>

<a href="{{data.url}}">
     </a>
     <script type="text/javascript">

  var _gaq = _gaq || [];slide-toggle
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
   <script>
        $(document).ready(function() {
            $(".slide-toggle").click(function() {
                $("#hhhhhh").animate({
                    width: "toggle"
                });
              
            });
        });

    </script>
  <script>
$(document).ready(function(){
    $(".slide-toggle").click(function(){
        $(".form_sece").toggleClass( "intro" );
    });
});
</script>
  <script>
$(document).ready(function(){
 jQuery('#but').click(function() {
 
  $('.side-watchlist').toggleClass('cli');
    /*  event.preventDefault();
     /jQuery('.side-watchlist').animate({
      //  marginLeft: "+=300px"
      //}, "slow");
    $('.side-watchlist').addClass('cli');
    alert('ggfg');
    */
   });
   
   });
</script>
<style>
.cli{
  margin-left: 361px;
}
</style>

