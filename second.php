<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Waterwheel Carousel Plugin Demo</title>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style type="text/css">
#pop1{
    display: none;
}
#pop2{
    display: none;
}
li{
list-style:none;
}


.box {
    float: left;
    background: #eff0f4;
    display: none;
    width: 200px;
    padding: 0 42px;
    position: absolute;
    z-index: -1;
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
    height: 340px;
    position: relative;
    clear: both;
    overflow: hidden;
   background: transparent !important;
    margin: 132px auto;
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
				<li><a href=""><img src="img/notification2.png"></a></li>
				<li><a href=""><img src="img/user4.png"></a></li>
				<li><a href=""><img src="img/arrow1.png"></a></li>
			</ul>
			</div>
			</div>
		   
			</div>
		</div>
	</div>
</div>

<?php
session_start();
?>
<?php
$x='';
$y='';
$z='';
if(isset($_POST['searchx']))
{
	$x=$_POST['searchx'];
	$gAPI1 ='https://www.alphavantage.co/query?function=TIME_SERIES_INTRADAY&symbol='.$x.'&interval=1min&apikey=7LADMM80QNXP6CB5';;
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
	$_SESSION['symbol']=$x;
	$_SESSION['closing']=$z;
}
?>

<?php
$conn = new mysqli('localhost', 'root', '', 'toroi');
$qty=$price=$amt=0.0;
$symb='';
if(isset($_POST['mul']))
{
	$qty=$_POST['qty1'];
	$price=$_POST['price1'];
	$symb=$_POST['symbol1'];
	$amt=$qty*$price;
	$_SESSION['symbol11']=$symb;
	$_SESSION['qty']=$qty;
	$_SESSION['price']=$price;
	$_SESSION['amt']=$amt;
}
?>
<?php
$qty2=$price2=$amt2=0.0;
$symb='';
if(isset($_POST['mul2']))
{
	$qty2=$_POST['qty2'];
	$price2=$_POST['price2'];
	$amt2=$qty2*$price2;
	$symb=$_POST['symbol1'];
	$_SESSION['qty111']=$qty2;
	$_SESSION['price111']=$price2;
	$_SESSION['amt111']=$amt2;
	$_SESSION['symbol111']=$symb;
}
?>
<div class="sidebar-wrapper" style="float: left;width:100%">
	<div class="row add_wdth">
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:0;">
			<div class="sidebar-main" style="position: relative;">
			
				<div class="maz-toggle">
					<span id="bar"><i class="fas fa-bars slide-toggle "></i></span>
				</div>
				<div class="ghfgh" style="margin-top: -4px;">

	</div>
	<?php
	if(isset($_POST['order']))
	{
		$qty11=$_SESSION['qty'];
		$price11=$_SESSION['price'];
		$amt11=$_SESSION['amt'];
		$symb11=$_SESSION['symbol11'];
		$sqla="SELECT Quantity,Amount from db2 where Symbol='$symb11'";
		$result = $conn->query($sqla);
		if($result->num_rows==1)
		{
			while($row = $result->fetch_assoc()) 
			{
				$qty11=$row["Quantity"]+$qty11;
				$amt11=$row["Amount"]+$amt11;
			}
			$sqla1="UPDATE db2 set Quantity=$qty11,Amount=$amt11 where Symbol='$symb11'";
			if ($conn->query($sqla1) === TRUE) 
			{
      			echo "<script>alert('Stock is updated in your history')</script>";
    		}
		}
		else
		{
			$sql="INSERT INTO db2 (Symbol,Quantity,Price,Amount) VALUES ('$symb11',$qty11,$price11,$amt11)";
			if ($conn->query($sql) === TRUE) 
			{
      			echo "<script>alert('Stock is updated in your history')</script>";
    		}
    	}
	}
	if(isset($_POST['order2']))
	{
		$qty11a=$_SESSION['qty111'];
		$price11a=$_SESSION['price111'];
		$amt11a=$_SESSION['amt111'];
		$symb11a=$_SESSION['symbol111'];
		$sqla="SELECT Quantity,Amount from db2 where Symbol='$symb11a'";
		$result1 = $conn->query($sqla);
			while($row = $result1->fetch_assoc()) 
			{
				$qty11a=$row["Quantity"]-$qty11a;
				$amt11a=$row["Amount"]-$amt11a;
				
			}
			if($qty11a==0)
			{
				$sqla2="DELETE from db2 where Symbol='$symb11a'";
				if ($conn->query($sqla2) === TRUE) 
				{
      				echo "<script>alert('Stock has been cleared from your history')</script>";
    			}
			}
			if($qty11a!=0)
			{
			$sqla1="UPDATE db2 set Quantity=$qty11a,Amount=$amt11a where Symbol='$symb11a'";
			if ($conn->query($sqla1) === TRUE) 
			{
      			echo "<script>alert('Stock is updated in your history')</script>";
    		}
    		}
	}
	?>
			<div class="box">
				<div class="box-inner">
					<ul class="">
						<li>
						    <div class="icn_nd_txt"><a href="index.php"><img src="img/1.png" alt=""></a>
						    <div class="icn_open_txt"><p>Stock Watch</p></div>
						    </div>
						</li>
						<li>
						    <div class="icn_nd_txt"><a href="second.php"><img src="img/2.png" alt=""></a>
						    <div class="icn_open_txt"><p>Trade now</p></div>
						    </div>
						</li>
						<li>
						    <div class="icn_nd_txt"><a href="history.php"><img src="img/33.png" alt=""></a>
						    <div class="icn_open_txt"><p>Transaction history</p></div>
						    </div>
						</li>
						<li>
						    <div class="icn_nd_txt"><a href="history.php"><img src="img/4.png" alt=""></a>
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
		<div class="ktrv">
			<div class="serah_bar">
				<form class="Form_input" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
					<input type="text" name="searchx" placeholder="Search..">
				</form>
				<div class="form_sev_sec" style="height:400px;">
					<p>Symbol:<?php echo $_SESSION['symbol'];?> Amount:<?php echo $amt;?></p>
					<p>Closing:<?php echo $_SESSION['closing'];?> Quantity:<?php echo $qty;?></p>
					<ul style="margin-top: 70px;">
						<li><a href="#" id="sellpop1">sell</a></li>
						<li><a id="buypop1">buy</a></li>
					</ul>
				</div>
			</div>
			<div>
 </div>
		</div>
			
	</div>
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 gfhfgh">
	<div class="side-watchlist">
	
	<div class="watchlist-h">
	<h4>watchlist</h4>
	</div>
	<div class="watchlist-list">
	<div class="cross"><a href="#"><i class="fas fa-times"></i></a></div>
	<ul class="list-inline">
	<li>EUR</li>
	<li>12,30</li>
	<li class="color w-no">2500</li>
	<li><a href="#"></a></li>
	</ul>

	</div>
	<div class="watchlist-list">
	<div class="cross"><a href="#"><i class="fas fa-times"></i></a></div>
	<ul class="list-inline">
	<li>EUR</li>
	<li>12,30</li>
	<li class="color w-no-g">2500</li>
	<li><a href="#"></a></li>
	</ul>
	</div>
	<div class="watchlist-list">
	<div class="cross"><a href="#"><i class="fas fa-times"></i></a></div>
	<ul class="list-inline">
	<li>EUR</li>
	<li>12,30</li>
	<li class="  color w-no">2500</li>
	<li><a href="#"></a></li>
	</ul>
	</div>
	<div class="watchlist-list">
	<div class="cross"><a href="#"><i class="fas fa-times"></i></a></div>
	<ul class="list-inline">
	<li>EUR</li>
	<li>12,30</li>
	<li class="color w-no">2500</li>
	<li><a href="#"></a></li>
	</ul>

	</div>



	<div class="watchlist-list">
	<div class="cross"><a href="#"><i class="fas fa-times"></i></a></div>
	<ul class="list-inline">
	<li>EUR</li>
	<li>12,30</li>
	<li class="color w-no-g">2500</li>
	<li><a href="#"></a></li>
	</ul>
	</div>


	<div class="watchlist-list">
	<div class="cross"><a href="#"><i class="fas fa-times"></i></a></div>
	<ul class="list-inline">
	<li>EUR</li>
	<li>12,30</li>
	<li class="  color w-no">2500</li>
	<li><a href="#"></a></li>
	</ul>
	</div>



	<div class="watchlist-list">
	<div class="cross"><a href="#"><i class="fas fa-times"></i></a></div>
	<ul class="list-inline">
	<li>EUR</li>
	<li>12,30</li>
	<li class="color w-no">2500</li>
	<li><a href="#"></a></li>
	</ul>

	</div>


	<div class="watchlist-list">
	<div class="cross"><a href="#"><i class="fas fa-times"></i></a></div>
	<ul class="list-inline">
	<li>EUR</li>
	<li>12,30</li>
	<li class="color w-no-g">2500</li>
	<li><a href="#"></a></li>
	</ul>
	</div>
		<div class="watch-btn">
	<button id="but" class="no_lne"><img src="img/eyes.png" height="120px"></button>
	</div>



	</div>
	</div>
	
	</div>
	
	
	</div>
<div class="pop_upp" id="pop1">
	<div class="hlf_pp">
		<div class="row add_bg">
			<div class="col-md-11">
				<div class="logo_txt_hdng">
					<span class="lg_logo">
						<img src="img/logo.png">
					</span>
					<span class="logo_hd">TORO</span>
				</div>
			</div>
			<div class="col-md-1">
				<span class="cross_bt" id="cross_bt"><i class="fa fa-times"></i></span>
			</div>
		</div>
		<div class="row white_bg">
			<div class="col-md-12">
				<div class="hd_wht">
					<h2>Symbol: <?php echo $y;?>  Price: <?php echo $z;?></h2>
				</div>
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<div class="row mg_top">
					<div class="col-md-2">
						<span class="lbl_sp">Quantity</span>
							</br>
						<input class="left_sp" type="text" name="qty1" placeholder="Quantity" value="<?php echo $qty; ?>">
					</div>
					<div class="col-md-2">
						<span class="lbl_sp">Prices</span>
							</br>
						<input class="left_sp" type="text" name="price1" placeholder="Prices" value="<?php echo $price; ?>">
					</div>
					<div class="col-md-2">
						<span class="lbl_sp">.</span>
							</br>
						<input class="left_sp btn btn-info" type="submit" name="mul" value="X">
					</div>
					<div class="col-md-2">
						<span class="es_equal">=</span>
					</div>
					<div class="col-md-2">
						<span class="lbl_sp">Amount</span>
							</br>
						<input class="left_sp" type="text" name="amt" placeholder="Amount" value='<?php echo $amt; ?>'>
					</div>
					<div class="col-md-2">
						<span class="lbl_sp"><?php echo ' ';?></span>
							</br>
						<input class="left_sp btn btn-success" type="submit" name="order" value="Order" style="margin-top:8px;">
					</div>
					<br>
					<br>
					<h2 style="margin-top: 400px;">For selling</h2>
					<div class="col-md-2">
						<span class="lbl_sp">Quantity</span>
							</br>
						<input class="left_sp" type="text" name="qty2" placeholder="Quantity" value="<?php echo $qty2; ?>">
					</div>
					<div class="col-md-2">
						<span class="lbl_sp">Prices</span>
							</br>
						<input class="left_sp" type="text" name="price2" placeholder="Prices" value="<?php echo $price2; ?>">
					</div>
					<div class="col-md-2">
						<span class="lbl_sp">.</span>
							</br>
						<input class="left_sp btn btn-info" type="submit" name="mul2" value="X">
					</div>
					<div class="col-md-2">
						<span class="es_equal">=</span>
					</div>
					<div class="col-md-2">
						<span class="lbl_sp">Amount</span>
							</br>
						<input class="left_sp" type="text" name="amt2" placeholder="Amount" value='<?php echo $amt2; ?>'>
					</div>
					<div class="col-md-2">
						<span class="lbl_sp"><?php echo ' ';?></span>
							</br>
						<input class="left_sp btn btn-success" type="submit" name="order2" value="Order" style="margin-top:8px;">
					</div>
					<div class="col-md-2" style="margin-top: 30px;margin-left: 260px;">
						<span class="lbl_sp">Symbol</span>
							</br>
						<input class="left_sp" type="text" name="symbol1" placeholder="Symbol" value="<?php echo $_SESSION['symbol'];?>">
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>

<div class="pop_upp" id="pop2">
	<div class="hlf_tble_pp">
	    <span class="cross_bt_post" id="cross_bt_post"><i class="fa fa-times"></i></span>
		<div class="row">
			<div class="col-md-12" style="z-index: 99999;">
				<div style="overflow-x:auto;">
				  <table>
					<tbody><tr class="toP_bg_tAbLe">
					  <th style="padding-right: 52px;">Company</th>
					  <th>Current Price<br>/Change</th>
					  <th>Quantily <br> Buy/Sell</th>
					  <th>Investment <br> Average</th>
					  <th>Day's Gain % <br> Gain</th>
					  <th>Overall Gain % <br> Gain</th>
					  <th>Lastedt Value</th>
					  <th>Buy/Sell</th>
					</tr>
					<tr class="chk_bx_area">
					  <td style="padding-right: 20px;text-align: left;">
						<input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
						<span class="chk_txt">Vedanta(1100)</span>
					  </td>
					  <td>208.85<br> <span class="rEd_TxT">+1.10</span></td>
					  <td>1100<br>BUY</td>
					  <td>247.757 <br> 225.23</td>
					  <td>247.757 <br> <span class="rEd_TxT">225.23<div></div></span></td>
					  <td>-18.757 <br> <span class="rEd_TxT">225.23</span></td>
					  <td>38.757</td>
					  <td><a href="#" class="bUy_sl">Buy/Sell</a></td>
					</tr>
					<tr class="chk_bx_area">
					  <td style="padding-right: 20px;text-align: left;">
						<input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
						<span class="chk_txt">Vedanta(1100)</span>
					  </td>
					  <td>208.85<br> <span class="rEd_TxT">+1.10</span></td>
					  <td>1100<br>BUY</td>
					  <td>247.757 <br> 225.23</td>
					  <td>247.757 <br> <span class="rEd_TxT">225.23</span></td>
					  <td>-18.757 <br> <span class="rEd_TxT">225.23</span></td>
					  <td>38.757</td>
					  <td><a href="#" class="bUy_sl">Buy/Sell</a></td>
					</tr>
					<tr class="chk_bx_area">
					  <td style="padding-right: 20px;text-align: left;">
						<input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
						<span class="chk_txt">Vedanta(1100)</span>
					  </td>
					  <td>208.85<br> <span class="rEd_TxT">+1.10</span></td>
					  <td>1100<br>BUY</td>
					  <td>247.757 <br> 225.23</td>
					  <td>247.757 <br> <span class="rEd_TxT">225.23</span></td>
					  <td>-18.757 <br> <span class="rEd_TxT">225.23</span></td>
					  <td>38.757</td>
					  <td><a href="#" class="bUy_sl">Buy/Sell</a></td>
					</tr>
					<tr class="chk_bx_area">
					  <td style="padding-right: 20px;text-align: left;">
						<input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
						<span class="chk_txt">Vedanta(1100)</span>
					  </td>
					  <td>208.85<br> <span class="rEd_TxT">+1.10</span></td>
					  <td>1100<br>BUY</td>
					  <td>247.757 <br> 225.23</td>
					  <td>247.757 <br> <span class="rEd_TxT">225.23</span></td>
					  <td>-18.757 <br> <span class="rEd_TxT">225.23</span></td>
					  <td>38.757</td>
					  <td><a href="#" class="bUy_sl">Buy/Sell</a></td>
					</tr>
					<tr class="chk_bx_area">
					  <td style="padding-right: 20px;text-align: left;">
						<input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
						<span class="chk_txt">Vedanta(1100)</span>
					  </td>
					  <td>208.85<br> <span class="rEd_TxT">+1.10</span></td>
					  <td>1100<br>BUY</td>
					  <td>247.757 <br> 225.23</td>
					  <td>247.757 <br> <span class="rEd_TxT">225.23</span></td>
					  <td>-18.757 <br> <span class="rEd_TxT">225.23</span></td>
					  <td>38.757</td>
					  <td><a href="#" class="bUy_sl">Buy/Sell</a></td>
					</tr>
					<tr class="chk_bx_area">
					  <td style="padding-right: 20px;text-align: left;">
						<input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
						<span class="chk_txt">Vedanta(1100)</span>
					  </td>
					  <td>208.85<br> <span class="rEd_TxT">+1.10</span></td>
					  <td>1100<br>BUY</td>
					  <td>247.757 <br> 225.23</td>
					  <td>247.757 <br> <span class="rEd_TxT">225.23</span></td>
					  <td>-18.757 <br> <span class="rEd_TxT">225.23</span></td>
					  <td>38.757</td>
					  <td><a href="#" class="bUy_sl">Buy/Sell</a></td>
					</tr>
				  </tbody></table>
				</div>
			</div>
		</div>
	</div>
</div>



</body>
</html>


<a href="{{data.url}}">
     </a>
     <script type="text/javascript">

  var _gaq = _gaq || [];
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
                $(".box").animate({
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
    $(".slide-toggle").click(function(){
        $(".ghfgh").toggleClass( "vkkk" );
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
   
   $(document).ready(function(){
 jQuery('#but_lft').click(function() {
 
  $('.ghfgh').toggleClass('cli2');
   });
   })
   
   
   $("#sellpop1").click(function(){
       $(this).attr("href", "#pop1");
       $("#pop1").css({"display":"block"});
     
   });
   $("#cross_bt").click(function(){
       $("#pop1").css({"display":"none"});
       $("#sellpop1").attr("href", "#");
   });
   $("#cross_bt").click(function(){
       $("#pop1").css({"display":"none"});
       $("#buypop1").attr("href", "#");
   });
   
  $("#buypop1").click(function(){
     //alert("rrr");
      // $(this).attr("href", "#pop2");
       $("#pop1").css({"display":"block"});
     
   });
$("#cross_bt_post").click(function(){
    //if($("#pop2").css('display') !== 'none'){
        $("#pop2").css({"display":"none"});
       // alert("pop 2 is showing");
    //}
});
   
   });
</script>

<style>
.cli{
	margin-left: 300px;
}
.cli2{
	margin-left: -353px;
}
.left_bare {
    position: absolute;
    top: 170px;
    /* left: 50%; */
    background: transparent;
    padding: 4px 0px;
    border: none;
    font-family: arial;
    font-weight: 400;
    text-transform: capitalize;
    font-size: 16px;
    font-weight: bold;
    font-family: arial;
    color: #999;
}
.ghfgh {
    margin-top: -4px;
    background: #fff;
    float: left;
    width: 100%;

}
.vkkk {
    display: none;
}
.watch-btn {
    position: relative;
    z-index: 111;
}
</style>

